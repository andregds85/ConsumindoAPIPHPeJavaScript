<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="UTF-8">
        <title>Celke - Consumir API no PHP com file_get_contents</title>
    </head>
    <body>
        <?php
        $url = "https://swapi.co/api/people/?page=2";
        $resultado = json_decode(file_get_contents($url));
        //var_dump($resultado);
        
        foreach ($resultado->results as $ator) {
            echo "Ator: " . $ator->name . "<br>";
            echo "Altura: " . $ator->height . " cm<br>";
            foreach ($ator->films as $filme) {
                echo "Filme: " . $filme . "<br>";
            }
            
            echo "<hr>";
        }
        ?>
    </body>
</html>
