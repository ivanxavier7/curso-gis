<?php 
    $sql = "UPDATE coords SET ";
    foreach ($_POST as $key=>$val) {
        $sql .= "{$key} = '{$val}', ";
    }
    $sql .= "WHERE id=13";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Title</title>
    </head>
    <body>
        <h2>Latitude: <?php echo $_POST['lat']; ?></h2>
        <h2>Latitude: <?php echo $_POST['lng']; ?></h2>
        <h2>Latitude: <?php echo $_POST['alt']; ?></h2>
        <hr>
        <h2><?php echo $sql; ?></h2>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>