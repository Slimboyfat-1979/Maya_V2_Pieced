<?php require_once ('../resources/config.php'); ?>
<?php require_once ('../resources/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/lessons.css">
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
            <h1>Music Lessons</h1>
            <h4>For all ages and abilities</h4>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mt-5">
            <h1>Music Lessons for all ages</h1>
            <p>
                All our lessons are customized for our students. We discuss with you your individual needs, and determine your skill level and guide you
                through a series of lessons to increase your knowledge and ability.
                Lessons are run during a school term. Our teachers are all industry experienced, patient and friendly.
                <a href="team_old.php"> <br>Click here for our teacher profiles.</a>
            </p>
            <div class="col text-center">
<!--                <div class="card">-->
<!--                    <div class="card-body">-->
<!--                        <h2 class="card-title">$30 <small class="text-muted fw-light">Half Hour</small></h2>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="col text-center">
<!--                <div class="card">-->
<!--                    <div class="card-body">-->
<!--                        <h2 class="card-title">$45 <small class="text-muted fw-light">Full Hour</small></h2>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

        <div class="row mt-5">
            <h2>Lesson Prices</h2>
            <p>Individual half hour lesson <span>$45.00 incl gst</span></p>
            <p>Individual one hour lesson <span>$64.00 incl gst</span></p>
            <p>Online lessons <a href="contact.php">Contact us for more information</a></p>
        </div>
        <div class="row mt-5">
            <h2>Group Lessons Available</h2>
            <p><a href="">Band Jam</a></p>
            <p><a href="">Uke & Sip</a></p>
            <p><a href="">Corporate Events</a></p>
        </div>


        <div class="row mt-5">
            <h2>Frequently Asked Questions</h2>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                          When can I start individual lessons?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            Individual lessons coincide with the school term, however you can start anytime during the term. Because our lessons are very popular it is recommended you contact us as soon as possible to secure a day and time,
                            if nothing is currently available we can pop you on our wait list and contact you as soon as a space opens.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                           How and when do I pay?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            Our preferred option is to invoice you for the term, payment is due by the 20th of the month following date of invoice, you can either pay online or in store. If you are unsure, there is an option to have a trial lesson
                            priced at $45 for a half hour or $64 for a full hour.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            What days and times are available?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            Generally, individual lessons are held Monday - Friday from 2pm until 8pm, some teachers are available on Saturday.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            How many lessons should I have per week?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            It is recommended you have one lesson per week, so you have time to practice what you have been taught.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include (TEMPLATE_FRONT.DS.'footer_new.php') ?>

</section>




<!-- THERE IS AN ERROR HERE WITH THE HTML WITH THE FOOTER BUT AS IT STANDS THIS WORKS AND DISPLAYS CORRECTLY -->

</section>
<script src="../js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script>





</script>
</body>
</html>