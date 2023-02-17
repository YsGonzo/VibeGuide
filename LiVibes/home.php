<?php
// home.php - Home Page
// Written by:  Charles Kaplan, December 2017	

// Verify that program was called from xx.php
	require('landing.php');

// Output Page  
	echo "<center>
		  <p><img src='$pixdir/carmines.jpg'>
		  <p>Welcome $sname!</b>
		  <br><br>
		  <i>$desc_long</i>
		  </center>";
?>