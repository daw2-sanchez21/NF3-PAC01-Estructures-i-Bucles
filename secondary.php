<?php
session_start();
setcookie("color", $_POST['color']);
setcookie("texto", $_POST['subir']);
setcookie("letra", $_POST['letra']);
setcookie("tamaño", $_POST['tamaño']);
date_default_timezone_set("America/New_York");
$twoago = date("F d Y", mktime( 0, 0, 0, date("m")  , date("d")-2, date("Y")));
echo "Two days ago it was " . $twoago . "<br>";
$nmonth = date("M", mktime(0, 0, 0, date("m")+1, date("d"),   date("Y")));
echo "The next month is " . $nmonth . "<br>";
$leftnm = date("t", mktime(0, 0, 0, date("m")+1, date("d"),   date("Y")));
echo "There are " . $leftnm . " days left in next month" . "<br>";
$year = 12;
$leftyear = date("m", mktime(0, 0, 0, date("m"), date("d"),   date("Y")));
echo "There are " . ($year-$leftyear) . "";
?>
<html>
 <head>
  <title>Exercises</title>
  <style type="text/css">
     div { 
        text-align:center;
         }
     
        .texto{
            color:<?php echo $_POST['color'];?>;
            font-size:<?php echo $_POST['tamaño'];?>;  
            font-family:<?php echo $_POST['letra'];?>;
        }
    
    </style>
 </head>
 <body>
<?php

?>
<br/>
<div>
<a href="https://github.com/daw2-sanchez21?tab=repositories"> Site developed by: Carlos Sánchez.</a>
</div>
<p class="texto">
            <?php echo $_POST["subir"];?>
            <?php $tamaño = $_POST["tamaño"];?>
            <?php $letra= $_POST["letra"];?>
            <?php $color = $_POST["color"];?>
            <?php $subir= $_POST["subir"];?>
        
            <form action="ex3cookie.php" method="post">
                <input type="hidden" name="subir" value=<?php echo $tamaño; ?>>
                <input type="hidden" name="variable2" value=<?php echo $letra; ?>>
                <input type="hidden" name="variable3" value=<?php echo $color; ?>>
                <input type="hidden" name="variable4" value=<?php echo $subir; ?>>
                <p>You want to save the options?</p>
                <select name="opciones" id="opciones">
                <option value="Yes">Yes</option>
	            <option value="Not">Not now</option>
                <p>
                <input type="submit" name="submit2" value="Submit"/>
                </p>
            </form>
        </p>
</body>
</html>