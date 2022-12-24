<?php
include_once ('../resources/config.php');
include_once ('../resources/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8dabcbb496.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <title>Maya V3</title>
</head>
<body>
    <section>
        <div id="hero">
            <?php include (TEMPLATE_FRONT.DS.'top_nav.php'); ?>
        </div>    
    </section>


    <section id="next">
        <div class="img">
            <div class="overlay"></div>
            <div class="text-container">
                <h1>Services</h1>
                <h4>Random Text Here</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <h3>Sales</h3>
                    <p>
                        We have a large range of musical instruments, equipment and peripherals for all your musical needs.
                         Our friendly staff are there to help understand your requirements and help find the best solution to
                         your needs. Check out our products page for the latest gear in stock or pop in and say hello or contact us through
                         our contact page
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                    </div>
                    <h3>Hire</h3>
                    <p>
                        If you have a one off gig, or need some extra equipment for a show without wanting the expense of buying brand new, we have musical instruments and
                        equipment to fit your need. Come in and talk to us about your specific requirements to work something out.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-wrench"></i>
                    </div>
                    <h3>Repairs</h3>
                    <p>
                        We do all our repairs on site in our custom work area. We promise to handle your beloved instrument with care and repair in a diligent and
                        timely manner. We are also happy to do string replacements and setting up intonation on guitars and basses and will give you the best advice to
                        care for your instrument in the future.
                    </p>
                </div>
            </div>


<!--        <div class="video">-->
<!--            <video preload="auto" muted src="../assets/video/Walkthrough.mp4"></video>-->
<!--        </div>-->



            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-person-chalkboard"></i>
                    </div>
                    <h3>Lessons</h3>
                    <p>
                        Our lessons are for all ages and are custom designed for students at any level of their musical journey. We have experienced teachers who work-->
                        professionally within the music industry bringing with them a broad knowledge and skill set to pass on to our students. Our friendly tutors are here to help-->
                        you grow as a musician and bring your skills to the next level.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-microphone"></i>
                    </div>
                    <h3>Band Jams</h3>
                    <p>
                        Our famous band jams are the pinnacle of our learning. Popular amongst our younger learners. We want to showcase and bring confidence to our students with
                        our band jam nights to showcase the skills they have learned during the term.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-guitar"></i>
                    </div>
                    <h3>Rehearsal Space</h3>
                    <p>
                        If you are looking for a place to practice or just jam out with your band we can offer a space outside of business hours for you to use. We have equipment-->
                        set up so you can rock out as much as you please. Bring your own instruments or talk to us about using some of our own.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="footer-relative">
        <?php include(TEMPLATE_FRONT.DS.'footer_new.php') ?>
    </section>

  <script src="../js/index.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script>
  </script>
</body>
</html>