<?php
session_start();
require("config.php");
print_r($_POST);
// if($_POST["user_password"]!= $_POST["password_check"]){

// }
$sql="insert into user ( `user_name`, `user_password`, `user_height`, `user_phone`, `user_gender`, `user_lastname`) 
VALUES ('".$_POST["user_name"]."', '".$_POST["user_password"]."', '".$_POST["user_height"]."', '".$_POST["user_phone"]."', '".$_POST["user_gender"]."', '".$_POST["user_lastname"]."');";
$sql2="select * FROM user ORDER BY user_id DESC LIMIT 1;";
$result2=mysqli_query($connect,$sql2);

while($row=mysqli_fetch_array($result2)){
    $user_id=$row['user_id']; 
}
mysqli_query($connect,$sql);
mysqli_close($connect);
$_SESSION["user_height"] = $_POST["user_height"];
$_SESSION["user_id"] = $user_id;
$_SESSION['user_name'] = $_POST["user_name"];
header("location:user_page.php");
?>