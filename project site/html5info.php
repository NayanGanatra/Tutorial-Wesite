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
            <h2>HTML and CSS</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
				<p>HTML5 is a core technology markup language of the Internet used for structuring and presenting content for the World Wide Web. As of October 2014 this is the final and complete fifth revision of the HTML standard of the World Wide Web Consortium (W3C)<br><br><br><br>
				
				To Start Learing HTML and CSS Click Following Links.<br><br>
				HTML and CSS Video Tutorial<br><br>
				
				<a href=https://www.youtube.com/watch?v=BxUv_n3T7n0" target="_blank"><br><br>Tutorial 1 HTML and CSS Tutorial Create Your own Complete Website </a><br>
				This is only for begineers.
This is the video where you can see all about (full) HTML and CSS with in just 4 hour
<br><br>
				<a href="https://www.youtube.com/watch?v=mzlqjRYszoI&list=PLEAFE1C118B3ED6AE" target="_blank">Tutorial 2 HTML5 and CSS3 Beginner Tutorial 1 - Introduction, + downloading the software
</a><br>
In this video tutorial, I'm going to show you exactly how to create beautiful hand crafted fully responsive navigation menu simply using HTML5, CSS3 and Media Queries from scratch for your web projects. Please share if you like it and if it helped you at all. Thanks for watching.<BR><br>
                 <a href=<a href="https://www.youtube.com/watch?v=mzlqjRYszoI&list=PLEAFE1C118B3ED6AE" target="_blank">Tutorial 3 HTML5 and CSS3 Beginner Tutorial 3 - headers, paragraphs and line breaks
 
</a><br>
In this video I explain how to make paragraphs and headers in HTML as well as how to use a line break. 
<br><br>

<a href=<a href="https://www.youtube.com/watch?v=GuUF1ZHEj_o" target="_blank">Tutorial 4 division and span attributes
 
</a><br>
it will show div and span tags.
<br><br>
<a href=<a href="<a href=<a href="https://www.youtube.com/watch?v=eOG90Q8EfRo" target="_blank">Tutorial 5 division and span attributes for responsive page
 
</a><br>
it will show div and span tags for responsive pages.
<br><br>


<a href="https://www.youtube.com/watch?v=TmQm-p3wCSU" target="_blank">Tutorial 6 Cascading Drop-down Navigation Menu with CSS (Part 1)
 
</a><br>
Use CSS to convert a nested unordered list into a multi-level, drop-down, cascading navigation menu.

<br><br>
<a href="https://www.youtube.com/watch?v=T7ayE5AtRUA" target="_blank">Tutorial 7 Cascading Drop-down Navigation Menu with CSS (Part 2)
 
</a><br>
Use CSS to convert a nested unordered list into a multi-level, drop-down, cascading navigation menu.

<br><br>
<a href="https://www.youtube.com/watch?v=DDsaTQdF86M" target="_blank">Tutorial 8 CSS Drop-Down Navigation Menu
 
</a><br>
We create a drop down navigation menu using only HTML and CSS. No Javascript in this menu! 

<br><br>
<a href="https://www.youtube.com/watch?v=gbP8_saN1Mg" target="_blank">Tutorial 9 HTML / CSS3 Sliding Image Boxes
 
</a><br>
In this video we dive into some CSS3 and create an awesome looking sliding image box.

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
