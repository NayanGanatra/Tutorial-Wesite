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
            <h2>VISUAL BASIC</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
					<p> Visual Basic is a third-generation event-driven programming language and integrated development environment (IDE) from Microsoft for its COM programming model first released in 1991. Microsoft intended Visual Basic to be relatively easy to learn and use.Visual Basic was derived from BASIC and enables the rapid application development (RAD) of graphical user interface (GUI) applications, access to databases using Data Access Objects, Remote Data Objects, or ActiveX Data Objects, and creation of ActiveX controls and objects.<br><br><br><br>
				
				To Start Learing Visual Basic Click Following Links.<br><br>
				Visual Basic Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=mM3zB3QWuv8" target="_blank"><br><br>Tutorial 1 Introduction of Visual Basic</a><br>
				This video is about an basic introduction of Visual Basic.
				
<br><br>
				<a href="https://www.youtube.com/watch?v=UTQMsRkyXiY" target="_blank">Tutorial 2 Databases</a><br>
				This video is about databases in Visual Basic.
				
				<br /><br>
<a href="https://www.youtube.com/watch?v=XV2HFzbKOJI" target="_blank"><br><br>Tutorial 3 Visual Basic Game Programming Tutorial - Part 1 - Building a Game Loop and Frame Counter</a><br>
				In this Visual Basic 2010 game tutorial series, I'll be covering the basics of simple, 2D game design, from the ground up. I'll be focusing primarily on RPG style design; however, these techniques can be used with any 2D game.
<br><br>				
			
			<a href="https://www.youtube.com/watch?v=ww3nzKtuHqY" target="_blank"><br><br>  Tutorial 4: List Box </a><br>
				This tutorial will teach you the easiest method of using a List Box in your application for Visual Basic 2008. This is not the best way but as it is an early tutorial, it should help the beginners understand.
<br><br>			
			
			
						
			<a href="https://www.youtube.com/watch?v=xEC84g4rnTY" target="_blank"><br><br>  Tutorial 5: Math Functions</a><br>
				This tutorial will simply teach you how to perform simple Math Operations in Visual Basic 2008. It is proably the most boring part of the language, but once you have mastered the simple parts of the language you can move on to the more interesting and advanced ones.

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
