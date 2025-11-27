<?php
    $nome = "Alana Camilli";
    $bio = " 18, summers<br>ce, Brasil<br>🐚🏐🍃🏝️🌟🌊<br> here we go again";
    $imagem = "https://i.pinimg.com/736x/28/cc/19/28cc19385dad8d5af02097eda648c524.jpg";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>
</head>
<body>
<div class="container">
   <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="foto">
   <h1> <?php echo $nome; ?> </h1>
   <p> <?php echo $bio; ?> </p>
   <div class="lista-links"></div>
</div>

</body>
</html>