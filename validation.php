<?php
session_start();


$con=mysqli_connect('localhost','root','','');

mysqli_select_db($con,'seminar_pzi');

$name=$_REQUEST["ime"];
$password=$_REQUEST["lozinka"];


$s="select * from register where username='$name' and password='$password' ";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1 ){
    $_SESSION["ime"]=$name;
    header('location:converter.php');
}
else{
    echo"Pogrešno korisničko ime ili lozinka";
    header('location:login.php');
}


?>