<!DOCTYPE html>
<html>
<head>
<title>Attendence system</title>
<link rel="stylesheet" href="style.css"/>
<style>
#about{
border:3px solid black;
border-radius:10px;
margin:10px;

text-align: left;
float:center;
font-size:20px;
padding-top:10px;
padding-bottom:50px; 
padding-right:150px;
 padding-left:150px;  
}
</style>
</head>
<body>


<div id="header">
<h1 >Attendance Management System</h1>

</div>

<div id="navbar">
<UL>
<LI><a href="admin.php">HOME</a></LI>
<LI><a HREF="aabout.php">ABOUT US</a></LI>
<LI><a href="acontact.php">CONTACT US</a></LI>
</UL>
</div>
 <button><a href = "logout.php"> log Out</a></button>
 <?php
 session_start(); 
  if($_SESSION['admin']==true)                                                                  // if you have logged in then only can print
 {
        echo  " WELCOME"." "."(Admin) "." ".$_SESSION['admin'];                                               //print session variable value
 }
 else
 {
	 header("location:index.html");
 }
 ?>

<div id="about">
<h3 align="center">About</h3>
<p>This is the web based project -attendance management system. By using this project we can take attendance on the web page from any computer.
 If student is present then we check on the present box of the option and if student is absent then we uncheck the box of the option. 
 In this way, working of web based attendance is quite good rather than register work. 
 We can get report of attendance immediately by viewing or printing the database.</p>
 <p>
 Students who are registered, can check their attendance details like current, total and percentage ateendance etc. If attendance of any student is short, he would be noticed.
 The main aim of the project is to reduce paper work, save time,
automatic calculation of attendance and cheatings of students during attendance.

</p>
</div>





<div id="footer">
&copy; 2018-<?php echo date("d.m.Y"); ?> copyright by UPENDRA KUMAR
<UL>
<LI><a href="index.html">Help</a></LI>
<LI><a HREF="index.html">Mail us</a></LI>
<LI><a href="index.html">Your ideas</a></LI>
</UL>
</div>

</body>
</html>