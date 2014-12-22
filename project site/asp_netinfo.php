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
            <h2>asp.net</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
					<p> ASP.NET is an open source server-side Web application framework designed for Web development to produce dynamic Web pages. It was developed by Microsoft to allow programmers to build dynamic web sites, web applications and web services.<br><br><br><br>
				
				To Start Learing asp.net Click Following Links.<br><br>
				asp.net Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=KVlXccl-XBA" target="_blank"><br><br>Tutorial 1- Introduction of ASP.NET</a><br>
				Good tutorials for beginners using ASP.NET/C#
A Beginner's Tutorial for Understanding and Implementing ASP.NET
<br><br>
				
				<a href="https://www.youtube.com/watch?v=20In2FA59A8" target="_blank">Tutorial 2 - How to Create a Login website - Validation Controls ( Registration Page )</a><br><br />
				ASP.NET Validation Control for User Registration
Custom Email Validation on ASP.NET C#
Password Policy/Strength ASP .NET Validator
<br /><br />
<a href="https://www.youtube.com/watch?v=Tyr1YXpNOrk" target="_blank"><br><br>Tutorial 3  - How to Create a Login website - Creating Database For website</a><br>
<br>
				Setting up the Database ASP.NET Site
Building ASP.NET Web Applications with
ASP.NET Web Pages Databases
ASP.NET Web For
<br><br>

				
<a href="https://www.youtube.com/watch?v=RCnRmoa8r0A" target="_blank"><br><br>Tutorial 4- How to Create a Login website - Connecting Database to Registration Page</a><br>
				ASP.NET Database Connection
ASP.NET Web Forms Database
How to connect asp.net to a database.


<a href="https://www.youtube.com/watch?v=VAtVv1Q7ufM" target="_blank"><br><br>Tutorial 5- MVC Tutorial - Step by Step Page</a><br>
				Easy to follow ASP.NET MVC and Entity Framework tutorial.
<br><br>	

<a href="https://www.youtube.com/watch?v=QBNmzSr4sYA" target="_blank"><br><br>Tutorial 6- How to create a User Registration page using asp.net mvc 4</a><br>

This video is about the registration page using mvc4.
<br><br>

<a href="https://www.youtube.com/watch?v=LdBW3RKaeqc" target="_blank"><br><br>Tutorial 7-How to insert multiple row to database using asp.net MVC4</a><br>

This video is about to insert row to database using mvc4.
				<br><br>				
<a href="https://www.youtube.com/watch?v=cXScdIowLoU" target="_blank"><br><br>Tutorial 8-Creating ASP.Net MVC Application With Database on backend.</a><br>
Creating ASP.Net MVC Application With Database on backend				
<br><br>	
<a href="https://www.youtube.com/watch?v=w3oT9VcXSnw" target="_blank"><br><br>Tutorial 9-MVC 4: C# Reading Data from Database</a><br>
Read, Write, Delete. Basic Templates how to CRUD to the database. Quickly create necessary functions you may need.				
<br><br>							

<a href="https://www.youtube.com/watch?v=h6rDbKXb20k" target="_blank"><br><br>Tutorial 10-How to retrieve database data & show in a view using jquery in an ASP.Net MVC.</a><br>
This video is about to retrive database data.			
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
