<?php
    if(isset($_POST['submit'])) {
        $it=$_POST['item_type'];
        $db = new PDO('pgsql:host=localhost;port=5432;dbname=gis_app;user=postgres');
        $sql = $db->prepare("SELECT item_id, coluna_1, coluna_2 FROM public.table_name WHERE coluna_1 = :it");
        $params = ["it"=>$it];
        $sql->execute($params);
    }
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

        <form action="" method="post">
            <select name="item_type" id="">
                <option value="doce">Doce</option>
                <option value="salgado">Salgado</option>
                <option value="azedo">Azedo</option>
            </select><br>
            <input type="submit" name="submit" value="Submit">
            <hr>
            <?php
                if (isset($_POST['submit'])) {
                    echo "<table class='table table-striped'>";
                    echo "<tr><th>Item</th><th>Tipo</th><th>Valor</th>";
                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        foreach ($row as $field=>$value) {
                            echo "<td>{$value}</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            ?>
        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>