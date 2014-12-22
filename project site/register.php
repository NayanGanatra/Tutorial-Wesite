<font face="0Font"><?php
	include('connect.php');
	
	if(isset($_REQUEST['submit']))
	{
		$un = $_REQUEST['username'];
		$ge = $_REQUEST['gender'];
		$em = $_REQUEST['email'];
		$ps = $_REQUEST['password'];
		$ph = $_REQUEST['phone'];
		$co = $_REQUEST['company'];
		$de = $_REQUEST['designation'];
		$me = $_REQUEST['message'];
				
	   echo $ins = "insert into register (uname,ugender,uemail,upassword,uphone,ucompany,udesignation,umessage) values('$un','$ge','$em','$ps','$ph','$co','$de','$me')";
		$ex = mysql_query($ins);
//		header("location:login.php");		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us - Contact Us | Student's Site - Free Website Template from Templates.com</title>
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
<script type="text/javascript" language="javascript">



	function check_all()
	{
			var unm = document.frm.username;
			var gen = document.frm.gender;
			var eml = document.frm.email;
			var pas = document.frm.password;
			var pho = document.frm.phone;
			var des = document.frm.designation;
			var com = document.frm.company;
			var msg = document.frm.message;
			
			if(unm.value=="")
			{
				alert('Please Enter UserName');
				unm.focus();
				return false;
			}
			
			if(gen.value=="")
			{
				alert('Please Select Gender');
				gen.focus();
				return false;
			}
			
			if(eml.value=="")
			{
			   alert('Please Enter Email');
			   eml.focus();
			   return false;
			   
			}
			if(pas.value=="")
			{
			   alert('Please Enter Password');
			   pas.focus();
			   return false;
			   
			}
			
			if(pho.value=="")
			{
			   alert('Please Enter Phone');
			   pho.focus();
			   return false;
			   
			}
			
       }
	  
	   function check_username()
	   {
	             var unm=document.frm.username;
	             var limit=/^[a-z A-Z]+$/;
	   if(!unm.value.match(limit))
	   {
	        alert("name should be in alphabets only");
	        unm.focus();
	        return false;
	   }
	   }
	   
	   
	   
</script>
 
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
<body id="page5">
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
               <li class="current"><a href="contact-us.html" class="m4">Contact Us</a></li>
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
           <input name="email" type="email" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" value="Enter Your Email Here" >
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
     <div class="inside"> </div>
     <h2>Register <span>Form</span></h2>
     <form id="contacts-form" onSubmit="return check_all();" name="frm">  
	        <fieldset>
       
         <div class="field">
         <label> username:</label>
         <input name="username" type="text" value=""/>
       </div>
         <div class="field">
         <label> gender:</label>
		<input type="radio" name="gender" value="Male" style="width:5%;">Male
		<input type="radio" name="gender" value="Male" style="width:5%;">Female
		  </div>
         <div class="field">
         <label> email:</label>
         <input name="email" type="email" value=""/>
       </div>
         <div class="field">
         <label> password:</label>
         <input name="password" type="password" value=""/>
       </div>
         <div class="field">
         <label> phone:</label>
         <input name="phone" type="text" value=""/>
       </div>
          
		  
		  
		  <div class="field">
         <label> company:</label>
        <select name="company">
		
		 <option value="">select</option>
		 <?php
		 $scom="select *from company";
		 $excom=mysql_query($scom);
		 while($rcom=mysql_fetch_array($excom))
		 {
		 ?>
		 <option value="<?php echo $rcom['cid'];?>"><?php echo $rcom['cname'];?></option>
		 <?php
		 }
		 ?>
		 </select>
       </div>
		
		
	  <div class="field">
         <label> Designation:</label>
         <select name="designation">
	  
	  <option value="">select</option>
		 <?php
		 $sdes="select *from designation";
		 $exdes=mysql_query($sdes);
		 while($rdes=mysql_fetch_array($exdes))
		 {
		 ?>
		 <option value="<?php echo $rdes['did'];?>"><?php echo $rdes['dname'];?></option>
		 <?php
		 }
		 ?>
		 </select>
       </div>
	  
	  
	    <div class="field extra">
         <label>message:</label>
         <textarea name="message" cols="1" rows="1" required></textarea>
       </div>
         <div class="alignright"><input type="submit" size="30" name="submit" value="Submit"></div>
       </fieldset>
       
     </form>
   </div>
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
</font>