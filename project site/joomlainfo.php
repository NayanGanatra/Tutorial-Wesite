<?php
	
	if(!isset($_SESSION['id']))
	{
		header("location:login.php");
	}
	if($_SESSION['id']=="" || $_SESSION['id']==NULL)
	{
		header("location:login.php");
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Web Technology | Student's Site - Free Website Template from Templates.com</title>
<meta charset="utf-8">
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img, .articles li img');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page3">
<div class="wrap">
   <!-- header -->
   <header>
      
      <div class="container">
         <h1><a href="index.html">Student's site</a></h1>
         <nav>
	    	<ul>
               <li><a href="index.html" class="m1">Home Page</a></li>
               <li><a href="about-us.html" class="m2">About Us</a></li>
                <li><a href="courses.php" class="m3">Courses</a></li>
               <li><a href="contact-us.html" class="m4">Contact Us</a></li>
               <li class="last"><a href="sitemap.html" class="m5">Register</a></li>
            </ul>
         </nav>
         <form action="" id="search-form">
            <fieldset>
            <div class="rowElem">
               <input type="text">
               <a href="#" onClick="document.getElementById('search-form').submit()">Search</a></div>
            </fieldset>
         </form>
      </div>
   </header>
   <div class="container">
      <!-- aside -->
      <aside>
         <h3>Categories</h3>
         <ul class="categories">
            <li><span><a href="#">Programs</a></span></li>
            <li><span><a href="#">Student Info</a></span></li>
            <li><span><a href="#">Teachers</a></span></li>
            <li><span><a href="#">Descriptions</a></span></li>
            <li><span><a href="#">Administrators</a></span></li>
            <li><span><a href="#">Basic Information</a></span></li>
            <li><span><a href="#">Vacancies</a></span></li>
            <li class="last"><span><a href="#">Calendar</a></span></li>
         </ul>
         <form action="" id="newsletter-form">
            <fieldset>
            <div class="rowElem">
               <h2>Newsletter</h2>
               <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
               <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright" onClick="document.getElementById('newsletter-form').submit()">Submit</a></div>
            </div>
            </fieldset>
         </form>
         
      </aside>
      <!-- content -->
      <section id="content">
         <div id="banner">
            <h2>Professional <span>Online Education </span></h2>
         </div>
         <div class="inside">
            <h2>joomla</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
					<p>Joomla is a free and open-source content management system (CMS) for publishing web content. It is built on a model–view–controller web application framework that can be used independently of the CMS.

Joomla is written in PHP, uses object-oriented programming (OOP) techniques <br><br><br><br>
				
				To Start Learing joomla Click Following Links.<br><br>
				joomla Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=9mFxWmJHXLU" target="_blank"><br><br>Tutorial 1 Introduction of joomla</a><br>
				This video will give you an introduction of joomla.
				
<br><br>
				<a href="https://www.youtube.com/watch?v=P8LRRuYwQ9k" target="_blank">Tutorial 2 overview of joomla</a><br>
	
	This video will give you an overview of joomla.			
				<br /><br />
<a href="https://www.youtube.com/watch?v=D6b1JDZDCQw" target="_blank"><br><br>Tutorial 3 T3 Framework Video Tutorials - Layout Customization</a><br>
				This video tutorial is about T3 Framework layout customization. Also in this video, we will show you how to create and customize a layout and how to customize blocks in a layout for your Joomla 2.5 and Joomla 3 templates.
<br><br>				
			<a href="https://www.youtube.com/watch?v=TEXJsT1w1yc" target="_blank"><br><br>  Tutorial #4: Using Templates</a><br>
				This is the 3rd video in a 16 part series helping you to launch and develop a free Joomla site on the CloudAccess.net platform. This tutorial explains the use of Joomla templates and also demonstrates how to change default templates and use the core Joomla Protostar Template.
<br><br>			
			
			
						
			<a href="https://www.youtube.com/watch?v=zpjSTzG7Dng" target="_blank"><br><br>  Tutorial #5: Installing Extension</a><br>
				This is the 4th video in a 16 part series helping you to launch and develop a free Joomla site on the CloudAccess.net platform. This video demonstrates how to install extensions in Joomla using the Joomla Extensions Directory and by using the Joomla Extension Finder, or "Install from Web" tab in the back end of the Joomla.
<br><br>	

<a href="https://www.youtube.com/watch?v=6xQ6Sp9U-gE" target="_blank"><br><br>  Tutorial #6: How to Make a Website with Joomla 3 | Joomla 3.0 Tutorial</a><br>
				In presented video we show how to build a website with Joomla 3, step-by-step, no steps skipped.
Learn how to create a website with Joomla 3
How to create your own website with joomla
<br><br>							
				</tr>
				</table>         </div>
      </section>
   </div>
</div>
<!-- footer -->
<footer>
   <div class="container">
      <div class="inside">
         <div class="wrapper">
            <div class="fleft">24/7 Online Courses</div>
            <div class="aligncenter"><a rel="nofollow" href="http://www.templatemonster.com" class="new_window">Website </a> designed by KEVAL DESAI<br>
              
         </div>
      </div>
   </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
>
