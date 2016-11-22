<?php
//echo THIS_PAGE;
//die;
//?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title><?=$title?></title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'/>  
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id="main">
	
	<div id="header">  
	  
	  <div id="menubar_container">
		
		<div id="menubar">
	    
		  <div id="welcome">
              <!--$banner references value established in config file-->
	        <h1><a href="#"><?=$banner?></a></h1>
	      </div><!--close welcome-->
		
          <div id="menu_items">
	        <ul id="menu">
                <?=makeLinks($nav1)?>
              <!--
            <li class="current"><a href="index.html">Home</a></li>
              <li><a href="ourwork.html">Our Work</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="projects.html">Projects</a></li>
              <li><a href="contact.html">Contact Us</a></li>
                -->
            </ul>
          </div><!--close menu-->
		
        </div><!--close menubar-->	
		
      </div><!--close menubar_container-->	
	
	</div><!--close header-->		
	
	<div id="site_content">	

      <div id="header_image"></div>	  	  
	 
	  <div id="content">
        <!--Header ends here-->