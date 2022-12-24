<?php

if(isset($_GET['id'])) {
    $query = query("SELECT * FROM products WHERE product_id = ".escape_string($_GET['id']));
    confirm($query);
    while($row = mysqli_fetch_assoc($query)) {
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_price = $row['product_price'];
        $product_qty = $row['product_qty'];

        $product_short_description = $row['short_description'];
        $product_category_id = $row['product_category_id'];

        $product_image = $row['product_image'];
//        $product_img_temp = $_FILES['image']['tmp_name'];
    }
}
?>


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <h1 class="page-header">Edit Product</h1>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                    <?php update_product(); ?>
                    <div class="form-group">
                        <label for="product-title">Product Title </label>
                        <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>">
                    </div>

                    <div class="form-group">
                        <label for="product-title">Product Description</label>
                        <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
                    </div>

                    <div class="form-group row">

                        <div class="col-xs-3">
                            <label for="product-price">Product Price</label>
                            <input type="number" name="product_price" class="form-control" size="60" value="<?php echo $product_price; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product-title">Short Description</label>
                        <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"><?php echo $product_short_description; ?></textarea>
                    </div>

                </div><!--Main Content-->

                <!-- SIDEBAR-->
                <aside id="admin_sidebar" class="col-md-4">

                    <div class="form-group">
                        <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
                        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Publish">
                    </div>

                    <!-- Product Categories-->
                    <div class="form-group">
                        <label for="product-title">Product Category</label>
                        <select name="product_category" id="" class="form-control" name="product_category" value="<?php echo $product_category_id; ?>">
                            <?php
                            show_categories_add_products();
                            ?>
                        </select>
                    </div>

                    <!-- Product Brands-->
                    <div class="form-group">
                        <label for="product-title">Product Quantity</label>
                        <input type="number" class="form-control" name="product_qty" value="<?php echo $product_qty; ?>">
                    </div>

                    <!-- Product Image -->
                    <div class="form-group">
                        <label for="product-title">Product Image</label>
                        <input type="file" name="image"><br>
                        <img src="../../assets/images/products/<?php echo $product_image; ?>" alt="">
                    </div>

                </aside><!--SIDEBAR-->

            </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../../admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../admin/js/plugins/morris/raphael.min.js"></script>
    <script src="../../../admin/js/plugins/morris/morris.min.js"></script>
    <script src="../../../admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
