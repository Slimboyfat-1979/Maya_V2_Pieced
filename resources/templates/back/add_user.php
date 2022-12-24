<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .child {
            width: 200px;
            height: auto;
        }

        .parent {
            display: flex;
            justify-content: space-between;
            margin: 0 auto;
            padding-bottom: 100px;
        }
        .one {
            flex-grow: 3;
        }

        .three {
            flex-grow: 2;
        }

        .three .form-group label {
            display: block;
        }

        .three .form-group input {
            width: 90%;
            height: 35px;
            outline: none;

        }

        .buttons {
            width: 90%;
            display: flex;
            justify-content: space-between;
        }

    </style>
</head>
<body>
<h1>Add User</h1>
    <div class="parent">
        <div class="child one">

        </div>
        <div class="child three">
            <form action="" method="post" enctype="multipart/form-data">
                <?php add_user_admin(); ?>
                <div class="form-group">
                    <input type="file" name="user_photo">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="buttons">
                    <input type="submit" class="btn btn-primary" name="add_user" value="add user">
                    <input type="submit" class="btn btn-danger" name="edit_user" value="edit user">
                </div>
            </form>
        </div>
    </div>
</body>
</html>