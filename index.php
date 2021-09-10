<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
        require_once './scripts/connect.php';
    ?>

    <div class="content">
        <div class="table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Login</th>
                    <th>Password</th>
                </tr>

                <?php
                    $users = mysqli_query($connect, "SELECT * FROM `users`");
                    $users = mysqli_fetch_all($users);
                    
                    foreach ($users as $user) {
                        ?>
                            <tr>
                                <td><?= $user[0] ?></td>
                                <td><?= $user[1] ?></td>
                                <td><?= $user[2] ?></td>
                                <td><a href="./update.php?id=<?= $user[0] ?>">Update user</a></td>
                                <td><a href="./scripts/delete.php?id=<?= $user[0] ?>">Delete user</a></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
            <div class="form_wrapper">
                <form action="./scripts/create.php" method="POST">
                    <label for="login">Login:</label>
                    <input type="text" name="login">
                    <label for="password">Password:</label>
                    <input type="text" name="password">
                    <button type="submit">Add user</button>
                </form>
            </div>
            
        </div>
    </div>

</body>
</html>