<?php
ob_start();
	
	require_once ('../mysqli_connect.php'); // Connect to the db.
	//session_start();
    mysql_select_db("melange", $dbc);
	$errors = array(); // Initialize an error array.
	if (empty($_POST['first'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$fn = mysql_real_escape_string( trim($_POST['first']));
	}
	
	// Check for a last name:
	if (empty($_POST['last'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysql_real_escape_string( trim($_POST['last']));
	}
	
	// Check for an email address:
	if (empty($_POST['username'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysql_real_escape_string( trim($_POST['username']));
	}
	
	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysql_real_escape_string( trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	if (empty($_POST['day'])) {
		$errors[] = 'You forgot to enter your DOB';
	} else {
		$d = mysql_real_escape_string( trim($_POST['day']));
	}
	if (empty($_POST['year'])) {
		$errors[] = 'You forgot to enter your DOB';
	} else {
		$y = mysql_real_escape_string( trim($_POST['year']));
	}
	if (empty($errors)) { // If everything's OK.*/
	
		// Register the user in the database...
		$p = md5($p); // hashing it with md5
		// Make the query:
		$q = "INSERT INTO users (first, last, username, pass, day,year,registration_date) VALUES ('$fn', '$ln', '$e', '$p','$d','$y', NOW() )";		
		$r = mysql_query ($q, $dbc); // Run the query.
		
		$fl=$fn . ' ' .$ln;
		               $q1 = "INSERT INTO stories (title,description,when1) values ('$fl',' has recently been registered on ', NOW())";
		               $r1 = mysql_query ($q1,$dbc);
		
		
		
		
		
		
		
		
		
		
		if ($r && $r1) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered. </p><p><br /></p>';
			echo "Redirecting...Plz wait.";
		header( "refresh:3;url=../Front.php" );
		
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysql_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysql_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		//include ('includes/footer.html'); 
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p>The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	ob_flush();
	mysql_close($dbc); // Close the database connection.

 // End of the main Submit conditional.
?>