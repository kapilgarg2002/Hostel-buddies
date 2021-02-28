<?php 

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userreg');

$name = $_POST['number'];
$pass = $_POST['password'];
$s = "select * from reg where name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    echo "wrong roll no."
}else{
    $reg = "insert into usertable(number, password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "registeration successful";
}



?>