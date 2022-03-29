<?php
session_start();

$con=mysqli_connect('localhost','root','','');

mysqli_select_db($con,'seminar_pzi');

$name=$_REQUEST["username"];
$password=$_REQUEST["password"];
$mail=$_REQUEST["mail"];
$ponovi=$_REQUEST["repeat"];
$telefon=$_REQUEST["telefon"];


$s="select * from register where username='$name' or mail='$mail' ";

$result=mysqli_query($con,$s);

$num=mysqli_fetch_array($result);

if($num >0 ){
    echo "<div>alert('Korisnicko ime ili mail vec postoji');</div>";
    header('location:registration.php');
}
else if(($ponovi != $password)){
    echo"Unesene lozinke nisu iste";
    header('location:registration.php');
}
else{
    $reg="insert into register(username,mail,telefon,password) values('$name','$mail','$telefon','$password')";
    mysqli_query($con,$reg);
    echo"Uspjesno";
    header('location:login.php');
}

?>