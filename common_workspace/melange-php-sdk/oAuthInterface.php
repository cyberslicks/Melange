<?php
	

require './base_sdk/facebook.php';




class oAuthLogin 
{
	
	
	private $facebook;
	private $google;
	private $twitter;
	private $user;
	private $status = 0;
	private $user_profile = null;   
	private $_hostname = null;
	private $_request_url = null;
	
	//global $_SERVER;
	//echo $_SERVER;
	// $_request_url = $_SERVER['REQUEST_URI'];
	 //$_path = dirname($_host.$_request_url);
	//echo $_path;
	
	 			
	
	function __construct() 
	{
		include 'oauth_config.php';
		$this->facebook = new Facebook(array(
			'appId'  => $apiData['facebook']['appId'],
	  	  	'secret' => $apiData['facebook']['secret'],
			));
		
			$this->_hostname = $_SERVER['HTTP_HOST'];
			//echo $this->_hostname;
			
			//echo $_SERVER['HTTP_HOST'] ."+". $_SERVER['REQUEST_URI'];
		$this->checkEstablishedSession();
	
	}
	
	public function fbSessionManager() 
	{
		
		$this->user = $this->facebook->getUser(); 		// fetches the status
		if($this->user)
			$this->status = 1;
		
		
		
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
		
		else if($this->status == 0)
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
	
	
}



?>