<html>
<link rel="stylesheet" type="text/css" href="one.css">
<link rel="stylesheet" type="text/css" href="all.css">
<?
$dept=array("AGRICULTURE & IRRIGATION","BIOMEDICAL ENGINEERING","CIVIL","COMPUTER SCIENCE AND ENGINEERING","ELECTRICAL & ELECTRONICS","ELECTRONICS & COMMUNICATION","GEO-INFORMATICS","INDUSTRIAL","INFORMATION  TECHNOLOGY","MANUFACTURING ","MATERIAL SCIENCE","MECHANICAL","MINING","PRINTING TECHNOLOGY");
$tot=array(34,47,55,198,62,251,33,39,112,36,36,164,26,41);
$placed=array(9,28,22,150,49,185,24,16,92,24,22,113,16,18);
$dept_me_civil=array("CONSTRUCTION ENGG. & MANAGEMENT","ENVIRONMENATAL MANAGEMENT","ENVIRONMENTAL ENGINEERING","GEO-INFORMATICS","HYDROLOGY & WATER RESOURCES","INTEGRATED WATER RESOURCE MGMT.","IRRIGATION WATER MANAGEMENT","SOIL MECHANICS AND FOUNDATION" ,"SOLAR ENERGY","STRUCTURAL","TRANSPORTATION");
$tot_me_civil=array(18,14,14,20,22,11,14,15,15,18,20);
$placed_me_civil=array(3,1,5,0,1,2,3,0,1,7,0);


//ME mech
$dept_me_mech=array("COMPUTER INTEGRATED MANUFACTURING","ENERGY","ENGINEERING DESIGN","INDUSTRIAL","INTERNAL COMBUSTION ENGINES","MANUFACTURING SYSTEMS & MANAGEMENT","REFRIGERATION AND AIR-CONDITIONING");
$tot_me_mech=array(16,22,23,23,22,24,21);
$placed_me_mech=array(8,5,3,5,0,1,1);


//ME eee
$dept_me_eee=array("CONTROL & INSTRUMENTATION","EMBEDDED SYSTEMS TECHNOLOGIES","HIGH VOLTAGE","POWER ELECTRONICS & DRIVES","POWER SYSTEMS");
$tot_me_eee=array(20,26,21,21,22);
$placed_me_eee=array(3,9,1,5,3);


$dept_me_ece=array("APPLIED ELECTRONICS","BIOMEDICAL ENGINEERING","COMMUNICATION SYSTEMS","MEDICAL ELECTRONICS","V.L.S.I. DESIGN");
$tot_me_ece=array(24,21,29,19,24);
$placed_me_ece=array(7,6,5,7,9);



$dept_me_cse=array("COMPUTER SCIENCE AND ENGINEERING","INFORMATION  TECHNOLOGY","MULTI-MEDIA TECHNOLOGY","SOFTWARE ENGINEERING");
$tot_me_cse=array(24,22,21,20);
$placed_me_cse=array(5,5,4,1);

$dept_me_printing="PRINTING & PACKAGING TECHNOLOGY";
$tot_me_print=17;
$placed_me_print=0;




$dept_mtech=array("COASTAL MANAGEMENT","LASER AND ELECTRO OPTICAL ENGG.","POLYMER SCIENCE AND ENGINEERING","REMOTE SENSING");
$tot_mtech=array(11,22,7,19);
$placed_mtech=array(0,3,0,4);

$dept_mba=array("BUSINESS ADMINISTRATION","BUSINESS ADMINISTRATION - HOSPITALITY MGT");
$tot_mba=array(58,18);
$placed_mba=array(16,0);

$mca_tot=106;
$mca_placed=57;

$dept_msc=array("APPLIED MATHEMATICS","APPLIED CHEMISTRY","APPLIED GEOLOGY","ELECTRONICS MEDIA","ENVIRONMENTAL SCIENCE","MATERIAL SCIENCE","SCIENCE & TECHNOLOGY COMMINICATION");
$tot_msc=array(27,3,26,34,3,9,11);
$placed_msc=array(2,0,0,1,0,0,0);

