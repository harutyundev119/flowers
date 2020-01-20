<?php

$connect = mysqli_connect("localhost", "root", "", "1880bar");

$id = $_GET['id'];
echo $id;
$query = "DELETE FROM `1880bar` WHERE `1880bar`.`ID` = $id";
echo $query;

if (mysqli_query($connect, $query)) {
    echo '<script>alert("Praduct deleted")</script>';
    header('Location: menuback.php');
}

