<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });
</script>
<head>
  <title>CUIC|GALLERY</title>
  </head>

<body>
	<?php include('menu.php');?>
	
    <div class="container">
      <?for ($i=1;$i<=20;$i++){?>
      <a class="fancybox" href="img/<?=$i?>.jpg">
      <img src="img/<?=$i?>.jpg" width="140"/>
    </a>
    <?}?>
</div>
</body>
</html>