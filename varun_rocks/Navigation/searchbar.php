<?php

require_once ('../mysqli_connect.php'); // Connect to the db.

if (empty($_POST['q'])) {
		echo 'Nothing was searched for...';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['q']));
		$q = "SELECT data FROM SEARCHBAR where search=$fn";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			
			echo '<h1>$row['data']</h1>';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc);
	}


?>