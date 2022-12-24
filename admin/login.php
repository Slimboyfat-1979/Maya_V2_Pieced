<?php require_once('../resources/config.php'); ?>
<?php require_once('../resources/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
        <link rel="stylesheet" href="../css/login.css">
    <title>Maya V3</title>
</head>
<body>
<section>
    <div id="hero">
       <?php include(TEMPLATE_BACK. DS . 'top_nav.php'); ?>
    </div>
</section>


<section id="next">
    <div class="wrapper">
        <h1>Login</h1>
        <h2 class="text-center bg-warning"><?php display_message(); ?></h2>
        <div class="login-container">
            <form action="" method="post">
                <?php login_user();  ?>
                <div class="input">
                    <label for="">Username</label>
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="password">
                </div>
                <input type="submit" name="submit">
            </form>
        </div>
    </div>
</section>




<!-- THERE IS AN ERROR HERE WITH THE HTML WITH THE FOOTER BUT AS IT STANDS THIS WORKS AND DISPLAYS CORRECTLY -->

<?php include(TEMPLATE_FRONT . DS . 'footer_new.php') ?>
</section>
<script src="../js/index.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>