<html>
<?php
$male=str_split($_POST["male"]);
$female=str_split($_POST["female"]);
$com=array_intersect($male, $female);
foreach ($com as $key) {
	echo $key;
}
$rep_char_count=count($com);
echo $rep_char_count;
$total_count=count($male)+count($female);
$flame_key=$total_count-($rep_char_count*2);
echo $flame_key;
$flame="flame";
if($flame_key>6)
{
	$flame_key=$flame_key%6;
}
echo $flame_key;
for($j=0;$j=strlen("flames");$j++)
{
for($i=0;$i<=$flame_key-1;$i++)
{
	echo "loope"
	$flame[$j]='*'

}
}


echo count($flame)
	?>
	</html>