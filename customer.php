<?php
  echo "hello";

$servername = "localhost";
$username = "root";
//$password = "";

$conn=mysqli_connect($servername,$username/*$password*/);

echo "\nConnection was successful";

$pid=$_POST['pid'];
$name=$_POST['name'];
$mail =$_POST['mail'];
$adress=$_POST['adress'];
$mobile=$_POST['mobile'];
echo " $pid  $name   $adress ";
mysqli_select_db($conn,'anshu');
$q="insert into customers(name,mail,mobile,adress,pid)Values('$name','$mail','$mobile','$adress','$pid')";
$i=mysqli_query($conn,$q);
echo $i;

?>