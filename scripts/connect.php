<?php
        $connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'users');

        if(!$connect) {
            die('Error connect to database!');
        }
    ?>