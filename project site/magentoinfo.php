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
            <h2>Magento</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
				<p> Magento is an open-source content management system for e-commerce web sites. The software was originally developed by Varien Inc., a US private company.<br><br><br><br>
				
				To Start Learing Magento Click Following Links.<br><br>
				Magento Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=nSxq-eJ0VvY" target="_blank"><br><br>Tutorial 1 How To Install Magento </a><br>
				The 1st tutorial for Magento Commerce Community Edition. This tutorial shows you how to install the Magento version 1.7.0.0
<br><br>
				<a href="https://www.youtube.com/watch?v=JvbxrcL5B6Q" target="_blank">Tutorial 2 Front-End Tour</a><br>
				The 2nd tutorial for Magento Commerce Community Edition. This tutorial gives you a tour of the frontend of Magento.<br><br>
				<a href="https://www.youtube.com/watch?v=2UELmunMeZo" target="_blank">Tutorial 3 Back-End Tour</a><br>
				The 3rd tutorial for Magento Commerce Community Edition. This tutorial gives you a tour of the backend of Magento.<br><br>
				<a href="https://www.youtube.com/watch?v=TwAEyFizyC4" target="_blank">Tutorial 4 Theme installation</a><br>
				magento tutorial part-4,(theme installation)<br><br>
				<a href="https://www.youtube.com/watch?v=ynnMBPgKv98" target="_blank">Tutorial 5 Extension installation</a><br>
				thnks for watching,this video about magento extension ,downlaod,installation and use,
how to install.<br><br>
				<a href="https://www.youtube.com/watch?v=cCAyLkgrvzw" target="_blank">Tutorial 6 Creating A attribute</a><br>
				his tutorial about magento atribute,
how to create a magento atribute,
how to create a magento atribute,
how to create a magent<br><br>
				<a href="https://www.youtube.com/watch?v=B628oCNqzwk" target="_blank">Tutorial 7 Create A category/for product</a><br>
				this tutorial about magento category,
how to create a magento category
<br><br>
				<a href="https://www.youtube.com/watch?v=14xgMZrqFqc" target="_blank">Tutorial 8 Create product and managing</a><br>
				this video tutorial about product'
how to create a product in magento-part-8<br><br>

				<a href="https://www.youtube.com/watch?v=Q66MvWDhRDM" target="_blank">Tutorial 9 Adding, Deleting and Managing Products </a><br>
				In this tutorial you will learn how to add, delete and manage products in Magento.<br><br>
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
