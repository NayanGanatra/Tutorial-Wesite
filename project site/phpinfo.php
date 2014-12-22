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
               <li class="last"><a href="register.php" class="m5">Register</a></li>
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
            <h2>PHP</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
				<p> PHP is an opensource web developing language.<br>
				It is a free platform lanaguage which can work on any operating system platform.<br><br><br><br>
				
				To Start Learing PHP Click Following Links.<br><br>
				PHP Video Tutorial<br><br>
				<a href="http://www.youtube.com/watch?v=kY5P9sZqFas" target="_blank"><br><br>Tutorial 1 Beginners</a><br>
				In this tutorial we go over a short presentation on what PHP is, what is required to learn it and what we will be covering further down the line. This video will hopefully introduce you to the PHP scripting language and get you interested in learning more.<br><br>

				<a href="https://www.youtube.com/watch?v=ArsbbtkF0ps" target="_blank">Tutorial 2 Installing a XAMPP</a><br>
				In this short video, we will cover the part that most beginners struggle with and that is installing PHP on a server. You can use your own computer as a server by installing XAMPP and run .php files on your own computer. If you have a web hosting account then you do not need to follow this tutorial and you can simply use your web hosting to run your scripts instead.<br><br>


				<a href="https://www.youtube.com/watch?v=sfEH3ArZ1oM&list=PL21E20F9A122DC853&index=3" target="_blank">Tutorial 3 PHP LOOPING</a><br>
				Here I show you how to use the While, Do While and For Loop in PHP. Also cover additional ways you can pass form data to your PHP code. <br><br>
				<a href="https://www.youtube.com/watch?v=lbnTELHr_Zs&index=4&list=PL21E20F9A122DC853" target="_blank">Tutorial 4 PHP ARRAYS</a><br>
				Here I show you how to use arrays with PHP. Along the way I show you how to use a bunch of built in PHP array functions and the foreach loop.<br><br>
				<a href="https://www.youtube.com/watch?v=10YEVdLE3Do&list=PL21E20F9A122DC853&index=9" target="_blank">Tutorial 5 PHP STRINGS</a><br>
				Here I show you how to use many string manipulation methods in PHP. Also, I finish showing you how to use regular expressions. preg_match_all, preg_replace, substr, strpos, preg_split, strlen, strcmp, strip_tags and more.<br><br>

				<a href="https://www.youtube.com/watch?v=Ou1kHmODImw&index=10&list=PL21E20F9A122DC853" target="_blank">Tutorial 6 PHP & OOP</a><br>
				Here I cover Object Oriented PHP. I explain encapsulation, classes, objects, public, private, constructors, destructors, __set, __get and more. <br><br>
				<a href="https://www.youtube.com/watch?v=9ywkQ9aGhVo&list=PL21E20F9A122DC853&index=14" target="_blank">Tutorial 7 PHP with MYSQL</a><br>
				Here I go over the basics of using MySQL. Creating Tables, Data Types, Entering Information, Deleting Tables and Basic MySQL commands<br><br>
				<a href="https://www.youtube.com/watch?v=mSVOoSWEyfg&index=15&list=PL21E20F9A122DC853" target="_blank">Tutorial 8 PHP with MYSQL</a><br>
				Here I show you how to create Normalized Tables in MySQL. 
First Rule of Normalize Tables: Each column can only contain one value and you can't have repeating columns.
Second Rule of Normalized Tables: You can't have repeating values in a field
Third Rule of Normalized Tables: Eliminate any fields from a table if they don't directly relate to the primary key<br><br>

				<a href="https://www.youtube.com/watch?v=MLGMv0rw0QA&list=PL21E20F9A122DC853&index=17" target="_blank">Tutorial 9 PHP with MYSQL Commands</a><br>
				I show you many MySQL Statements including SELECT, WHERE, ORDER BY, BETWEEN, IN, LIKE, REGEXP and AS. I explain how to perform conditional searches and use Regular Expressions using SQL<br><br>
				<a href="https://www.youtube.com/watch?v=dfmIu4mGDuc&index=18&list=PL21E20F9A122DC853" target="_blank">Tutorial 10 PHP with MYSQL Commands</a><br>
				In this video tutorial I cover how to do numerous things with MySQL.<br><br>
				<a href="https://www.youtube.com/watch?v=ebGzNXwTINk&index=20&list=PL21E20F9A122DC853" target="_blank">Tutorial 11 PHP COOKIES & SESSIONS</a><br>
				Here I go over all of the basics on how to use cookies and sessions with PHP. I also cover the global server array $_SERVER.<br><br>
				
				<a href="https://www.youtube.com/watch?v=edzcdZBJtHY&index=21&list=PL21E20F9A122DC853" target="_blank">Tutorial 12 PHP SECURE LOGIN</a><br>
				I create an extremely secure PHP Login Script using Regular Expressions, CAPTCHA, Encryption, Multiple Random Tokens and Session Token Regeneration. <br><br>
				
				
				<a href="https://www.youtube.com/watch?v=67C0IZIPOl4&index=22&list=PL21E20F9A122DC853" target="_blank">Tutorial 13 PHP SECURE LOGIN</a><br>
				In this part of my PHP video tutorial, I'll walk you step-by-step through the process of:

Verifying your users identity from page to page
Dynamically updating links based on the login status of your user
Destroying Sessions and Cookies<br><br>
				
				<a href="https://www.youtube.com/watch?v=NVtU4JI5QQU&list=PL21E20F9A122DC853&index=23" target="_blank">Tutorial 14 Forget Password</a><br>
				I show you how to make a secure forgotten password script. Strip dangerous code with Regular Expressions : Stop brute force attacks with CAPTCHA : Create encrypted passwords

Code is Here: <br><br>
				
				
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
