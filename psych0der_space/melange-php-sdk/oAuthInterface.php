<?php
	

require './base_sdk/facebook.php';
require_once './base_sdk/apiClient.php';
require_once './base_sdk/contrib/apiOauth2Service.php';




class oAuthLogin 
{
	
	
	private $facebook;
	private $google;
	private $goauth;
	private $twitter;
	private $user;
	private $status = 0;
	private $user_profile = null;   
	private $_hostname = null;
	private $_request_url = null;
	
	
	
	 			
	function __construct() 
	{
		include 'oauth_config.php';
		$this->facebook = new Facebook(array(
			'appId'  => $apiData['facebook']['appId'],
	  	  	'secret' => $apiData['facebook']['secret'],
			));
		
		
		
		$this->google  = new apiClient();
		$this->google->setApplicationName("Cyber Slick");
		$this->google->setClientId($apiData['google']['clientId']);
		$this->google->setClientSecret($apiData['google']['clientSecret']);
		$this->google->setRedirectUri($apiData['google']['redirectUrl']);
		$this->google->setDeveloperKey($apiData['google']['developerKey']);
		
			
			
		$this->checkEstablishedSession();
	
	}
	
	public function fbSessionManager() 
	{
		
		$this->user = $this->facebook->getUser(); 		// fetches the status
		if($this->user)
			$this->status = 1;
		
		
		
	}
	
	public function googleSessionManager() 
	{
		include 'oauth_config.php';
		$this->goauth = new apiOauth2Service($this->google);
		
		if (isset($_GET['code'])) {
			
		  $this->google->authenticate();
		  
		  $_SESSION['token'] = $this->google->getAccessToken();
		  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		 // header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) {
			echo "<h1>lol</h1>";
		 $this->google->setAccessToken($_SESSION['token']);
		}

		if (isset($_REQUEST['logout'])) {
		  unset($_SESSION['token']);
		  $this->google->revokeToken();
		}

		if ($this->google->getAccessToken()) {
		  $user = $this->goauth->userinfo->get();
		 
		  $email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
		  $img = filter_var($user['picture'], FILTER_VALIDATE_URL);
		  $usr = filter_var($user['name'], FILTER_VALIDATE_URL);
		  $personMarkup = "$email<div><img src='$img?sz=50'></div>";
		  echo $email;
		  echo "<br>".$user['name'];
		  
		  $this->status = 2;
		  $this->printGOAuthData($personMarkup);
		  // The access token may have been updated lazily.
		  $_SESSION['token'] = $this->google->getAccessToken();
		  echo "     ";
		  print "<a class='logout' href=\"".'http://localhost:8888/php_sandbox/melange-php-sdk/logout.php'."\">google Logout</a>";
		} else {
		  $authUrl = $this->google->createAuthUrl();
		  print "<a class='login' href='$authUrl'>gConnect Me!</a>"; 
		  
		  
		}
		
		
		
	}
	
	public function checkEstablishedSession() 
	{
		
		$this->fbSessionManager();
		if($this->status == 1)
		{
		  try {
			    
			    $this->user_profile = $this->facebook->api('/me');
			  } catch (FacebookApiException $e) {
			    $this->printError($e);
			    $user = null;
			  }
			
		if($this->user_profile !=null)
			{
				include 'oauth_config.php';
				
				$url = $this->facebook->getLogoutUrl(array( 'next' =>'http://'.$_path.'/logout.php'));
				$this->printLogOutButton($url);
				$this->printUserData($this->user_profile);
				
			}	
			
			
			
		}
		
		if($this->status ==0)
			$this->googleSessionManager();
		
		 if($this->status == 0)
		{
			$url = $this->facebook->getLoginUrl();
			$this->printLoginButton($url);
			
			
		}
		
	}
	
	public function printError($e)
	{
		echo "<h3 id=\"exception\">".$e."</h3>";
		
	}
	
	public function printLogOutButton($url) 
	{
		
		echo "<a href=\"".$url."\">logout</a>";
		
		
	}
	
	public function printLoginButton($url) 
	{
		
		echo "<a href=\"".$url."\"><img src=\"./images/fb.png\"></a>";
		
		
	}
	
	public function printUserData($userdet) 
	{
		
		echo "<h3>You</h3></br>
      <img src=\"https://graph.facebook.com/".$this->user."/picture\">";
	  echo "<br><br>";
	  echo "<ul><li>".$this->user_profile["name"]."</li><li>".$this->user_profile["username"]."</li></ul>";
		
	}
	
	public function printGOAuthData($data)
	{
		echo "</br></br";
		print $data;
		
	}
	
	
}



?>