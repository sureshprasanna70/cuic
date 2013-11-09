<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>
	CUIC|COMPANY
</title>
</head>
<body>
<?php include('menu.php');


$list=array("Goldman Sachs","Microsoft India","Morgan Stanley",
"Amazon","Broadcom India","Chronus Software","Radio Mobile Access",
"Paypal India","Google India Private Limited","Maruti Suzuki India Limited ","Nvidia Graphics Private Limited",
"SuccessFactors","Qualcomm India ","Akamai Technologies","Infibeam.com",
"Works Applications","Caterpillar India Private Limited",
"CISCO Systems","Honda Motorcycle" ,
"Whirlpool of India","Charge Bee",
"ACC Limited, Mumbai","W.S. Atkins (India) Pvt. Ltd., Bangalore",
"Symantec Software ","Ashok Leyland Limited, Chennai",
"Commvault Systems","Delphi Automotive Systems",
"Coromandel International ","Verizon Data Services India Private Limited ",
"Mu Sigma Business Solutions Pvt. Ltd.","Athenahealth Technology Private Limited",
"Rotork Controls India Pvt Ltd","Zoho Corporation Private Limited",
"Mindtree Limited","IBM India Private Limited",
"Latent View Analytics Pvt. Ltd.","Safran Engg. Services India Pvt. Ltd",
"Textron India Private Limited","SMSC"
,"Sap Labs India","DHAN Foundation"
,"Michelin India ","Madura Garments, Bangalore"
,"Accenture Services Pvt. Ltd","WhizRx Inc., Chennai"
,"Thermax Limited, Pune","Bally Technologies India Private Limited, Chennai"
,"iNautix Technologies (I) Pvt. Ltd., Chennai","Century Metal Recycling Private Limited"
,"McKinsey Knowledge Centre (I) Pvt. Ltd.,","General Motors Technical India Pvt Ltd"
,"Aricent Group, Chennai","Saggezza India Pvt. Ltd"
,"Hyundai Motor India, Chennai","Altair Engineering India Pvt. Ltd"
,"Wipro Technologies","Triad Software Pvt. Ltd., Chennai"
,"EmbedUR Sytems India Pvt Ltd" ,"Softeon India Private Limited, Chennai"
,"Ameex Technologies (MBA)","V A Tech Wabag Limited, Chennai"
,"NMSWorks Software Private Limited","Accolite Software India Private Limited, Bangalore"
,"BrahMos Aerospace Pvt. Ltd., New Delhi","Texas Instruments India Pvt. Ltd., Bangalore "
,"Electronic Arts, Hyderabad","IVY Comptech Private Limited, Hyderabad"
,"Renault Nissan Technology & Business Centre India Pvt. Ltd.","Reliance Industries Limited, Mumbai"
,"EPIC, Wisconsin, USA","Ericsson India Global Services Pvt. Ltd., Chennai"
,"TCS (MBA)","Hewlett Packard, Bangalore"
,"Larsen & Toubro Limited, Mumbai","Siemens Technology & Services Pvt Ltd, Bangalore"
,"Hospira Healthcare India Private Limited, Chennai","Exeter Group, Bangalore "
,"Valued Epistemics Pvt. Ltd.","Sesa Goa Limited"
,"Royal Enfield, Thiruvottiyur","TESCO HSC, Bangalore"
,"iGATE Global Solutions","Trimble Information Technologies India Private Limited"
,"Volvo India Private Limited, Bangalore","Ford Private India Limited, Chengelpet"
,"CSC India Pvt Ltd, Noida","Bharti Airtel Limited, Gurgaon"
,"Orbees Medical, Hyderabad","L&T ECC","Rane Group, Chennai","Ameex Technologies","Bewo Technologies Private Limited, Chennai","Exide Industries Limited, Kolkata"
,"InfoTrellis India Pvt. Ltd., Chennai","Carborundum Universal Limited, Chennai"
,"Mahindra & Mahindra","Foster Wheeler India Private Limited"
,"Polaris Financial Technology, Chennai","JGC Gulf International"
,"Isgec Heavy Engineering Limited, Noida","Cypress Semiconductor Technology India Pvt. Ltd., Bangalore"
,"Asiana Hotels","Naukri, Chennai"
,"Cognizant Technology Solutions, Chennai","ACC Concrete, Thane"
,"Bharat Petroleum Corporation Limited","Fenner India Limited, Chennai"
,"ICICI Securities (MBA)","Universal Print Systems Limited "
,"TATA Consulting Engineers Limited","Fuji Xerox Co. Ltd., Japan"
,"Afcons Infrastructures Ltd., Mumbai","Dolcera ITES(p) Limited"
,"Saipem India Projects Limited","Enzen Global Solutions Pvt. Ltd., Bangalore"
,"Technip India Limited","Titan Industries"
,"PerkinElmer (India) Pvt. Ltd.","Stup Consultants, Bangalore"
,"Infotech Enterprises Limited, Hyderabad","Daimler India Commercial Vehicles Pvt. Ltd."
,"ITD Cementation India Limited","FIAT India Automobiles Limited, Pune"
,"Temenos India Pvt Ltd., Chennai","Jaro (MBA)"
,"Valued Epistemics Pvt. Ltd.","Eveready Industries India Ltd, Kolkata "
,"Samsung India Software Operations, Bangalore","One Globe Systems (MBA)"
,"J.K. Tyres, Chennai","Chemfab Alkals Limited"
,"SRP Synthetic Rubber Products Pvt. Ltd.","Aditya Birla Insurance Brokers Ltd (MBA)"
,"Consul Consolidated Pvt. Ltd. (MBA)","Vedanta Resources Plc. (Sterlite Copper)"
,"Launchpad LLC (MBA)","Ramco Systems"
,"Sundaram Direct (MBA)","Skava Systems Pvt. Ltd"
,"Dalmia Cements Limited","India Metamation Software Pvt. Ltd., Chennai"
,"Hindustan Unilever","CSC India Pvt Ltd, Noida (MBA)"
,"Apollo Tyres","Extreme Networks Pvt. Ltd., Chennai"
,"Jay Jay Mills (India) Pvt. Ltd.","Zoho Corporation Private Limited, Chennai",
"Pinc Group Refractory","BNP Paribas, Chennai","BlackNGreen, Chennai","Kavin Engineering, Coimbatore",
"Japan Polymer Analytical And Research Laboratory (I) Pvt. Ltd.","Ucal Polymer",
"Kwality Milk","Caresoft Global Private Limited, Chennai"
,"Silver Atena Electronics System, Bangalore","Roverco, Chennai"
,"UltraTech Cement Limited, Ariyalur","Medi Assist India (MBA)"
,"Lakshmi Machine Works Ltd.","Jayashree Polymers Pvt Ltd",
"Trident Group","Yamaha Motors");
?>

<div class="container">
<table class="lis table-striped" align="center" border="2px">
  <tr>
  	<td class="ttitle" colspan="4">
  	<b>List of Companies Visited for Campus Recruitment for the year 2012-13</b></td>
  </tr>
        <tr class="ttitle	">
          <td><strong>Sl.No</strong></td>
          <td><strong>Name of the Company </strong></td>
          
        </tr>
        <?php
        sort($list);
        for ($i=0;$i<count($list);$i++) {
        ?>
        <tr>
          <td class="tcontent"><?php print($i)+1;?>.</td>
          <td class="tcontent"><?php print($list[$i]);?></td>
          
        </tr>
<?php }?>
</table>
	
	<br>
  <br>
