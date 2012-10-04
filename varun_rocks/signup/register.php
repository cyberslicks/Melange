<?php
	
	
	require_once ('../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	if (empty($_POST['first'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first']));
	}
	
	// Check for a last name:
	if (empty($_POST['last'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last']));
	}
	
	// Check for an email address:
	if (empty($_POST['username'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['username']));
	}
	
	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	if (empty($_POST['day'])) {
		$errors[] = 'You forgot to enter your DOB';
	} else {
		$d = mysqli_real_escape_string($dbc, trim($_POST['day']));
	}
	if (empty($_POST['year'])) {
		$errors[] = 'You forgot to enter your DOB';
	} else {
		$y = mysqli_real_escape_string($dbc, trim($_POST['year']));
	}
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO users (first, last, username, pass, day,year,registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'),'$d','$y', NOW() )";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered. In Chapter 11 you will actually be able to log in!</p><p><br /></p>';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

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
	
	mysqli_close($dbc); // Close the database connection.

 // End of the main Submit conditional.
?>