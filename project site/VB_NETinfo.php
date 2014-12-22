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
            <h2>VB.NET</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
					<p> Visual Basic .NET (VB.NET) is a multi-paradigm, high level programming language, implemented on the .NET Framework. Microsoft launched VB.NET in 2002 as the successor to its original Visual Basic language.Along with Visual C#, it is one of the two main languages targeting the .NET framework.<br><br><br><br>
				
				To Start Learing VB.NET Click Following Links.<br><br>
				VB.NET Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=hkcO_M9gcNw" target="_blank"><br><br>Tutorial 1 VB.NET Tutorial 1 - Downloading The Application</a><br>
				This video is about a concept of how to download this application.
				
				
<br><br>
				<a href="https://www.youtube.com/watch?v=-TSigZD4D2E" target="_blank">VB.NET Tutorial 2 - Hello World</a><br><br />
				This tutorial will help you create your first application in Visual Basic 2008. I apologize for the vague explanations and stuttering, I recorded this video after college and I'm not too alert at the moment. The concept isn't hard to grasp though so you should understand it.

				
				<br /><br />
<a href="https://www.youtube.com/watch?v=wWv7jOyuk3k" target="_blank"><br><br>Tutorial 3 variables</a><br>
				This tutorial will help you understand what a Variable is, how to create a variable and how they could be used. I have explained it in depth for the new programmers that have never used a variable before. Variables are one of the most important parts of programming that you will ever learn, so remember the syntax!
<br><br>				
			
			<a href="https://www.youtube.com/watch?v=0XlJkwaTsNs" target="_blank"><br><br>  Tutorial 4: if statements </a><br>
				This tutorial will help you understand what an If Statement is. If Statements will help your application decide what to do in a given situation. They are also a part of every programming language in existance.
<br><br>			
			
			
						
			<a href="https://www.youtube.com/watch?v=H76n-iuOFew" target="_blank"><br><br>  Tutorial 5: Form Properties</a><br>
				This isn't really a tutorial, this video just contains some tips on how to improve the appearence of your application in Visual Basic 2008.

<br><br>	
<a href="https://www.youtube.com/watch?v=7TYxBGO0PoE" target="_blank"><br><br>  Tutorial 6: Progress bar</a><br>
				This tutorial will teach you the easiest method of using a Progress Bar in your application for Visual Basic 2008. This is not the best way but as it is an early tutorial, it should help the beginners understand.

<br><br>	

<a href="https://www.youtube.com/watch?v=iEcCW1G3alE" target="_blank"><br><br>  Tutorial 7:  Radio Button and Check Box </a><br>
				This tutorial will teach you about using Radio Buttons and Check Boxes in Visual Basic 2008. It will teach you how to use both of the tools using If Statements and a Group Box. This is a really easy concept to grasp, but there are so many possibilities.


<br><br>	

<a href="https://www.youtube.com/watch?v=KayCEu-0szs" target="_blank"><br><br>  Tutorial 8:  Menu strip </a><br>
				This tutorial will introduce the Menu Strip in Visual Basic 2008. The Menu Strip is a feature you will see on every application today. It has a very professional look and will limit the buttons that you need on your application.

<br><br>	

<a href="https://www.youtube.com/watch?v=q2ANPn8ojWg" target="_blank"><br><br>  Tutorial 9:  Linking Forms </a><br>
				One of the most common questions I have been asked about Visual Basic .NET is how to link forms together. This tutorial will explain how you can easily link one form to another with the click of a button.


<br><br>	

<a href="https://www.youtube.com/watch?v=daPvk9_yfjE" target="_blank"><br><br>  Tutorial 10:  Log in form </a><br>
				This video tutorial will teach you how to create a simple log in form using Visual Basic 2008. The Log In Form is a combination of things that we have covered in previous tutorials. It also introduces a new part of the If Statements.


<br><br>	

<a href="https://www.youtube.com/watch?v=aM_5FWRk23c" target="_blank"><br><br>  Tutorial 11:  For Loop  </a><br>
				This video tutorial will teach you the first of the three loops, the For Loop. This loop is extremely useful in Visual Basic .NET programming and can be used to execute code as many times as you want it to.



<br><br>	

<a href="https://www.youtube.com/watch?v=Wu6BqwCj_-k" target="_blank"><br><br>  Tutorial 12:  Do while loop </a><br>
				The Do While feature in Visual Basic .NET Proggramming is a really useful way to execute code more than once. This tutorial will teach you how to create a Do While 'loop' and give an example.



<br><br>	
<a href="https://www.youtube.com/watch?v=jz1QHoRJHTI" target="_blank"><br><br>  Tutorial 13:  Functions </a><br>
				In this tutorial, we cover what a Function is, how to create one and how to call one. Using a Function is a way of storing code and then executing it with a few letters. Be sure to subscribe for the upcoming tutorial on ByVal and ByRef if you want to discover the full potential of Functions.



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
