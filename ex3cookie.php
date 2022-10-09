<?php
$opc = $_POST["opciones"];
$yes = "Yes";
if($opc == $yes){
    echo "Text: " . $_COOKIE["texto"];
    echo "<br>";
    echo "Color: " . $_COOKIE["color"];
    echo "<br>";
    echo "Letra: " . $_COOKIE["letra"];
    echo "<br>";
    echo "Tamaño: " .$_COOKIE["tamaño"];
}else{echo "No se han guardado las preferencias";}

?>