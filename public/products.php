<?php require ('../resources/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/products.css">
    <title>Maya V3</title>
</head>

<body>
<section>
    <div id="hero">
        <?php include_once (TEMPLATE_FRONT.DS."top_nav.php"); ?>
    </div>
</section>

<section id="carousel">

</section>


<section id="next">
    <h1>Featured Products</h1>
<!--    <h1>--><?php //echo $_SESSION['product_27']; ?><!--</h1>-->
<!--            --><?php //session_destroy(); ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad atque,
        blanditiis corporis cum deleniti dolore dolorem, doloremque doloribus dolorum eaque eveniet excepturi facere
        id illo itaque labore maiores molestiae mollitia natus nesciunt nulla odio optio perspiciatis quaerat quas
        quibusdam repudiandae sit suscipit tempore veritatis, voluptas voluptatem voluptates. Quisquam, reiciendis!</p>
    <nav class="product_menu">
        <ul>
        <?php
        get_categories();
        ?>
        </ul>
    </nav>
    <hr>
    <div class="container-fluid">
        <div class="row product-contain">
            <?php get_products(); ?>
        </div>
    </div>
    </div>
</section>



<section id="marquee">
<div class="marquee">
    <ul class="marquee-content">
        <li><img style="width: 125px; height: 125px; object-fit: contain;" src="../assets/images/Cort-logo-white.png" alt=""></li>
        <li><img src="../assets/images/ernie_bg.png" alt=""></li>
        <li><img src="../assets/images/fender_bg.png" alt=""></li>
        <li><img src="../assets/images/fishman_bg.png" alt=""></li>
        <li><img src="../assets/images/Ibanez_bg.png" alt=""></li>
        <li><img src="../assets/images/martin-bg.png" alt=""></li>
        <li><img src="../assets/images/kala_bg.png" alt=""></li>
        <li><img src="../assets/images/shure-bg.png" alt=""></li>
        <li><img src="../assets/images/strymon_bg.png" alt=""></li>

        <li><img style="width: 125px; height: 125px; object-fit: contain;" src="../assets/images/Cort-logo-white.png" alt=""></li>
        <li><img src="../assets/images/ernie_bg.png" alt=""></li>
        <li><img src="../assets/images/fender_bg.png" alt=""></li>
        <li><img src="../assets/images/fishman_bg.png" alt=""></li>
        <li><img src="../assets/images/Ibanez_bg.png" alt=""></li>

    </ul>
</div>
</section>


<?php include_once(TEMPLATE_FRONT . DS . 'footer_new.php'); ?>


<script src="others.js"></script>
<script src="index.php"></script>
<script src="js/bootstrap.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

</script>


</body>
</html>