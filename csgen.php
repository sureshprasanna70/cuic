<?php
$fp = fopen('clglist.txt', 'r');
while($arr=fgets($fp))
{
	echo '"'.$arr.'",<br>';
}


fclose($fp);
?>