<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //arreglo indexado
    $listaIndexadaIndexadas = array("item 1","item 2","item 3","item 4","item 5"); 

    //arreglo asociativo
    $listaAsociativas = array(
        "roja" => "Item 1",
        
       
"amarilla" => "Item 2",
        "naranja" => "Item 3",
        "morada" => "Item 4",
        
       
"verde" => "Item 5"
    );

    echo "<h2>Arreglo Indexado:</h2>";
    echo "<ul>";

    foreach ($listaIndexadaIndexadas as $items){
        echo ("<li>$items</li>");
    }

    echo "</ul>";

    echo "<h2>Arreglo Asociativo:</h2>";
    echo "<ul>";
    foreach ($listaAsociativas as $color => $items) {
        echo "<li>$color: $items</li>";
    }
echo "</ul>";

    echo "<h2>Diferencias:</h2>";
    
   
    echo "<p>El arreglo indexado utiliza índices numéricos (0, 1, 2, ...) para acceder a los elementos.</p>";
    echo "<p>El arreglo asociativo utiliza claves personalizadas ('roja', 'amarilla', ...) en lugar de índices numéricos.</p>";
    ?>
</body>
</html>