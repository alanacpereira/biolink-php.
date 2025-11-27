<?php
    $nome = "Alana Camilli";
    $bio = " 18, summers<br>ce, Brasil<br>🐚🏐🍃🏝️🌟🌊<br> here we go again";
    $imagem = "https://i.pinimg.com/736x/28/cc/19/28cc19385dad8d5af02097eda648c524.jpg";
    $links = [
        "Instagram" => "https://instagram.com/@eu.alanacamilli",
        "WhatsApp" => "https://wa.me/55 17 991012525",
        "Meu Jogo Favorito" => "https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=pt_BR",
        "Música do Momento" => "https://www.youtube.com/watch?v=BW73u2yGGa8&list=RDBW73u2yGGa8&start_radio=1"
    ];

    $link_vip = "WhatsApp";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        
         <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

         <h1> <?php echo $nome; ?> </h1>
         <p> <?php echo $bio; ?> </p>

        <div class="lista-links">
            <?php
                foreach ($links as $texto => $url) {
                     $classe_extra = "";

                     if ($texto == "Instagram") {
                        $classe_extra ="destaque";
                     }
                     echo "<a href='$url' class='btn $classe_extra' target='_blank'><br>
                        $texto
                      </a>";
                 }
            ?>
        </div>

        <div class="area-contato">
            <a href="contato.php" class="btn-msg">📧 Enviar Mensagem</a>
        </div>    

    </div>
</body>
</html>