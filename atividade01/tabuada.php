
 <?php

 $numero = $_GET[('numero')] ?? '';
 echo"Tabuada do 6: <br>";
for ($i = 1; $i <= 10; $i++){
    echo (" $numero x $i = " . $numero * $i. "<br>");
}
 ?>