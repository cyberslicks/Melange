<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function validate()
{
	var username = document.register.username.value;
	if(username == '')
	{
		alert('Please enter username');
		document.register.username.focus();
		return false;
		
	}
	var password = document.register.password.value;
	if(password == '')
	{
		alert('Please enter password');
		document.register.password.focus();
		return false;
		
	}
	//
	var name = document.register.name.value;
	if(name == '')
	{
		alert('Please enter name');
		document.register.name.focus();
		return false;
		
	}
	var address = document.register.address.value;
	if(address == '')
	{
		alert('Please enter address');
		document.register.address.focus();
		return false;
		
	}
	var mobile = document.register.mobile.value;
	if(mobile == '')
	{
		alert('Please enter mobile');
		document.register.mobile.focus();
		return false;
		
	}
	var qualification = document.register.qualification.value;
	if(qualification == '')
	{
		alert('Please enter qualification');
		document.register.qualification.focus();
		return false;
		
	}
	var email = document.register.email.value;
	if(email == '')
	{
		alert('Please enter email');
		document.register.email.focus();
		return false;
		
	}
	

	var dob = document.register.dob.value;
	if(dob == '')
	{
		alert('Please enter Date of Birth');
		document.register.dob.focus();
		return false;
		
	}
	return true;
	
}
		
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="themes/base/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery-1.4.2.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.core.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="ui/jquery.ui.datepicker.js"></script>
	<link type="text/css" href="../demos.css" rel="stylesheet" />
	<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
	</script>
	<script type="text/javascript">
	$(function() {
		$("#datepicker1").datepicker();
	});
	</script>
<title>Untitled Document</title>
<link href="style1.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
body, td, th {
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333;
}
body {
	background-color:#1F1F1F;
	margin: 0;
	/*background-image: url(img/background.jpg);*/
}
a, a:visited {
	color: #000066;
	text-decoration: underline;
}
a:hover {
	text-decoration: none;
}
form {
	margin: 0;
	padding: 0;
}
input, select, textarea {
	font-family: Tahoma, Arial, Helvetica, sans-serif;
	font-size: 11px;
	padding: 3px;
}
#login_container {
	color: #333;
	background-color:#3750B0;
	text-align: left;
	width: 330px;
	padding: 1px;
	margin: 125px auto 125px auto;
	
}
#logo {
	text-align: center;
	margin: 0;
	padding: 50px 0 0 0;
}
#login_container #login {
	background-color: #EFEFEF;
	text-align: left;
	margin: 0;
	padding: 10px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
}
#login_container #login_failed {
    background-color: #FCF9D2;
    text-align: center;
    padding: 10px;
    margin: 0 0 1px 0;
}
#login_container #extra_info {
	background-color: #CCC;
	text-align: left;
	padding: 10px;
	margin: 1px 0 0 0;
}
#login_container #extra_info2 {
    background-image:url(images/menubg.gif);
	background-repeat:repeat-x;
	text-align: left;
	padding: 10px;
	color:#FFFFFF;
	margin: 1px 0 0 0;
}
.admintext{
font-family:tahoma, Verdana, Arial;
font-size:12px;
font-weight:bold;
color:#FFFFFF;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style></head>

<body>

<div id="login_container">
<div id="extra_info2" align="center">Geographic Information Login Panel</div>
  <div id="login">
    <form name="register" method="post" action="reg_submit.php" onsubmit="return validate();">
      <table width="100%" border="0" cellspacing="4" cellpadding="0" class="register">
        <tr>
          <td colspan="2" style="color:#FF3300; font-size:10px;">* All fields are mandatory </td>
        </tr>
        <tr>
          <td width="42%">Username</td>
          <td width="58%"><input type="text" name="username" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" /></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" /></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="address"></textarea></td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td><input type="text" name="mobile" /></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" /></td>
        </tr>
        <tr>
          <td>Qualification</td>
          <td><select name="qualification">
              <option value="">Select Qualification</option>
              <option value="B.Sc">B.Sc.</option>
              <option value="M.Sc">M.Sc.</option>
              <option value="B.Com">B.Com</option>
              <option value="M.Com">M.Com</option>
              <option value="BBA">BBA</option>
              <option value="MBA">MBA</option>
              <option value="B.Tech">B.Tech.</option>
              <option value="M.Tech">M.Tech.</option>
              <option value="BCA">BCA</option>
              <option value="MCA">MCA</option>
              <option value="Other">Others</option>
          </select></td>
        </tr>
        
        <tr>
          <td>Date of Birth </td>
          <td><input type="text" id="datepicker" name="dob" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
  </div>
  <div id="extra_info">Powered by :Himanshu Sharma </div>
</div>
</body>
</html>
