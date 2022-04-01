<?php
    $it=$_POST['item_type'];
    $db = new PDO('pgsql:host=localhost;port=5432;dbname=gis_app;user=postgres');
    $sql = $db->prepare("SELECT item_id, coluna_1, coluna_2 FROM public.table_name WHERE coluna_1 = :it");
    $params = ["it"=>$it];
    $sql->execute($params);
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
?>