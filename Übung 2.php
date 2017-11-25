<?php
$a = 1;		//Zahlenbereich von...
$b = 100;	//Zahlenbereich bis...
function zahlenbereich($a, $b)
{
    return "Zahlenbereich von $a bis $b:\n";
}
echo zahlenbereich($a, $b);   
for($i=$a; $i < $b+1; $i++) 
{
if ($i % 3 == 0 AND $i % 5 == 0) 
{
echo "<br>$i = too bar ";
}
else if ($i % 3 == 0) 
{
echo "<br>$i = too ";
}
else if ($i % 5 == 0) 
{
echo "<br>$i = bar  ";
}
else 
{
echo "<br>$i = x";
}
}
?>
