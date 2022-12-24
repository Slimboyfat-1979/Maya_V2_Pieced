<?php
include_once ('../resources/config.php');
include_once ('../resources/functions.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/gallery.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <title>Document</title>
</head>
<body>
<section>
    <div id="hero">
        <?php include (TEMPLATE_FRONT.DS.'top_nav.php'); ?>
    </div>
</section>

<section id="photo-section">
    <div class="wrapper">
        <h1>Image Gallery</h1>
        <div class="img-container">

            <?php
            $directory = "../assets/images/gallery_pics/";
            $pic_array = array_filter(scandir($directory), function($item){
                global $directory;
                return !is_dir($directory.$item);
            });

            foreach ($pic_array as $p) {
                $full_path = $directory.$p;
                echo "<div class='image'><img src='{$full_path}' alt=''></div>";
            }

            ?>

        <!--<div class="image"><img src="../assets/images/image-01.jpg" alt=""></div>-->
<!--            <div class="image"><img src="../assets/images/image-02.jpg" alt=""></div>-->
<!--            <div class="image"><img src="../assets/images/image-03.jpg" alt=""></div>-->
<!--            <div class="image"><img src="../assets/images/image-01.jpg" alt=""></div>-->
<!--            <div class="image"><img src="../assets/images/image-02.jpg" alt=""></div>-->
<!--            <div class="image"><img src="../assets/images/image-03.jpg" alt=""></div>-->
        </div>
        <div class="popup-image">
            <span>&times;</span>
            <img src="../assets/images/image-01.jpg" alt="">
        </div>
    </div>
</section>


<section id="footer-relative">
    <?php include(TEMPLATE_FRONT.DS.'footer_new.php'); ?>
</section>


<script>
    document.querySelectorAll('.img-container img').forEach(image=>{
        image.onclick = () => {
            document.querySelector('.popup-image').style.display = 'block';
            document.querySelector('.popup-image img').src = image.getAttribute('src');
        }
    });

    document.querySelector('.popup-image span').onclick = () => {
        document.querySelector('.popup-image').style.display = 'none';
    }
</script>




<script src="../js/index.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>