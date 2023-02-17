<?php
// special_update.php - Upodate Specials
// Written by:  Programmer, Date	

// Verify that program was called from Landing Page and LOGON
	require('landing.php');
	
// Variables
	$msg		= NULL; 
	$pgm2		= "$pgm?p=special_update"; 
	$pgm3		= "$pgm?p=page3";
	
// Input
	if (isset($_GET['e']))		$event 	= $_GET['e'];		else $event = NULL;
	if (isset($_POST['event']))	$event 	= $_POST['event'];
	if (isset($_POST['title']))	$title 	= $_POST['title'];	else $title = NULL;	
	if (isset($_POST['price']))	$price 	= $_POST['price'];	else $price = NULL;
	
// Input Verification
	if (isset($_POST['submit'])) {
		if ($event == NULL)		$msg .= 'Event is missing<br>';
		if ($title == NULL)		$msg .= 'Title is missing<br>';
		if ($price == NULL)		$msg .= 'Price is missing<br>';
		
// Update Table
		$query = "Update specials SET 
				  title = '$title',
				  price = '$price'
				  WHERE event='$event'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) $msg = "Query Error [$query]: " . mysqli_error($mysqli); 
		else $msg = "$event Updated"; 
		}
	else {
		$query = "SELECT title, price FROM specials WHERE event='$event'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) $msg = "Query Error [$query]: " . mysqli_error($mysqli);
		else list($title, $price) = mysqli_fetch_row($result); 
		$msg = "Update $event and Press Submit"; 
		}

	
// Output Page 
	echo "<p>SPECIALS
		  <p><form action='$pgm2' method='post'>
		  <table rules='all' frame='border' cellpadding='5'>
		  <tr><td>Event</td><td><input type='text' name='event' value='$event' size='80' READONLY></td></tr>
		  <tr><td>Title</td><td><textarea name='title' rows='4' cols='80'>$title</textarea></td></tr>
		  <tr><td>Price</td><td><input type='text' name='price' value='$price' size='80'></td></tr>
		  </table>
		  <p><table><tr><td><input type='submit' name='submit' value='Submit'></td></tr></table>
		  </form>
		  <p><table><tr><td>Message: $msg</td></tr></table>
		  <p><a href='$pgm3'><button>Return to Specials</button></a><p>"; 
?>