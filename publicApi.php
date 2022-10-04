<!DOCTYPE html>
 <html>
 <head>
      <title>Exemplo 01 - Consumindo via php</title>
 </head>
 <body>
      <?php
        $hg = file_get_contents("https://apilivros.tk/api/public/api/livros");
        echo $hg;
      ?>
 </body>
 </html>