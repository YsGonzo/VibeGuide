<?php
// variables.php - Common Website Variables
// Written by:  Charles Kaplan, December 2017

// Set Default PHP Options
	date_default_timezone_set('America/New_York');
	error_reporting(E_ALL); 
	
// Variables
	$p 					= 'home';													// Page to include for content
	$pgm				= 'website.php';											// Landing Page
	$width 				= '1280';													// Page width
	$pixdir 			= 'images';													// Image directory
	$domain				= 'carmines.com';											// Domain Name
	$sitename			= 'Carmine&#0039;s';										// Website Name	
	$webmaster 			= 'Charles Kaplan';											// Webmaster Name
	$email				= "webmaster@$domain";										// Webmaster Email
	$desc_short			= 'VibeGuide';						// Short Website Description
	$desc_long			= 'VibeGuide<br>
						   Find Somewhere To Vibe!<br>
						   Find fun new spots where you can meet people!';							// Long Website Description 
	$year				= date('Y');												// Current Year	
	$logo				= 'logo.png'; 

// MySQL Database
	$myserver			= 'localhost';
	$myuserid			= 'root';
	$mypassword			= NULL;
	$mydatabase			= 'bcs350';

// Navbar Variables
	$pages				= array('home'	=> 'home', 
								'page2' => 'Discover', 
								'page3'	=> 'Events/Venues',
								'page5' => 'Map',
								'logon'	=> 'logon');
	$restricted 		= array(NULL);
	$role_reqrd			= array(NULL);
	$role_name			= array(NULL);
	$nb_text_color		= '#9fadbd';
	$nb_text_color2		= 'yellow';
	$nav_style			= 'color:white;   
						   background-color:#2A2D45;     
						   font-size:100%; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;';

// Page Styles	
	$pg_color			= '#9fadbd';													// Default page text color
	$pg_bgcolor			= '#393D5F';												// Default page text background color
	$page_style			= "color:$pg_color;
						   background-color:$pg_bgcolor; 
						   font-size:125%; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;";

// Header
	$hdr_style			= "color:#9fadbd;   
						   background-color:#393D5F;    
						   font-size:300%; font-style:italic; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica;";
	$hdr_style2			= "color:yellow;  
						   background-color:#393D5F;    
						   font-size:100%; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica;";
	$hdr_style3			= "color:black;  
						   background-color:yellow;    
						   font-size:75%;  
						   font-weight:bold; 
						   font-family:Arial,Helvetica;";	

// Footer	
	$footer				= "&copy; $year - $desc_short";								// Footer Message	
	$ftr_color			= '#9fadbd';													// Footer Text Color
	$ftr_bgcolor		= '#393D5F';													// Footer Backbround Color
	$ftr_style			= "color:$ftr_color; 
						   background-color:$ftr_bgcolor; 
						   font-size:75%;  
						   font-weight:bold; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;";
?>					