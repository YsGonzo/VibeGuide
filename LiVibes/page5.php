<?php
// page5.php - Page 5
// Written by:  Programmer, Date	

// Verify that program was called from Landing Page
	require('landing.php');

// Variables
	$page5_width  = $width - 20;
	
// Output Page  
	echo "<table width='$page5_width' align='center' bgcolor='white' cellspacing='10' class='text'>

			<tr><td align='center'>
			<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24171.53381988261!2d-73.99782719075144!3d40.774302026793784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25854faa8d447%3A0x100a2b0d8c445c5f!2sCarmine&#39;s%20Italian%20Restaurant%20-%20Times%20Square!5e0!3m2!1sen!2sus!4v1669728782124!5m2!1sen!2sus'
						 width='1240' height='1000' frameborder='0' style='border:0' allowfullscreen>
			</iframe>
			</td></tr>
		</table>";
?>