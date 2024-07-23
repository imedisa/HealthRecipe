<?php
session_start();
require("config.php");
$bmi = $_POST["user_weight"] / ($_POST["user_height"]*$_POST["user_height"])*1000;
$sql="insert INTO `user_records` (`user_id`, `user_weight`, `user_bmi`) VALUES ('".$_SESSION["user_id"]."', '".$_POST["user_weight"]."', '".$bmi."');";
mysqli_query($connect,$sql);
mysqli_close($connect);
$_SESSION["user_height"] = $_POST["user_height"];
echo $bmi;
// header("location:user_page.php");
?>