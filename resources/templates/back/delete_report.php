<?php
include_once ('../../config.php');
include_once ('../../functions.php');

if(isset($_GET['id'])) {
    $query = query("DELETE FROM reports WHERE report_id=".escape_string($_GET['id']));
    confirm($query);
    redirect("../../admin/index.php?reports");
    set_message("Report Deleted");
}else{
    redirect('../../admin/index.php?reports');
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>