<?php
include_once ('config.php');

function set_message($msg) {
    if(!empty($msg)) {
        $_SESSION['message'] = $msg;
    }else{
        $msg = "";
    }
}

function display_message() {
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function login_user() {
    if(isset($_POST['submit'])) {
       $username = escape_string($_POST['username']);
       $password = escape_string($_POST['password']);

       $sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
       $result = query($sql);
       confirm($result);

       if(mysqli_num_rows($result) == 0) {
           set_message("Your login details are incorrect");
           redirect('public');
       }else{
           $_SESSION['username'] = $username;
            redirect('admin');
       }
    }
}

//================= HELPER FUNCTIONS ==================

function redirect($location) {
     header("Location: ../".$location);
}

function query($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;
    if(!$result) {
        die("QUERY FAILED".mysqli_error($connection));
    }
}

function escape_string($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

//===================PRODUCT FUNCTIONS====================

function image_ext($image) {
    $image_file_name = substr($image, 0, -3);
    $image_ext = substr($image, -3);

    switch($image_ext) {
        case 'png' :
            $extension = 'png';
            break;
        case 'jpg' :
            $extension = 'jpg';
            break;
        case 'webP' :
            $extension = 'webP';
            break;
        case 'gif' :
            $extension  = 'gif';
            break;
        default :
            $extension = '';
    }
    return $image_file_name.$extension;
}

function get_product_info($id){
    $sql = "SELECT * FROM products WHERE product_id =".escape_string($id);
    $result = query($sql);
    return mysqli_fetch_assoc($result);
}

function get_categories() {
    $sql = "SELECT * FROM categories";
    $query = query($sql);
    confirm($query);
        while($row = mysqli_fetch_assoc($query)) {
            $category_links = <<<DELIMETER
            
            <li><a href='products.php?cat_id={$row['cat_id']}'>{$row['cat_title']}</a></li>
DELIMETER;
            echo $category_links;
        }
}

function get_products() {
    $sql = "SELECT * FROM products";
    $query =  query($sql);

    confirm($query);

    while($row = mysqli_fetch_assoc($query)) {
        $image = image_ext($row['product_image']);
        $products = <<<DELEMETER
        
    <div class="col-lg-4 col-sm-12 product">
        <a href="item.php?id={$row['product_id']}"><img src="../assets/images/products/{$image}" alt=""></a>
        <h6>{$row['product_title']}</h6>
        <p>{$row['product_description']}</p>
        <a href="item.php?id={$row['product_id']}" class="btn btn-outline-primary">View</a>
        <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Add to cart</a>
    </div>
        
DELEMETER;
        echo $products;

    }
}

function show_paypal() {

    if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >=1) {
        $paypal_button = <<<DELIMETER
            <input type="image" name="upload" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">

DELIMETER;
        return $paypal_button;
    }
}

//MAIN CART FUNCTION

function cart() {
    $total = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    foreach ($_SESSION as $name => $value) {
        if($value > 0) {
            if(substr($name, 0, 8 ) == "product_"){
                $length = strlen(is_numeric($name) - 8);
                $id = substr($name, 8, $length);
                $query = query("SELECT * FROM products WHERE product_id =".escape_string($id));
                confirm($query);

                while($row = mysqli_fetch_assoc($query)) {
                    $sub = $row['product_price'] * $value;
                    $item_quantity += $value;
                    $product = <<<DELIMETER
                    <tr>
                        <td>{$row['product_title']}<br><img style="object-fit: cover;" width="50" height="50" src="../assets/images/products/{$row['product_image']}" alt="">
</td>
                        <td>\${$row['product_price']}</td>
                        <td>{$value}</td>
                        <td>\${$sub}</td>
                        <td><a class="btn btn-success" href="cart.php?add={$row['product_id']}"><span class="glyphicon">+</span></a></td>
                        <td><a class="btn btn-warning" href="cart.php?remove={$row['product_id']}"><span class="glyphicon">-</span></a></td>
                        <td><a class="btn btn-danger" href="cart.php?delete={$row['product_id']}"><span class="glyphicon">x</span></a></td>
                        <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}"> 
                        <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
                        <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
                        <input type="hidden" name="quantity_{$quantity}" value="{$value}">

                     </tr>
DELIMETER;
                    echo $product;

                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                }
                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;

            }
        }
    }
}


