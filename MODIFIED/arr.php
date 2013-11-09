<?php
function array_tester($hi)
{
	echo $hi[0];
}
$ho=array("hi","bur");
array_tester($ho);
?>
for($i=0;i<count($dept1);$i++)
	{
		echo '<tr class="one2">';
		echo '<td>';
		echo $dept1[i];
		echo '</td> <td>';
		echo $tot[i];
		echo '</td> <td>';
		echo $placed1[i];
		echo '</td> <td>';
		echo (floor(($placed1[$i]/$tot1[$i])*100));
		echo '</td> </tr>';
	}