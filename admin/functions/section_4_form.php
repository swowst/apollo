<?php


require_once "helper.php";
require_once '../../db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('../index.php');
    return;
}

if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) &&
    !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])
){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = $db->prepare('Insert into section_4_form (email, subject, message) values (?,?,?)');
    $query->execute([$email, $subject, $message]);
    redirect('../../index.php');

}



?>

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--    <h2 style="color: green">Melumatlar Qeyd Edildi</h2>-->
<!---->
<!--    <a href="../../index.php">Ana sehifeye qayidin</a>-->
<!--</body>-->
<!--</html>-->
