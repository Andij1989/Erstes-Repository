<?php

function zahlenbereich($a, $b)
{
    echo "Zahlenbereich von $a bis $b:\n";
	
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
}

echo zahlenbereich(1, 100);

?>
