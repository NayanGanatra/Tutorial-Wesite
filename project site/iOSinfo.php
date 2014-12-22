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
            <h2>iOS</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
				<p> iOS (previously iPhone OS) is a mobile operating system developed by Apple Inc. and distributed exclusively for Apple hardware. It is the operating system that powers many of the company's iDevices.The user interface of iOS is based on the concept of direct manipulation, using multi-touch gestures. Interface control elements consist of sliders, switches, and buttons. Interaction with the OS includes gestures such as swipe, tap, pinch, and reverse pinch, all of which have specific definitions within the context of the iOS operating system and its multi-touch interface. Internal accelerometers are used by some applications to respond to shaking the device (one common result is the undo command) or rotating it in three dimensions (one common result is switching from portrait to landscape mode).<br><br><br><br>
				
				To Start Learing iOS Click Following Links.<br><br>
				iOS Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=B3_8rAbxoiY&list=PL4E61E23CD4B49974&index=1" target="_blank"><br><br>Tutorial 1 Series Introduction </a><br>
				This tutorial is about an introduction to iOS.
<br><br>
				<a href="https://www.youtube.com/watch?v=A_6bDVxuZxk&list=PL4E61E23CD4B49974&index=2" target="_blank">Tutorial 2 Requirements Mac OS X Lion and XCode</a><br>
				This video is about the requirements Mac OS X Lion and XCode.<br><br>
				<a href="https://www.youtube.com/watch?v=O7_hNwHcGC8&list=PL4E61E23CD4B49974&index=3" target="_blank">Tutorial 3 Creating a new project, templates and details</a><br>
				This video is about creating a new project,templates and details.<br><br>
				<a href="https://www.youtube.com/watch?v=3LaaYbQjx8&list=PL4E61E23CD4B49974&index=4" target="_blank">Tutorial 4 Navigating Xcode and your first app</a><br>
				This video will show you a navigating Xcode and your first app(theme installation)<br><br>
				<a href="https://www.youtube.com/watch?v=Y09RvzZ1mY8&list=PL4E61E23CD4B49974&index=5" target="_blank">Tutorial 5 Model View Controller</a><br>
				This will show you MVC architecture.<br><br>
				<a href="https://www.youtube.com/watch?v=fxlzzq8OnEQ&list=PL4E61E23CD4B49974&index=6" target="_blank">Tutorial 6 Using Variables</a><br>
				This video will show you how to use variables.<br><br>
				<a href="https://www.youtube.com/watch?v=QUF4mtlcP6E&list=PL4E61E23CD4B49974&index=7" target="_blank">Tutorial 7 Your first major iOS App , Bank App intro </a><br>
				This tutorial is about your first major iOS app,Bank app introduction.
<br><br>
				<a href="https://www.youtube.com/watch?v=gHC8ebE4Lg&list=PL4E61E23CD4B49974&index=8" target="_blank">Tutorial 8 Using Storyboard to set up View Controllers </a><br>
				This will show you how to use storyboard to set up view controllers.<br><br>

				<a href="https://www.youtube.com/watch?v=VSFmnfuHuY&list=PL4E61E23CD4B49974&index=9" target="_blank">Tutorial 9 Designing and building interfaces in Storyboard  </a><br>
				In this tutorial you will learn how to design and build interfaces in storyboard.<br><br>
				
				<a href="https://www.youtube.com/watch?v=_AXAC0uyTpY&list=PL4E61E23CD4B49974&index=10" target="_blank">Tutorial 10 Properties, Outlets and other stuff   </a><br>
				In this tutorial you will learn properties,outlets and other stuffs.<br><br>
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
