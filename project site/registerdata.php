<?php
mysql_connect("localhost","root","");
mysql_select_db("register");


if(isset($_REQUEST['submit']))
{
$id=$_REQUEST['uid'];
$nm=$_REQUEST['Name'];
$ge=$_REQUEST['Gender'];
$em=$_REQUEST['Email'];
$ps=$_REQUEST['Password'];
$ph=$_REQUEST['Phone'];
$co=$_REQUEST['Company'];
$de=$_REQUEST['Designation'];
$st=$_REQUEST['Status'];
$ms=$_REQUEST['Message'];


$ins= insert into register('uid','Name','Gender','Email','Password','Phone','Company','Designation','Status','Message') values('$id','$nm','$ge','$em','$ps','$ph','$co','$de','$st','$ms');
$ex=mysql_query($ins);
if($ex)
{
header("location:show.php");
}
}



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form method="post">
<table align="center" cell spacing="20" cell padding="20">

<tr>
<td>id</td>
<td><input type="text" name="id" size="30">
</td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" name="Name" size="30">
</td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male" checked="checked">male
<td><input type="radio" name="gender" value="female" >female
</td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="Email" size="30">
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="Password" name="Password" size="30">
</td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="Phone" size="30">
</td>
</tr>
<tr>
<td>Company</td>
<td><input type="text" name="Company" size="30">
</td>
</tr>
<tr>
<td>Designation</td>
<td><input type="text" name="Designation" size="30">
</td>
</tr>
<tr>
<td>Status</td>
<td><input type="text" name="Status" size="30">
</td>
</tr>

<td>Message</td>
<td><Textarea rows="3" cols="30"  name="Message"></textarea>
</td>
</tr>

</body>
</html>
