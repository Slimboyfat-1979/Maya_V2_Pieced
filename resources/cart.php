<?php
include_once('../resources/config.php');
include_once('../resources/functions.php');
?>

<!--http://localhost/Maya_Pieced/admin/thankyou.php?PayerID=ACXLS9NKAQ8XJ&st=Completed&tx=54400009P3191440H&cc=NZD&amt=12.99&payer_email=sb-35yhu21553187%40personal.example.com&payer_id=ACXLS9NKAQ8XJ&payer_status=VERIFIED&first_name=John&last_name=Doe&address_name=John%20Doe&address_street=123%20Sample%20St&address_city=Wellington&address_state=NZ_zip%20%3D%206004&address_country_code=NZ&address_zip=6004&residence_country=NZ&txn_id=54400009P3191440H&mc_currency=NZD&mc_fee=0.89&mc_gross=12.99&protection_eligibility=ELIGIBLE&payment_fee=0.89&payment_gross=12.99&payment_status=Completed&payment_type=instant&handling_amount=0.00&shipping=0.00&item_name1=First%20product&item_number1=27&quantity1=1&mc_gross_1=12.99&tax1=0.00&num_cart_items=1&txn_type=cart&payment_date=2022-11-28T23%3A19%3A25Z&receiver_id=3TYYSDPFCJ56Q&notify_version=UNVERSIONED&verify_sign=ASq15zwbkN0RJcERWnO31YgfQnNZAoVn-GIM.77s3-mCR-RKaCefE9JS-->

<?php




function processed_transactions() {

if(isset($_GET['tx'])) {
    global $connection;
    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $status = $_GET['st'];
    $transaction = $_GET['tx'];



    $total = 0;
    $item_quantity = 0;
    foreach ($_SESSION as $name => $value) {
        if($value > 0 ) {
            if(substr($name, 0,8) == "product_") {
                $length = strlen(is_numeric($name) - 8);
                $id = substr($name, 8, $length);

                $query = "INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) VALUES(?,?,?,?)";
                $stmt = mysqli_prepare($connection, $query);
                mysqli_stmt_bind_param($stmt, 'dsss', $amount, $transaction, $status, $currency);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                $last_id = get_last_id();

                $query = query("SELECT * FROM products WHERE product_id = ".escape_string($id));
                confirm($query);

                    while($row = mysqli_fetch_array($query)) {
                        $product_price = $row['product_price'];
                        $product_title = $row['product_title'];
                        $sub = $row['product_price'] * $value;
                        $item_quantity += $value;

                        $insert_report = query("INSERT INTO reports(product_id, product_price, product_quantity, order_id, product_title) VALUES ('{$id}','{$product_price}','{$value}', {$last_id}, '{$product_title}')");
                    }
                }
            }
        }
    session_destroy();
        }else{
        redirect('public/index.php');
    }
}


if(isset($_GET['add'])) {
    $query = query("SELECT * FROM products WHERE product_id=".escape_string($_GET['add']));
    confirm($query);

    while($row = mysqli_fetch_assoc($query)) {
        if($row['product_qty'] != $_SESSION['product_'.$_GET['add']]) {
            $_SESSION['product_'.$_GET['add']] +=1;
            redirect('resources/checkout.php');
        }else{
            set_message("We only have ".$row['product_qty']. " ".$row['product_title']." in stock");
            redirect('resources/checkout.php');
        }
    }
}

if(isset($_GET['remove'])) {
    $_SESSION['product_'.$_GET['remove']]--;

    if($_SESSION['product_'.$_GET['remove']] < 1) {
//        $_SESSION['product_'.$_GET['remove']]  = 0;
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect('resources/checkout.php');
    }else{
        redirect('resources/checkout.php');
    }
}

if(isset($_GET['delete'])) {
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
    $_SESSION['product_'.$_GET['delete']]  = '0';
    redirect('resources/checkout.php');

}

?>

