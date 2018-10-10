<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form action="lletres.php" method="post" >
        <input type="text" name="text" id="frase">
        <input type="submit" value="enviar">
    </form>
    <?php
    $voc = array("a","e","i","o","u");
    $lletres = str_split($_POST["text"]);
    $cont=0;
    foreach ($lletres as $key => $value) {
        foreach ($voc as $key2 => $value2) {
            if($value==$value2){
                $cont+=1;
            }
        }
    }
    echo("Te ".$cont." vocals")
    ?>
</body>
</html>