function get_last_id() {
    global $connection;
    return mysqli_insert_id($connection);
}

//BACK END FUNCTIONS

function display_orders() {
    $query = query("SELECT * FROM orders");
    while($row = mysqli_fetch_assoc($query)) {
        $orders = <<<DELEMITER
        <tr>
        <td>{$row['order_id']}</td>
        <td>{$row['order_amount']}</td>
        <td></td>
        <td>{$row['order_transaction']}</td>
        <td>{$row['order_currency']}</td>
        <td>{$row['order_status']}</td>
        <td><a class="btn btn-danger" href="../resources/templates/back/delete_order.php?id={$row['order_id']}"><span>&times;</span></a></td>
        </tr>
DELEMITER;
    echo $orders;
    }
}


//Display Products In Admin

function display_products_in_admin() {
    $query = query("SELECT * FROM products");
    confirm($query);


    while($row = mysqli_fetch_assoc($query)) {
        $category_id = show_product_category($row['product_category_id']);
        $products = <<<DELIMETER
        <tr>
        <td>{$row['product_id']}</td>
        <td>{$row['product_title']}</td>
        <td><img style="width:100px; height=100px; object-fit: cover;" src="../assets/images/products/{$row['product_image']}" alt=""></td>
        <td>{$category_id}</td>
        <td>{$row['product_price']}</td>
        <td>{$row['product_qty']}</td>
        <td><a class="btn btn-warning" href="index.php?edit_product&id={$row['product_id']}"><span>-</span></a></td>
        <td><a class="btn btn-danger" href="index.php?delete_product&id={$row['product_id']}"><span>&times;</span></a></td>
        </tr>
DELIMETER;
        echo $products;
    }
}

function pic_upload () {
    if(isset($_POST['publish'])) {
        $file_name = $_FILES['gallery']['name'];
        $tmp_location = $_FILES['gallery']['tmp_name'];
        move_uploaded_file($tmp_location, '../assets/images/gallery_pics/'.$file_name);

    }
}



//Add products in admin

function add_product() {
    if(isset($_POST['publish'])) {
        $product_title = escape_string($_POST['product_title']);
        $product_description = escape_string($_POST['product_description']);
        $product_price = escape_string($_POST['product_price']);
        $product_qty = $_POST['product_qty'];

        $product_short_description = escape_string($_POST['short_desc']);
        $product_category_id = $_POST['product_category'];

        $product_image = escape_string($_FILES['image']['name']);
        $product_img_temp = $_FILES['image']['tmp_name'];


        move_uploaded_file($product_img_temp, '../assets/images/products/'.$product_image);

        $query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, product_image, product_qty, short_description) VALUES ('{$product_title}','{$product_category_id}','{$product_price}','{$product_description}','{$product_image}', '{$product_qty}','{$product_short_description}'); ");
        confirm($query);
        $last_id = get_last_id();
        set_message("New product with ID {$last_id} was added");
    }
}

function show_categories_add_products() {
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = mysqli_fetch_assoc($query)) {
        $categories = <<<DELEMITER
        <option value="{$row['cat_id']}">{$row['cat_title']}</option>
DELEMITER;
        echo $categories;

    }
}

function show_product_category($product_category_id) {
    $cat_query = query("SELECT * FROM categories WHERE cat_id={$product_category_id}");
    confirm($cat_query);

    while($row = mysqli_fetch_assoc($cat_query)) {
        return $row['cat_title'];
    }
}

function get_categories_in_admin(){
    $query = query("SELECT * FROM categories");
    confirm($query);

    while($row = mysqli_fetch_assoc($query)) {
        $results = <<<DELIMETER
     <tr>
        <td>{$row['cat_id']}</td>
        <td>{$row['cat_title']}</td>
        <td><a class="btn btn-danger" href="index.php?categories&del={$row['cat_id']}">&times;</a></td>
    </tr>
DELIMETER;
        echo $results;

    }
}

