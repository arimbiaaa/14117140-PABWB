<?php
function tukar(&$value,&$value2){
    $x=$value;
    $value=$value2;
    $value2=$x;
    
    return 0;
}
$x=0;
$value=1;
$value2=2;
echo "Nilai sebelum di tukar </br>";
echo "Value 1 = 1 </br>";
echo "Value 2 = 2 </br>";

tukar($value,$value2);
echo "Nilai sesudah di tukar";
echo "</br>";
echo "Value 1 = $value </br>";
echo "Value 2 = $value2 </br>";
?>