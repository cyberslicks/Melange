<?php
	

require './base_sdk/facebook.php';
require_once './base_sdk/apiClient.php';
require_once './base_sdk/contrib/apiOauth2Service.php';
ob_start();



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
	private $_username = null;
	private $_useremailid = null;
	private $_user_dp = null;
	
	
	
	 			
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
		$enail1 = null;
		$this->user = $this->facebook->getUser(); 		// fetches the status
		if($this->user)
			
		
	  try {
			    
		    $this->user_profile = $this->facebook->api('/me');
			$email1 = $this->facebook->api('/me?fields=email');
			print_r($email1['email']);
			
		  } catch (FacebookApiException $e) {
		    $this->printError($e);
		    $user = null;
		  }
			
	if($this->user_profile !=null)
		{
			include 'oauth_config.php';
  			  $_SESSION['oauth_vendor'] = "facebook";
  		  	  $_SESSION['logged_in'] = 1;
  		  	  $_SESSION['oauth_token'] = $this->facebook->getAccessToken();
			  $this->status = 1; // logged in using facebook
			
			$url = $this->facebook->getLogoutUrl(array('req_perms' => 'email','next' =>'http://'.$_path.'/logout.php'));
			$this->printFbLogOutButton($url);
			//$this->printFbUserData($this->user_profile);
			print_r($email1);
				
		}	
			
		
	}
	
	public function googleSessionManager() 
	{
		include 'oauth_config.php';
		$this->goauth = new apiOauth2Service($this->google);
		
		if (isset($_GET['code'])) {
			
		  $this->google->authenticate();
		  
		  $_SESSION['token'] = $this->google->getAccessToken();
		  $to =  json_decode($this->google->getAccessToken());
		  $_SESSION['oauth_vendor'] = "google";
		  $_SESSION['logged_in'] = 1;
		  $_SESSION['oauth_token'] = $to->access_token;
		  
				  
		  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
		  ob_flush();
		}

		if (isset($_SESSION['token'])) {
			
		 $this->google->setAccessToken($_SESSION['token']);
		}

		if (isset($_REQUEST['logout'])) {
		  unset($_SESSION['token']);
		  $this->google->revokeToken();
		}

		if ($this->google->getAccessToken()) {
		  $user = $this->goauth->userinfo->get();
		  print_r($user);
		 
		  $email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
		  $img = filter_var($user['picture'], FILTER_VALIDATE_URL);
		  $usr = filter_var($user['name'], FILTER_VALIDATE_URL);
		  $personMarkup = "$email<div><img src='$img?sz=50'></div>";
		  //echo $email;
		  echo "<br>".$user['name'];
		  
		  $this->status = 2;
		 // $this->printGOAuthData($personMarkup);
		  // The access token may have been updated lazily.
		  $_SESSION['token'] = $this->google->getAccessToken();
		  echo "     ";
		  //echo "<a class='logout' href=\""."http://".$_path."/logout.php"."\">google Logout</a>";
		  $this->printLogOutButton();
		
		} 
		
		
		
		
	}
	
	public function checkEstablishedSession() 
	{
		
		$this->fbSessionManager();
		
		
		
		if($this->status ==0)
			$this->googleSessionManager();
		
		 if($this->status == 0)
		{
			$url = $this->facebook->getLoginUrl();
			$this->printFbLoginButton($url);
			$url = $this->google->createAuthUrl();
			$this->printGoogleLoginButton($url);
			
			
		}
		
	}
	
	public function printError($e)
	{
		echo "<h3 id=\"exception\">".$e."</h3>";
		
	}
	
	public function printFbLogOutButton($url) 
	{
		
		echo "<a href=\"".$url."\">logout</a>";
		
		
	}
	
	public function printFbLoginButton($url) 
	{
		
		echo "<a href=\"".$url."\"><img src=\"./images/fb.png\"></a>";
		
		
	}
	
	public function printGoogleLoginButton($url)
	{
		
		echo "<a href=\"".$url."\"><img src=\"./images/google.png\"></a>";
		
	}
	
	public function printFbUserData($userdet) 
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
	
	public function printLogOutButton()
	{
		include 'oauth_config.php';
		echo "<a class='logout' href=\""."http://".$_path."/logout.php"."\">google Logout</a>";
		
	}
	
	public function getUserData()
	{
		if($this->status == 1)
		{
			$userData =  array();
			$userData['img'] = "https://graph.facebook.com/".$this->user."/picture\">";
			$userData['name'] = $this->user_profile["name"];
			$userData['email'] = $this->user_profile["email"];
			$userData['id'] = $this->user_profile["id"];
			return $userData;
			
			
		}
		
		else if($this->status ==2)
		{
			
			$user = $this->goauth->userinfo->get();
			$userData =  array();
			
  		 
  		 	 $img = filter_var($user['picture'], FILTER_VALIDATE_URL);
  			 $userData['img'] = $img.'?sz=50';
			 $userData['name'] = filter_var($user['name'], FILTER_VALIDATE_URL);
			 $userData['email'] = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
			 $userData['id'] = $user['id'];
			return $userData;
			
			
		}
			
	}
	
	
}

?>