$dept_integ=array("COMPUTER SCIENCE","INFORMATION  TECHNOLOGY","ELECTRONICS MEDIA");
$tot_integ=array(26,21,36);
$placed_integ=array(19,14,10);


//act
$act_btech=array("APPAREL TECHNOLOGY","CERAMIC TECHNOLOGY","CHEMICAL ENGINEERING","FOOD TECHNOLOGY","INDUSTRIAL BIO-TECHNOLOGY","LEATHER  TECHNOLOGY","PETROLEUM REFINING & PETRO CHEMICALS ","PHARMACEUTICAL TECHNOLOGY","TEXTILE     TECHNOLOGY");
$act_tot=array(23,22,56,17,53,37,36,17,38);
$act_placed=array(8,16,30,5,29,12,18,4,14);

$act_pg=array("BIO-PHARMACEUTICAL TECHNOLOGY","BIO-TECHNOLOGY","CERAMIC TECHNOLOGY","CHEMICAL ENGINEERING","COMPUTATIONAL BIOLOGY","ENVIRONMENTAL SCIENCE AND TECHNOLOGY","FOOD TECHNOLOGY","NANO TECHNOLOGY & SCIENCE","PETROLEUM REFINING & PETRO CHEMICALS ","TEXTILE TECHNOLOGY");

$act_pg_tot=array(25,22,10,19,4,21,13,18,22,14);
$act_pg_placed=array(11,2,3,1,0,2,6,5,0,10);


//mit
$mit_ug=array("AERONAUTICAL","AUTOMOBILE","COMPUTER SCIENCE AND ENGINEERING","ELECTRONICS & COMMUNICATION","ELECTRONICS & INSTRUMENTATION","INFORMATION TECHNOLOGY","PRODUCTION","RUBBER & PLASTICS TECHNOLOGY");
$mit_ug_tot=array(46,39,113,176,62,111,61,28);
$mit_ug_placed=array(29,32,83,124,56,88,39,22);
$mit_pg=array("AERONAUTICAL","AEROSPACE TECHNOLOGY","APPLIED MATHEMATICS","AUTOMOBILE","AVIONICS","COMMUNICATION & NETWORKING","COMPUTER SCIENCE AND ENGINEERING","INFORMATION TECHNOLOGY","INSTRUMENTATION","MANUFACTURING","MECHATRONICS","RUBBER TECHNOLOGY");
$mit_pg_tot=array(27,15,11,19,22,22,26,18,21,21,24,12);
$mit_pg_placed=array(5,6,3,4,9,4,8,1,9,6,6,6);
function stat_printer($dept1,$tot1,$placed1)
{
	$tot_sum=0;
	$placed_sum=0;
	for($i=0;$i<count($dept1);$i++)
	{
		echo '<tr class="style28">';
		echo '<td  height="25" valign="bottom">';
		echo $dept1[$i];
		echo '</td> <td>';
		echo $tot1[$i];
		$tot_sum+=$tot1[$i];
		echo '</td> <td height="25" valign="bottom">';
		echo $placed1[$i];
		$placed_sum+=$placed1[$i];
		echo '</td> <td  height="25" valign="bottom">';
		echo (floor(($placed1[$i]/$tot1[$i])*100));
		echo '/td> </tr>';

	}
	echo '<tr class="one2">';
	echo '<td class="sub_total">';
	echo "SUBTOTAL";
	echo '</td> <td>';
	echo $tot_sum;
	echo '</td><td>';
	echo $placed_sum;
	echo '</td><td>';
	echo floor(($placed_sum/$tot_sum)*100);
	echo '</td></tr>';


}
?>
<table width="90%"  border="1" align="center" cellpadding="0" cellspacing="0" class="one2">
<tr class="dept_name">
	<td colspan="4">
		<b>Placement statistics for the year 2012-13</b>
	</td>
</tr>	
<tr class="dept_name">
	<td colspan="4">
		<b>College of Engineering ,Guindy</b>
	</td>
</tr>
<tr class="category">
	<td align="center"> Dept</td>
	<td>Regd</td>
	<td>Placed</td>
	<td>%</td>
