<?php

session_start();
include('./resources/config.php');
include('./resources/templates/header.php');







?>



		<section id="register-form">
			
	


<?php

unset($errors);
$errors = array();


	if(isset($_POST['fname'])  && !empty($_POST['fname']))
	{
		$fname = mysql_escape_string($_POST['fname']);
	}

	else
	{
		array_push($errors,"First Name field cant be empty!");    // array_push() enters value to end of array
	}


	if(isset($_POST['feed'])  && !empty($_POST['feed']))
	{
		$feed = mysql_escape_string($_POST['feed']);
	}

	else
	{
		array_push($errors,"Please enter your feedback");    // array_push() enters value to end of array
	}



	
	

	
	if(isset($_POST['email'])  && !empty($_POST['email']))
	{
		if(preg_match("/^[_a-zA-Z0-9-]+(\.[a-zA-Z0-9-_]+)*@[a-z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,4})$/",$_POST['email']) ==1) 
		 // this is regular expression to validate email
	$email = mysql_escape_string($_POST['email']);
		
		else
		{
			array_push($errors,"This is not valid email");
		}

	}

	else
	{
		array_push($errors," Email field cant be empty!");
	}

	
//	array_unshift($errors,"You should accept terms and conditions");	
	
	if(isset($_POST['captcha']) && $_SESSION['letters']!= md5(strtolower($_POST['captcha'])))
	{
		array_push($errors,"Captcha text entered is incorrect");		
	}



if(count($errors)==0)
{
	//echo "no errors  </br>";
	$msg = "Your feedback has been successfully submitted.We will get back to you shortly";

	
	
	$query = "INSERT INTO feedback VALUES ('".$fname."','".$email."','".$feed."',NOW())";
	
	$result = $conObj->query($query);
	if($conObj->affected_rows < 1)
		$alert = "We apologize some error occurred while connecting to database .... Please try sometime later.";
	

}

?>




<?php if(isset($alert) && isset($_POST['token']))   

{
echo'     

			<section id="error">
			<header> <h3> Following Errors occurred while submitting Form </h3> </header> 	
			<ul>	
				<li>'." $alert". '</li>
				
			
			</ul>	
		</section> ';
}	
				
	?>			


	<?php 
	 if(isset($msg) && isset($_POST['token']))   

	{
	echo'     

				<section id="error">
				<header> <h4>'. $msg .'</h4> </header> 	
				
			</section> ';
	}	

		?>

	<?php
	
 if(count($errors)>0 && isset($_POST['token']))
{
	echo'     

				<section id="error">
				<header> <h3> Following Errors occurred while submitting Form </h3> </header> 	
				<ul>';
	
	foreach($errors as $err)
{
	
				echo	"<li>".$err . "</li>";

}

echo '				</ul>	
			</section> ';
	
	
	
}	
	
	?>
	
			
		<section id="form">
			
			<form id="RegisterUser" method="post" action="">
			
				<input type="hidden" name="token" value="submitted" />
				<p>
				<label  for="fname">First Name</label><em> * </em>
				
				<input id="fname" name="fname" type="text" class="text"  placeholder="John"/>
				</p>
				
				
	
			
			

				<p>
					<label for="email">Email</label><em> * </em>
					
					<input id="email" name="email" type="email" class="text" placeholder="john.seed@example.com"value=""/>
				</p>
				
				
				<p>
					<label for="feed">Enter your Feedback</label></br></br>
					<textarea style="background-image:url('./img/layout/black_patt.jpg');color:#ddd;margin-left:10px;margin-bottom:20px;border-radius:5px;border:solid 1px #444;font-size:16px;text-align:left;text-shadow:0px 0px 0px black;padding:7px 8px 7px 30px;outline:none;width:400px;height:260px;" id="feed" name="feed" class="text" rows="8" cols="30"></textarea>
					
					
					</p>
					
				<p>
					</br>
					<img src="./captcha/captcha.php" width="300" height="100" alt="captcha image">
				</br>
					<input id="pass" name="captcha" type="text" class="text" />
					
					
				</p>
				
				
				
				
				<p>
					<button id="registerNew" type="submit">Register</button>
				</p>
			
				
			
			</form>
			
		</section>
			
			
	<section id="sidebar">
			
			
			
		</section>
	
	
	



<?php

include('./resources/templates/footer.php')


?>