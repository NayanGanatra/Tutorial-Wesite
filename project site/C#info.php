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
            <h2>C#</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
					<p> C# is a multi-paradigm programming language encompassing strong typing, imperative, declarative, functional, generic, object-oriented (class-based), and component-oriented programming disciplines. It was developed by Microsoft within its .NET initiative and later approved as a standard by Ecma (ECMA-334) and ISO (ISO/IEC 23270:2006). C# is one of the programming languages designed for the Common Language Infrastructure.<br><br><br><br>
				
				To Start Learing C# Click Following Links.<br><br>
				C# Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=pSiIHe2uZ2w" target="_blank"><br><br>Tutorial 1  How to program in C# - BASICS - Beginner Tutorial</a><br>
				This video is about an introduction part of Csharp.
<br><br>
				<a href="https://www.youtube.com/watch?v=QzDbwqhGnZA" target="_blank">Tutorial 2 Input and Output to Console</a><br><br />
				Searches related to C# Input and Output to Console
c# console application input output
c# console get input
				
				<br /><br />
<a href="https://www.youtube.com/watch?v=h6aXzd1nTXQ" target="_blank"><br><br>Tutorial 3  Pass by Reference , Output and params Parameter in Method</a><br>
Searches related to method output parameters and return in c#
c# method return 2 variables
c# - How to pass a single object[] to a params object[] 

				
			
			<a href="https://www.youtube.com/watch?v=h8nEHMj7Jlk" target="_blank"><br><br>  Tutorial 4: C# Methods </a><br>
				Searches related to introduction to method in c#
c# process tutorial
c# function definition
<br><br>			
			
			
						
			<a href="https://www.youtube.com/watch?v=YKwAHRjyfOc" target="_blank"><br><br>  Tutorial 5:Class Inheritance in C#</a><br>
				Searches related to c# inheritance
c# inheritance constructor
c# multiple inheritance

<br><br>

<a href="https://www.youtube.com/watch?v=CpSmzgxJv4w" target="_blank"><br><br>  Tutorial 6:Polymorphism in C#</a><br>
				Searches related to polymorphism C#
encapsulation c#
polymorphism c# definition

<br><br>

<a href="https://www.youtube.com/watch?v=Waq_xVXNJCQ" target="_blank"><br><br>  Tutorial 7:Constructors in C#</a><br>
				
         This video will show you how to use constructors in C#.
<br><br>

<a href="https://www.youtube.com/watch?v=9n36Yru7UpM" target="_blank"><br><br>  Tutorial 8:Do and Do While</a><br>
				
        It will give you information about Do and Do while loops.
<br><br>

<a href="https://www.youtube.com/watch?v=QX-x-48xP5U" target="_blank"><br><br>  Tutorial 8: If Statements</a><br>

		It will give you information about If statements.		
<br><br>

<a href="https://www.youtube.com/watch?v=p73iNenBT-E" target="_blank"><br><br>  Tutorial 9: C# Arrays</a><br>
Searches related to c# array
Single-Dimensional Array
c# array class

				
<br><br>

<a href="https://www.youtube.com/watch?v=t-6stsww2SM" target="_blank"><br><br>  Tutorial 9: C#  2D Arrays</a><br>
Using 2D arrays in C#

		This video is about how to use 2D arrays.		
<br><br>	

<a href="https://www.youtube.com/watch?v=D6d8CIVoYSI" target="_blank"><br><br>  Tutorial 9: Interfaces in c#</a><br>


		This video is about Interfaces in Csharp.		
<br><br>

<a href="https://www.youtube.com/watch?v=M8DZqt3tCr4" target="_blank"><br><br>  Tutorial 9: Structs in c#</a><br>

        This video will show you structure of C# in depth.
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
