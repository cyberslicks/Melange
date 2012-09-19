<?php
		

class Login
{
	
	private $_id;
	private $_username;
	private $_password;
	private $_passmd5;
	private $_active;
	
	private $_errors;
	private $_access;
	private $_login;
	private $_token;
	
	
	public function __construct()
	{
		$this->_errors= array();
		$this->_login = isset($_POST['login']) ? 1 : 0;
		$this->_access= 0;
		
		if(isset($_POST['token']))
		{
			$this->_token = $_POST['token'] ;
		}
		else
		{
			$this->_token = 'XXX';
		}
	//	echo "$this->_token</br>";
		
		$this->_id = 0;
		
		if(isset($_SESSION['uname']) || $this->_login)
		{
			$this->_username = ($this->_login) ? $this->filter($_POST['uname']) : $_SESSION['uname'];
		}
		else
		{
			$this->_username = 'xx';
		}
		
			if(isset($_SESSION['pass']) || $this->_login)
			{
				$this->_password = ($this->_login) ? $this->filter($_POST['pass']) : $_SESSION['pass'];
			}
			else
			{
				$this->_password = 'xx';
				
			}
			
			
				if(isset($_SESSION['pass']) || $this->_login)
				{
					$this->_passmd5 = ($this->_login) ? (md5($this->_password)) : $_SESSION['pass'];
				}
				else
				{
				$this->_passmd5 = 'xx';

				}

		
		
	//	echo "$this->_username</br>";
	//	$this->_password = ($this->_login) ? $this->filter($_POST['pass']) : '';
	//	echo "$this->_password</br>";
	//	$this->_passmd5 = ($this->_login) ? (md5($this->_password)) : $_SESSION['pass'];
		
		
	
	}
	
	
	public function isLoggedIn()
	{
	//	echo "func: isLoggedin()</br>";
		($this->_login) ? $this->verifyPost() : $this->verifySession();
		return $this->_access;
	}
	
	
	public function filter($var)
	{
		
		return preg_replace('/[^a-zA-Z0-9-_]/','',$var);

	}
	
	public function verifyPost()
	{
		
		try
		
			{
				//echo "</br>".$this->isTokenValid();
					if(!$this->isTokenValid())
						throw new Exception('Invalid Form submission');
					
					if(!$this->isDataValid())	
						throw new Exception('Invalid Form Data');
		
					if(!$this->verifyDatabase())
						throw new Exception("Invalid Username/Password");
			
					if(!$this->isActivated())
					throw new Exception('Your account is not activated.Please check your email id');

					$this->_access = 1;
					$this->registerSession();
			
			}
		
		catch(Exception $e)
			{
			array_push($this->_errors,$e->getMessage());
		
		//	$this->_errors = $e->getMessage();
				
			}
	}
	
	public function verifySession()
	{
	//	echo "func: verifySession()</br>";
		if($this->sessionExists() && $this->verifyDatabase())
			$this->_access = 1;
		
		
		
	}
	
	
	public function verifyDatabase()
	{

	//	echo "</br> pass = $this->_passmd5 </br>";
			include "config.php";

	
		$this->_passmd5 = mysql_escape_string($this->_passmd5);
	
		$query = "SELECT id  from users WHERE  username ='$this->_username' AND password ='$this->_passmd5'";
	//	echo "</br> $query </br>";
	//	echo "check database</br>";

	
		$result = $conObj->query($query);
	//	echo " num of rows are $result->num_rows !</br>";
		if($result->num_rows)
		{
			$row = $result->fetch_object();
			$this->_id = $row->id;
			return true;
	
		}
		
		else 
			return false;
		
	}
	
	
	public function isActivated()
	{
		include "config.php";
	//	require_once('./resources/config.php');
	
			$query1 = "SELECT active  from users WHERE  username ='$this->_username' AND password ='$this->_passmd5'";
			$result1 = $conObj->query($query1);
			if($result1->num_rows)
				{
					$row1 = $result1->fetch_object();
					$this->_active = $row1->active;
						if($this->_active==1)
						{
							return true;
						}
						
						else
							return false;
						

				}

				else 
					return false;
		
		
	}
	
	public function isDataValid()
	{
	//	echo "here ..</br>";
		if(preg_match('/[a-zA-Z0-9-_]+/',$this->_username) AND preg_match('/[a-zA-Z0-9-_]+/',$this->_password))
		{
	//		echo " lol </br>";
				return 1;
	
		}
		
		 else
			return 0;
	//	return (preg_match('/[a-zA-Z0-9-_]+/',$this->_username) && preg_match('/[a-zA-Z0-9-_]{6-15}/',$this->_password)) ?1 :0;
		
		
	}
	
	
	public function isTokenValid()
	{
	//	if(isset($_SESSION['token'])) ;//echo "han hai to sahi</br>";
	//	if($_SESSION['token'] == $this->_token); //echo "ab kya chahiye??";
	//	else
	//	echo "yeh kaise ho sakta hai?";
	
	if(isset($_SESSION['token']))
	{
		//echo "yes it is there</br>";
			if($this->_token == $_SESSION['token'])
			{
			//	echo " all clear </br>";
				return 1;
			}
			
			else
			{
				return 0;
			}
	}
	else
		return 0;
		//return ((isset($_SESION['token']) AND $this->_token == $_SESSION['token']) ?1 :0);  
		
		
		
	}
	
	public function registerSession()
	{
		
		$_SESSION['ID'] = $this->_id;
		$_SESSION['uname'] = $this->_username;
		$_SESSION['pass'] = $this->_passmd5;
		$_SESSION['access'] = $this->_access;
		
	}
	
	public function sessionExists()
	{
	//	echo "func:sessionExists()</br>";
		//	if($this->_login==0)
		//	{
	//			echo "inside if</br>";
		//		unset($_SESSION['uname']);
		//		unset($_SESSION['pass']);
		//		unset($_SESSION['token']);
				
		//	}
		return (isset($_SESSION['uname']) && isset($_SESSION['pass'])) ?1 :0;
		
	}
	
	public function showErrors()
	{
		
			echo '<section id="error">
			
				<header> <h3> Following Errors occurred while submitting Form </h3> </header> 
				<ul>';
		
		foreach($this->_errors as $key => $val)
		{
			
			
			echo "<li>";
			echo "$val";
			echo "</li>";
		}
		echo "</ul>";
		echo '	</section>	';	
		
	}
	
	
	
}







?>