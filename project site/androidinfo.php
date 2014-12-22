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
            <h2>ANDROID</h2>
 
            <table width="90%" cellpadding="15"  cellspacing="15" border="20" bordercolor="#000000">
			<tr>
					<p> Android is a mobile operating system (OS) based on the Linux kernel and currently developed by Google. With a user interface based on direct manipulation, Android is designed primarily for touchscreen mobile devices such as smartphones and tablet computers, with specialized user interfaces for televisions (Android TV), cars (Android Auto), and wrist watches (Android Wear).<br><br>
				ANDROID Video Tutorial<br><br>
				<a href="https://www.youtube.com/watch?v=SUOWNXGRc6g&list=PL2F07DBCDCC01493A&index=1" target="_blank"><br><br> Tutorial 1  Download and Install the Java JDK</a><br>
				This video will show you how to download and insatall the java JDK.
				<br><br><br>
				<a href="https://www.youtube.com/watch?v=UTQMsRkyXiY" target="_blank">Tutorial 2 Installing Eclipse and Setting up the ADT</a><br>
				This video will show you how to Install eclipse and setting up the ADT.
				<br>
				<a href="https://www.youtube.com/watch?v=Da1jlmwuW_w&list=PL2F07DBCDCC01493A&index=3" target="_blank"><br><br>Tutorial 3  Installing                Android SDK and Set up Emulator</a><br>
                This video will show you how to Install android SDK and set up Emulator.
				<br>
				<a href="https://www.youtube.com/watch?v=MIKl8PX838E&list=PL2F07DBCDCC01493A&index=4" target="_blank"><br><br>  Tutorial 4  Setting up an Android Project </a><br>
			    This video will show you how to set up an android project.
				<br>			
		        <a href="https://www.youtube.com/watch?v=sPFUTJgvVpQ&list=PL2F07DBCDCC01493A&index=5" target="_blank"><br><br>  Tutorial 5  Overview of Project and Adding Folders</a><br>
			    This video will show you an overview of project and adding folders.
				<br>
			    <a href="https://www.youtube.com/watch?v=maYFI5O6P-8&list=PL2F07DBCDCC01493A&index=6" target="_blank"><br><br>  Tutorial 6  Introduction to Layouts in XML</a><br>
			    This video will show you an Introduction of layouts in XML. 
				<br>
			    <a href="https://www.youtube.com/watch?v=6moe-rLZKCk&list=PL2F07DBCDCC01493A&index=7" target="_blank"><br><br>  Tutorial 7  Creating A Button in XML and Adding an ID	</a><br>
			    This video will show you How to create a button in XML and adding an ID.
				<br>
				<a href="https://www.youtube.com/watch?v=eKXnQ83RU3I&list=PL2F07DBCDCC01493A&index=8" target="_blank"><br><br>  Tutorial 8  Setting up Variables and Referencing XML ids	</a><br>
			    This video will show you how to Set up variables and referencing XML ids.
				<br>
			    <a href="https://www.youtube.com/watch?v=WjE-pWYElsE&list=PL2F07DBCDCC01493A&index=9" target="_blank"><br><br>  Tutorial 9  Set up a Button with OnClickListener	</a><br>
			    This video will show you how to set up a button with OnClickListener.
				<br>
			    <a href="https://www.youtube.com/watch?v=hUA_isgpTHI&list=PL2F07DBCDCC01493A&index=10	" target="_blank"><br><br>  Tutorial 10  Using setText method for our button	</a><br>
			    This video will show you how to use setText method for our button.
				<br>
				<a href="https://www.youtube.com/watch?v=IHg_0HJ5iQo&list=PL2F07DBCDCC01493A&index=11	" target="_blank"><br><br>  Tutorial 11   Adding Resources and Setting Background		</a><br>
			    This video will show you how to add resources and setting background.
				<br>
				<a href="https://www.youtube.com/watch?v=H92G3CpSQf4&list=PL2F07DBCDCC01493A&index=12	" target="_blank"><br><br>  Tutorial 12  Setting up an Activity and Using SetContentView					</a><br>
			    This video will show you how to set up an activity and using SetContentview.
				<br>
		        <a href="https://www.youtube.com/watch?v=B5uJeno3xg8&list=PL2F07DBCDCC01493A&index=13" target="_blank"><br><br>   Tutorial 13  Introduction to the Android Manifest			</a><br>
			    This video will show you an introduction of the android manifest.
				<br>
				<a href="https://www.youtube.com/watch?v=hy0mRoT1ZlM&list=PL2F07DBCDCC01493A&index=14	" target="_blank"><br><br>   Tutorial 14  The Framework of a Thread		</a><br>
                This video will show about the framework of a thread.
				<br>
				<a href="https://www.youtube.com/watch?v=Xpkbu2GrJpE&list=PL2F07DBCDCC01493A&index=15	" target="_blank"><br><br>   Tutorial 15  How to Start a New Activity via Intent	</a><br>
                This video will show you how to atart a new activity via intent.
				<br>
				<a href="https://www.youtube.com/watch?v=-G91Hp3t6sg&list=PL2F07DBCDCC01493A&index=16		" target="_blank"><br><br>   Tutorial 16   Activity Life Cycle		</a><br>
                This video will show you about an activity life cycle.
				<br>
				<a href="https://www.youtube.com/watch?v=-zGS_zrL0rY&list=PL2F07DBCDCC01493A&index=17	" target="_blank"><br><br>   Tutorial 17  Adding Music with MediaPlayer	</a><br>
                This video will show you how to add music with mediaplayer.
				<br>
				<a href="https://www.youtube.com/watch?v=4LHIESO0NGk&list=PL2F07DBCDCC01493A&index=18	" target="_blank"><br><br>   Tutorial 18  Create a List Menu from the ListActivity class	</a><br>
                This video will show you how to create a list menu from the listactivity class.
				<br>
				<a href="https://www.youtube.com/watch?v=8kybpxIixRk&list=PL2F07DBCDCC01493A&index=19	" target="_blank"><br><br>   Tutorial 19   Setting up an ArrayAdapter</a><br>
                This video will show you how toset up an arrayadapter.
				<br>
				<a href="https://www.youtube.com/watch?v=eHh2Yib7u-A&list=PL2F07DBCDCC01493A&index=20	" target="_blank"><br><br>   Tutorial 20  Starting an Activity with a Class Object		</a><br>
                This video will show you how to start an activity with a class object.
				<br>
				<a href="https://www.youtube.com/watch?v=zjHYyAJQ7Vw&list=PL2F07DBCDCC01493A&index=21	" target="_blank"><br><br>   Tutorial 21  Finishing ListActivity	</a><br>
                This video will show you how to finish listactivity.
				<br>
												
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
