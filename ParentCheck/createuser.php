<?php
$host="localhost"; // Host name
$username="Aspire"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="user"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// details sent from form
$inputFirstname=$_POST['inputFirstname']; 
$inputLastname=$_POST['inputLastname'];
$inputUsername=$_POST['inputUsername'];
$inputEmail=$_POST['inputEmail'];
$inputPassword=$_POST['inputPassword'];


// To protect MySQL injection (more detail about MySQL injection)
$inputFirstname = stripslashes($inputFirstname);
$inputLastname = stripslashes($inputLastname);
$inputUsername = stripslashes($inputUsername);
$inputEmail = stripslashes($inputEmail);
$inputPassword = stripslashes($inputPassword);


$inputFirstname = mysql_real_escape_string($inputFirstname);
$inputLastname = mysql_real_escape_string($inputLastname);
$inputUsername = mysql_real_escape_string($inputUsername);
$inputEmail = mysql_real_escape_string($inputEmail);
$inputPassword = mysql_real_escape_string($inputPassword);

$sql= "INSERT INTO `test`.`user` (`id`, `FirstName`, `LastName`,`username`,`Email`, `password`) VALUES (NULL, '$inputFirstname', '$inputLastname' , '$inputUsername', '$inputEmail' , '$inputPassword')";
$result=mysql_query($sql);
?>