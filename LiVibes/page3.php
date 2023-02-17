<?php
// page3.php - Page 3
// Written by:  Programmer, Date	

// Verify that program was called from Landing Page and LOGON
	require('landing.php');

// Input
	if (isset($_POST['special']))	$special = $_POST['special'];	else $special = NULL; 
	if ($special == 'Select')		$special = NULL; 

// Query Database
	$query = "SELECT event FROM specials ORDER BY event";
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Error [$query]: " . mysqli_error($mysqli); 
	
// Output Page  
// Dropdown
	echo "<center>
		  <p>SPECIALS
		  <p><form action='$pgm?p=page3' method='post'>
		  <select name='special' onchange='this.form.submit()'>
		  <option>Select</option>"; 
	while(list($event) = mysqli_fetch_row($result)) {
		if ($event == $special) $se = 'SELECTED'; else $se = NULL;
		echo "<option $se>$event</option>\n";
		}
	echo "</select></form><p>";
		
// Display Special
	if ($special != NULL) {
		$query = "SELECT title, price FROM specials WHERE event='$special'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) echo "Query Error [$query]: " . mysqli_error($mysqli);
		list($title, $price) = mysqli_fetch_row($result);
		$price2 = "$" . number_format($price, 2); 
		echo "<p>$title
			  <p>$price2<p>";
		}
		
// Link to Update Program
	if (($srole == 'Webmaster') AND ($special != NULL))
		echo "<a href='$pgm?p=special_update&e=$special'><button>UPDATE</button></a><p>"; 
?>