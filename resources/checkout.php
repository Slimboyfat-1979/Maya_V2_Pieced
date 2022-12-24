<?php
require_once('../resources/config.php');
require_once('../resources/functions.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/checkout.css">
    <title>Maya V3</title>
</head>
<body>
<section>
    <div id="hero">
        <?php include(TEMPLATE_BACK . DS . 'top_nav.php'); ?>
    </div>
</section>
<div id="next">
    <div class="container">
        <h1>Checkout</h1>
        <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
        <?php


        ?>
        <div class="row cart">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="business" value="sb-lhel121510281@business.example.com">
                <input type="hidden" name="currency_code" value="NZD">
                <input type="hidden" name="upload" value="1">
                <table class="table table-striped">
                    <thead>
                      <tr>
                       <th>Product</th>
                       <th>Price</th>
                       <th>Quantity</th>
                       <th>Sub-total</th>
                       <th>Add</th>
                       <th>Remove</th>
                       <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php cart(); ?>
                    </tbody>
                </table>

    <div class="col-xs-4 pull-right cart-totals">
        <h2>Cart Totals</h2>
            <table class="table table-bordered" cellspacing="0">
                <tr class="cart-subtotal">
                <th>Items:</th>
                <td><span class="amount"><?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?></span></td>
                </tr>
                <tr class="shipping">
                <th>Shipping and Handling</th>
                <td>Free Shipping</td>
                </tr>
                <tr class="order-total">
                <th>Order Total</th>
                <td><strong><span class="amount"><?php echo isset($_SESSION['item_total']) ? "\$". $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?></span></strong> </td>
                </tr>
                </tbody>
            </table>
        <?php echo show_paypal(); ?>
</div>
</form>
 </div><!--Main Content-->
           <hr>
    </div>
</div>
<?php include(TEMPLATE_FRONT . DS . 'footer_new.php'); ?>
    <script src="../admin/js/jquery.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>
</body>
</html>
