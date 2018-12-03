<?php
require('config.php');

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$sname=$_POST["sname"];
$gender=$_POST["gender"];
$id=$_POST["idno"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$country=$_POST["country"];
$country=$_POST["county"];
$constituency=$_POST["constituency"];
$ward=$_POST["ward"];
$pfname=$_POST["pfname"];
$paddress=$_POST["paddress"];
$ptelephone=$_POST["ptelephone"];
$pemail=$_POST["pemail"];
$campus=$_POST["campus"];
$course=$_POST["course"];
$session=$_POST["session"];
$hschool=$_POST["hschool"];
$yc=$_POST["yc"];
$schaddress=$_POST["schooladd"];
$grade=$_POST["grade"];
$sql1="INSERT INTO studetails(fname,lname,sname,gender,idno,telephone,email,dob) values('$fname','$lname','$sname','$gender','$id','$telephone','$email','$dob')";
$sql2="INSERT INTO home (idno,country,constituency,ward) values('$id','$country','$constituency','$ward')";
$sql3="INSERT INTO campus(idno,campus,corse,session) values('$id','$campus','$course','$session')";
$sql4="INSERT INTO parents(idno,pfname,paddress,ptelephone,pemail) values('$id','$pfname','$paddress','$ptelephone','$pemail')";
$sql5="INSERT INTO highschool(idno,hschool,yc,grade,schadd) values('$id','$hschool','$yc','$grade','$schaddress')";

mysqli_query($con,$sql1)or die("failed query1".mysqli_error($con));
mysqli_query($con,$sql2)or die("failed query2".mysqli_error($con));
mysqli_query($con,$sql3)or die("failed query3".mysqli_error($con));
mysqli_query($con,$sql4)or die("failed query4".mysqli_error($con));
mysqli_query($con,$sql5)or die("failed query5".mysqli_error($con));
echo "succefully submitted";
?>