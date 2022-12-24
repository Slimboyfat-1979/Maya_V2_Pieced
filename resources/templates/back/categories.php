<?php

if(isset($_GET['del'])) {
    $id = $_GET['del'];
    $query = query("DELETE FROM categories WHERE cat_id = {$id}");
    redirect('admin/index.php?categories');
}

?>


<div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header">Product Categories</h1>
            <div class="col-md-4">
                <form action="" method="post">
                    <?php add_category_in_admin(); ?>
                    <div class="form-group">
                        <label for="category-title">Title</label>
                        <input type="text" class="form-control" name="cat_title">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Add Category" name="submit">
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    get_categories_in_admin();
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
