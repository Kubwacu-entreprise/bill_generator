<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css.css">
    <link rel="stylesheet" href="lib/font_awesome/css/all.min.css">
    <title>Bill Generator</title>
</head>
<body>
    <header>
        <div class="header_content">
            <div><h1>Bill Generator</h1></div>
            <div><i class="fas fa-tools"></i></div>
        </div>
    </header>
    <div class="body">
        <?php include_once("lib/includes/empty_bills_message.php") ?>
        <?php include_once("lib/includes/bills_table.php") ?>
    </div>
</body>
</html>