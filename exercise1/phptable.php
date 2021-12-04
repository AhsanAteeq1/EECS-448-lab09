<?php

echo "<table>";

for($i = 1; $i <= 100; $i++)
{

  if ($i==1)
  {

    for ($a=1; $a <=100; $a++)
    {
      echo "<td> $a </td>";
    }
  }

    echo "<tr>";

	for($j =1; $j <= 100; $j++)
	{
  		$z = $i * $j;
  		echo "<td> $z </td>";
  }

	echo "</tr>";
}
echo "</table>";
?>
