<?php include ('../resources/config.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/products.css">
    <style>
        .carousel-item img {
            width: 100vw;
            height: 30vh;
            object-fit: cover;
        }
    </style>
</head>
<body>

<section>
    <div id="hero">
        <?php include_once (TEMPLATE_FRONT.DS."top_nav.php"); ?>
    </div>
</section>



<section id="next">
    <h1>Featured Products</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/image-01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/image-02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/image-03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad atque,
        blanditiis corporis cum deleniti dolore dolorem, doloremque doloribus dolorum eaque eveniet excepturi facere
        id illo itaque labore maiores molestiae mollitia natus nesciunt nulla odio optio perspiciatis quaerat quas
        quibusdam repudiandae sit suscipit tempore veritatis, voluptas voluptatem voluptates. Quisquam, reiciendis!</p>
    <nav class="product_menu">
<!--        <ul>-->
<!--            --><?php
            get_categories();
//            ?>
<!--        </ul>-->
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
<script src="../js/index.js"></script>
<script src="../js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>