<?php

for($i=1; $i < 1001; $i++) 
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