</tr>
<tr class="dept_name">
	<td colspan="4">
		<b>BE</b>
	</td>
</tr>  
<?stat_printer($dept,$tot,$placed);?>

<tr class="dept_name">
	<td colspan="4">ME CIVIL</td>
</tr>  
<?stat_printer($dept_me_civil,$tot_me_civil,$placed_me_civil);?>

<tr class="dept_name">
	<td colspan="4">ME MECHANICAL</td>
</tr> 
<?stat_printer($dept_me_mech,$tot_me_mech,$placed_me_civil);?>

<tr class="dept_name">
	<td colspan="4">ME ECE </td>
</tr> 
<?stat_printer($dept_me_ece,$tot_me_ece,$placed_me_ece);?>

<tr class="dept_name">
	<td colspan="4">ME EEE</td>
</tr> 
<?stat_printer($dept_me_eee,$tot_me_eee,$placed_me_eee);?>

<tr class="dept_name">
	<td colspan="4">ME CSE</td>
</tr> 
<?stat_printer($dept_me_cse,$tot_me_cse,$placed_me_cse);?>

<tr class="dept_name">
	<td colspan="4">M.E PRINTING</td>
</tr>

<tr class="one2">
	<td><?echo $dept_me_printing ;?></td>
	<td><?echo $tot_me_print ;?></td>
	<td><?echo $placed_me_print ;?></td>
	<td><?echo floor(($placed_me_print/$tot_me_print)*100);?></td>
</tr>

<tr class="dept_name">
	<td colspan="4">M.TECH</td>
</tr> 
<?stat_printer($dept_mtech,$tot_mtech,$placed_mtech);?>

<tr class="dept_name">
	<td colspan="4">MCA</td>
</tr>
<tr class="one2">
	<td>MASTER OF COMPUTER APPLICATION</td>
	<td><?echo $mca_tot ;?></td>
	<td><?echo $mca_placed ;?></td>
	<td><?echo floor(($mca_placed/$mca_tot)*100);?></td>
</tr>
<tr class="dept_name">
	<td colspan="4">
	MBA
	</td>
</tr> 
<?stat_printer($dept_mba,$tot_mba,$placed_mba);?>
<tr class="dept_name">
	<td colspan="4">M.SC</td>
</tr> 
<?stat_printer($dept_msc,$tot_msc,$placed_msc);?>

<tr class="dept_name">
	<td colspan="4">M.SC (Integrated) </td>
</tr> 
<?stat_printer($dept_integ,$tot_integ,$placed_integ);?>

<tr class="dept_name">
	<td colspan="4">Alagappa College of Technology</td>
</tr>
<tr class="dept_name">
	<td colspan="4">B.Tech</td>
</tr> 
<?stat_printer($act_btech,$act_tot,$act_placed);?>

<tr class="dept_name">
	<td colspan="4">M.Tech</td>
</tr> 
<?stat_printer($act_pg,$act_pg_tot,$act_pg_placed);?>

<tr class="dept_name">
	<td colspan="4">Madras Insitute of Technology</td>
</tr>

<tr class="dept_name">
	<td colspan="4">B.E</td>
</tr>
<?stat_printer($mit_ug,$mit_ug_tot,$mit_ug_placed);?>

<tr class="dept_name">
	<td colspan="4">M.E</td>
</tr>
<?stat_printer($mit_pg,$mit_pg_tot,$mit_pg_placed);?>

<tr class="dept_name">
	<td>UG TOTAL (ANNA UNIV.)</td>
	<td>2094</td>
	<td>1377</td>
	<td>65.76</td>
</tr>
<tr class="dept_name">
	<td>PG TOTAL (ANNA UNIV.)</td>
	<td>1506</td>
	<td>340</td>
	<td>22.58</td>
</tr>
 <tr class="dept_name">
  <td>GRAND TOTAL (ANNA UNIV.)</td>
  <td>3600</td>
	<td>1717</td>
	<td>47.69</td>
</tr>
</table>
<br>
<br>
		