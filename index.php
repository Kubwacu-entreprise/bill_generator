<?php 
    require("lib/controller.php"); 

    $bills_length = Controller::count();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/style.css">
    <link rel="stylesheet" href="lib/font_awesome/css/all.min.css">
    <title>Bill generator</title>
</head>
<body>
    <header>
        <div class="header_content">
            <div><h1>Bill generator (nombre de factures créés: <= $bills_length ?></h1></div>
            <div><i class="fas fa-tools"></i></div>
        </div>
    </header>
    <div class="body">
        <?php include_once("lib/includes/empty_message.php") ?>
        <!-- <?php include_once("lib/includes/invoices_table.php") ?> -->
    </div>
    <?php include_once("lib/includes/create_invoice.php") ?>
    <?php include_once("lib/includes/add_item.php") ?>
    <script src="lib/app.js"></script>
</body>
</html>