function add_category_in_admin()
{
    if (isset($_POST['submit'])) {
        if(!empty($_POST['cat_title'])){
            $category_title = $_POST['cat_title'];
            $query = query("INSERT INTO categories(cat_title) VALUES('{$category_title}')");
            confirm($query);
            redirect('admin/index.php?categories');
        }
    }
}


//Updating product code


function update_product() {
    if(isset($_POST['update'])) {
        $product_title = escape_string($_POST['product_title']);
        $product_description = escape_string($_POST['product_description']);
        $product_price = escape_string($_POST['product_price']);
        $product_qty = $_POST['product_qty'];

        $product_short_description = escape_string($_POST['short_desc']);
        $product_category_id = $_POST['product_category'];

        $product_image = escape_string($_FILES['image']['name']);
        $product_img_temp = $_FILES['image']['tmp_name'];

        if(empty($product_image)) {
            $select_image = query("SELECT product_image FROM products WHERE product_id =".$_GET['id']);
            confirm($select_image);
            while($pic = mysqli_fetch_assoc($select_image)) {
                $product_image = $pic['product_image'];
            }
        }


        move_uploaded_file($product_img_temp, '../assets/images/products/'.$product_image);


        $query = "UPDATE products SET ";
        $query .= "product_title = '{$product_title}', ";
        $query .= "product_description = '{$product_description}', ";
        $query .= "product_price = '{$product_price}', ";
        $query .= "product_qty = '{$product_qty}', ";
        $query .= "product_category_id = '{$product_category_id}', ";
        $query .= "short_description = '{$product_short_description}', ";
        $query .= "product_image = '{$product_image}' ";
        $query .= "WHERE product_id=".escape_string($_GET['id']);

        query($query);

        confirm("Product has been updated");
        redirect('admin/index.php?view_product');
    }
}


//ADMIN USERS

function show_users_in_admin() {
    $user_query = query("SELECT * FROM users");
    confirm($user_query);

    while($row = mysqli_fetch_assoc($user_query)) {
        $username = $row['username'];
        $user_id = $row['user_id'];
        $email = $row['email'];
        $password = $row['password'];
        $user_photo = $row['user_photo'];

        $users = <<<DELEMITER
          <tr>
            <td>{$user_id}</td>
            <td><img class="admin-user-thumbnail user_image" src="../assets/images/profiles/{$user_photo}" width="50" height="50" style="object-fit: cover;" alt=""></td>
            <td>{$username}
                <div class="action_links">
                    <a href="../admin/index.php?users&del={$user_id}">Delete</a>
                    <a href="">Edit</a>
                </div>
            </td>
        </tr>
DELEMITER;
echo $users;
    }
}


function delete_user($user_id){
    $query = query("DELETE FROM users WHERE user_id={$user_id}");
    confirm($query);
    redirect('admin/index.php?users');
}


function add_user_admin() {
   if(isset($_POST['add_user'])) {


       $username = escape_string($_POST['username']);
       $password = escape_string($_POST['password']);
       $email = escape_string($_POST['email']);
       $user_photo = $_FILES['user_photo']['name'];
       $photo_temp = $_FILES['user_photo']['tmp_name'];

       move_uploaded_file($photo_temp, '../assets/images/profiles/'.$user_photo);
        $query = query("INSERT INTO users (username, email, password, user_photo) VALUES ('{$username}','{$email}','{$password}','{$user_photo}')");
        confirm($query);
        redirect("admin/index.php?users");

   }
}

function get_reports() {
    $query = query("SELECT * FROM reports");
    confirm($query);

    while($row = mysqli_fetch_assoc($query)) {
        $report = <<<DELIMETER
          <tr>
            <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td>{$row['product_price']}</td>-->
            <td>{$row['product_title']}</td>
           <td>{$row['product_quantity']}</td>
           <td><a class="btn btn-danger" href="../resources/templates/back/delete_report.php?id={$row['report_id']}">X</a></td>
        </tr>
DELIMETER;
        echo $report;

    }
}



?>