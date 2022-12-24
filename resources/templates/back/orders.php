
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="col-md-12">
<div class="row">
<h1 class="page-header">All Orders</h1>
    <h3 class="bg-success" style="text-align: center;"></h3>
<!--    <h3 class="btn btn-danger text-center">--><?php //display_message(); ?><!--</h3>-->
</div>

<div class="row">
<table class="table table-hover">
    <thead>
      <tr>
           <th>ID</th>
           <th>Amount</th>
           <th>Photo</th>
           <th>Transaction</th>
           <th>Currency</th>
           <th>Status</th>
          <th>Delete?</th>
      </tr>
    </thead>
    <tbody>
       <?php display_orders(); ?>
    </tbody>
</table>
</div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php  include_once(TEMPLATE_BACK.DS.'footer.php'); ?>