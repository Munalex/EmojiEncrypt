<!DOCTYPE html>
<html lang="en">

<?php
    $emojis = array("a" =>"\u{1F333}","b" =>"\u{26F5}","c"=>"\u{1F48C}","d"=>"\u{1F369}","e"=>"\u{1F418}","f"=>"\u{1F525}","g"=>"\u{1F408}","h"=>"\u{1F681}","i"=>"\u{1F9F2}","j"=>"\u{1F417}","k"=>"\u{1F95D}","l"=>"\u{1F319}","m"=>"\u{1F98B}","n"=>"\u{1F443}","o"=>"\u{1F9F8}","p"=>"\u{1F370}","q"=>"\u{1F9C0}","r"=>"\u{1F916}","s"=>"\u{1F3B7}","t"=>"\u{260E}","u"=>"\u{1F984}","v"=>"\u{1F56F}","w"=>"\u{1F9C7}","z"=>"\u{1F45E}");
    $resultado = "";
    if (isset($_POST['entrada'])) {
        $caracteres = strtolower($_POST['entrada']);
        for ($i=0; $i < strlen($caracteres); $i++) { 
            foreach ($emojis as $clave => $valor) {
                $lolo = $caracteres[$i];
                if ($lolo == $clave) {
                    $resultado = $resultado.$valor;
                }
            }
        }
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>EmojiEncrypt</title>
</head>
<body>
    <div>
        <form action="emojiencrypt.php" method="post">
            <textarea name="entrada" id="entrada" cols="71" rows="15" placeholder="escribe aqui lo que quieras encriptar con emojis"></textarea>
            <input type="submit" value="emoji" id="boton">
            <textarea readonly id="resultado" cols="71" rows="15"><?php echo $resultado;?></textarea>
        </form>
    </div>
  
</body>
</html>