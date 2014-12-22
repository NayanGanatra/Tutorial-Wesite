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
            <h2>wordpress</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
					<p>WordPress is a free and open source blogging tool and a content management system (CMS) based on PHP and MySQL. Features include a plugin architecture and a template system. WordPress was used by more than 23.2% of the top 10 million websites as of August 2013. WordPress is the most popular blogging system in use on the Web<br><br><br><br>
				
				To Start Learing wordpress Click Following Links.<br><br>
				wordpress Video Tutorial<br><br>
				<a href="http://www.youtube.com/watch?v=9jcWjq6q4P8" target="_blank"><br><br>Tutorial 1 Introduction of wordpress-Editing home page</a><br>
				AIS Solutions Group presents the first in a series of tutorials designed to introduce beginners to the Wordpress content management system.
<br><br>
				<a href="http://www.youtube.com/watch?v=8355qaOKXC8" target="_blank">Tutorial 2 How to make webpage in wordpress</a><br><br />
				Learn how to use WordPress to design and control your own website. Save literally thousands of dollars in web design fees because this video shows you how easy WordPress is to operate. This video is for absolute BEGINNERS.<br /><br />
<a href="http://www.youtube.com/watch?v=9jcWjq6q4P8" target="_blank"><br><br>Tutorial 3 Make a website using wordpress step by step</a><br>
				It will show step by step making of a website using wordpress tutorials.
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
