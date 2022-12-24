<?php
if(isset($_GET['del'])) {
   $user_id = $_GET['del'];
   delete_user($user_id);
}

?>


<div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
                <p class="bg-success"></p>
                <a href="index.php?add_user" class="btn btn-primary">Add User</a>

                <div class="col-md-12">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        show_users_in_admin();
                        ?>
                        </tbody>
                    </table> <!--End of Table-->


                </div>











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
