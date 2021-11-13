<?php

$img = $_POST['image'];
$b_name = $_POST['b_name'];
$a_name = $_POST['a_name'];
$description = $_POST['description'];
$year = $_POST['year'];

if (!$img || !$b_name || !$a_name || !$description || !$year)
//        $message = "Введите все данные";
//        require "message.php";
    header('Location: message.php');
    exit();
?>