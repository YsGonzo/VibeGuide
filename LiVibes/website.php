<?php
// website.php - Website Landing Page
// Written by:  Charles Kaplan, December 2017

// Start Session, Set session variables
	include('session.php');				// Start Sessions

// Common Variables, Functions
	include('variables.php');			// Variable Declarations 
	include('functions.php');  			// Function Library
	include('mysqli_connect.php'); 		// Connect to Database
  
// Variables
	$online 	= TRUE;					// Set to FALSE to bring website down
	$landing 	= TRUE;					// Set variable for page authentication
  
// Get Input
	if (isset($_GET['p']))				$p = $_GET['p'];
	$page =  "$p.php";		
	if (!file_exists($page))			$page = 'home.php';  
	if (!$online)						$page = 'offline.php';  

// Output Page
	include('header.php');	 			// Page Header 
	include('navbar.php');				// Navigation Bar
	echo "<table class='content' align='center' width='$width' style='$page_style'><tr><td>\n";	
	include($page);						// Page Content
	echo "</td></tr></table>";
	include('footer.php');				// Page Footer
?>