<?php
// page2.php - Page 2
// Written by:  Programmer, Date	

// Verify that program was called from Landing Page and LOGON
	require('landing.php');

// Variables
	$page2_width = $width - 20;
	
// Body
	echo "<table width='$page2_width' align='center' bgcolor='white' class='text'>
		  <tr><td align='center'>
		  <p><embed src='$pixdir/menu.pdf' width='900' height='700'>
		  </td></tr></table>";
?>