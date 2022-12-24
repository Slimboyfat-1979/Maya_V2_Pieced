<?php require_once ('../resources/config.php'); ?>
<?php require_once ('../resources/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/item.css">
    <title>Maya V3</title>
</head>
<body>
<section>
    <div id="hero">
        <?php include (TEMPLATE_FRONT.DS.'top_nav.php'); ?>
    </div>
</section>


<section id="next">
    <?php
    $product_info = get_product_info($_GET['id']);
    ?>
    <div class="container">
        <!-- Side Navigation -->
        <div class="col-md-12">
            <!--Row For Image and Short Description-->
            <div class="row">
                <div class="col-md-7 img-center">
                    <img class="img-responsive" src="../assets/images/products/<?php echo $product_info['product_image']; ?>" alt="">
                </div>
                <div class="col-md-5">
                    <div class="thumbnail">
                        <div class="caption-full">
                            <h4><a href="#"><?php echo $product_info['product_title']; ?></a> </h4>
                            <hr>
                            <h4 class=""><?php echo $product_info['product_price']; ?></h4>
                            <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    4.0 stars
                                </p>
                            </div>
                            <p><?php echo $product_info['short_description']; ?></p>
                            <form action="">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="ADD TO CART">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--Row For Image and Short Description-->
            <hr>
            <!--Row for Tab Panel-->
            <div class="row">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <p></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="col-md-6">
                                <h3>2 Reviews From </h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">10 days ago</span>
                                        <p>This product was great in terms of quality. I would definitely buy another!</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">12 days ago</span>
                                        <p>I've alredy ordered another one!</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">15 days ago</span>
                                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Add A review</h3>

                                <form action="" class="form-inline">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="test" class="form-control">
                                    </div>

                                    <div>
                                        <h3>Your Rating</h3>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Row for Tab Panel-->
        </div>
    </div>
</section>
<!-- THERE IS AN ERROR HERE WITH THE HTML WITH THE FOOTER BUT AS IT STANDS THIS WORKS AND DISPLAYS CORRECTLY -->

<?php include(TEMPLATE_FRONT . DS . 'footer_new.php') ?>
</section>
<script src="../js/index.js"></script>
<script src="../js/bootstrap.js"></script>
<script>





</script>
</body>
</html>






