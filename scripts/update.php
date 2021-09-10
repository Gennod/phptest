<?php
    require_once('./connect.php');

    $login = $_POST['login'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `password` = '$password' WHERE `users`.`ID` = $id;");

    header('location: /');
?> 