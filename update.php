<?php
    require_once('./scripts/connect.php');

    $user_id = $_GET['id'];

    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");

    $user = mysqli_fetch_assoc($user);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="content">
        <div class="table">
            <div class="form_wrapper">
                <form action="./scripts/update.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user_id ?>">
                    <label for="login">Login:</label>
                    <input type="text" name="login" value="<?= $user['login'] ?>">
                    <label for="password">Password:</label>
                    <input type="text" name="password" value="<?= $user['password'] ?>">
                    <button type="submit">Change user information</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>