<?php
include_once 'lovemeback2.php';

$name=$_POST['name'];
$class=$_POST['class'];
$age=$_POST['age'];
$schoolname=$_POST['schoolname'];



$sql="INSERT INTO class(name,class,age,schoolname) VALUES ('$name','$class','$age','$schoolname');";

mysqli_query($conn,$sql);
header("Location:..../fuckingshit?successfull")