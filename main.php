<?php
session_start();
if(isset($_SESSION['loads'])){
    $_SESSION['loads'] = $_SESSION['loads']+1;
    }
else{
    $_SESSION['loads']=1;
    }
      
$myear =  date("n", mktime(0, 0, 0, date("m"), date("d"),   date("Y")));
$dayyear =  date("j", mktime(0, 0, 0, date("m"), date("d"),   date("Y")));

if($myear==6||$myear==7||$myear==8||$myear==9){
    echo"GOOD SUMMER!!";
}else{
    echo"GOOD WINTER!!";
}


?>
<html>
 <head>
  <title>3 and 4</title>
    
 </head>
 <body>
  
  <form method="post" action="secondary.php">
   <p>Enter your text:  
    <input type="text" name="subir"/>
   </p>
   <select name="color" id="color">
	<option value="red">Red</option>
	<option value="green">Green</option>
	<option value="blue">Blue</option>
   </select>

<select name="letra" id="letra">
	<option value="serif">serif</option>
	<option value="cursive">cursive</option>
	<option value="fantasy">fantasy</option>
</select>
<select name="tamaño" id="tamaño">
	<option value="16">16</option>
	<option value="32">32</option>
	<option value="44">44</option>
</select>
<p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
</form>

</div>

 </body>
</html>
<?php
    echo"You have visited this page ".$_SESSION['loads']. " times.";  
?>

