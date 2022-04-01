<?php
    // Strings
    $header="Welcome To My Page";
    $space=" ";
    $myString1="Como".$space."concatenar strings em PHP";
    $myString2="Como{$space}concatenar strings em PHP";

    // Arrays
    $animalType = ["CAT", "DOG", "CHICKEN"];
    $animalType[] = "BEAR";
    $animalType[6] = "FERRET";

    //Conditions
    if (isset($_GET['lat'])) {
        $lat = $_GET['lat'];
    } else {
        $lat = "Não Existe";
    };
    if (isset($_GET['lng'])) {
        $lng = $_GET['lng'];
    } else {
        $lng = "Não Existe";
    };
    if (isset($_GET['alt'])) {
        $alt = $_GET['alt'];
    } else {
        $alt = "Não Existe";
    };
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
        <h1>Strings</h1>
        <h3><?php echo "Chamar: ".$header; ?></h3>
        <h4><?php echo $myString1; ?></h4>
        <h4><?php echo $myString2; ?></h4>
        <hr>
        
        <h1>Arrays</h1>
        <h4><?php echo $animalType[0]; ?></h4>
        <h4><?php echo $animalType[1]; ?></h4>
        <h4><?php echo $animalType[2]; ?></h4>
        <h4><?php echo $animalType[3]; ?></h4>
        <h4><?php echo $animalType[6]; ?></h4>
        <h4><?php sort($animalType); // Index 4 e 5 estavam vazios?></h4>
        <h4><?php echo $animalType[0]; ?></h4>
        <h4><?php echo $animalType[1]; ?></h4>
        <h4><?php echo $animalType[2]; ?></h4>
        <h4><?php echo $animalType[3]; ?></h4>
        <h4><?php echo $animalType[4]; ?></h4>
        <hr>

        <h1>Comunicar</h1>
        <h4>Latitude: <?php echo $_GET['lat']; ?></h4>
        <h4>Longitude: <?php echo $_GET['lng']; ?></h4>
        <h4>Altitude: <?php echo $_GET['alt']; ?></h4>
        <hr>
        <!-- pesquisar com parâmetros: http://127.0.0.1/client/test.php?lat=19.12845&lng=-99.34267&alt=2207 , Alterar "client" se necessário, nome da pasta-->

        <h1>Condições</h1>
        <h4>Latitude: <?php echo $lat; ?></h4>
        <h4>Longitude: <?php echo $lng; ?></h4>
        <h4>Altitude: <?php echo $alt; ?></h4>
        <hr>
        <!-- pesquisar sem parâmetros: http://127.0.0.1/client/test.php -->
        
        <h1>Loop com Dicionário</h1>
        <?php 
            foreach ($_GET as $key=>$val) {
                echo "<h3>Key: {$key} Value: {$val}</h3><br>";
            }
        ?>
        <hr>
        <!-- pesquisar com parâmetros: http://127.0.0.1/client/test.php?lat=19.12845&lng=-99.34267&alt=2207 -->

        <h1>Form</h1>
        <form action="process_lat.php" method="POST">
            Latitude: <input type="text" name="lat" id=""><br>
            Longitude: <input type="text" name="lng" id=""><br>
            Altitude: <input type="text" name="alt" id=""><br>
            <input type="submit" value="Submit">
        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>