<?php
session_start();

mysql_connect ("localhost","CPV_DVFU","Ma5deERGduZWE5Jy");
mysql_select_db ("cpv_dvfu");
mysql_query("SET NAMES utf8");

$email= $_SESSION['email'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>