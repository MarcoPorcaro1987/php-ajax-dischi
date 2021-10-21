<?php 
    require_once __DIR__ . "/partials/database.php"; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <!-- css -->
        <link rel="stylesheet" href="css/style.css">
        <title>PHP Ajax Dischi</title>
    </head>
    <body>
        <?php include __DIR__ . "/partials/template/header.php"; ?>  
        <main>
            <?php include __DIR__ . "/partials/template/albums.php"; ?>
        </main>
    </body>
</html>