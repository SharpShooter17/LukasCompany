<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" itemprop="keywords" content="">
  <meta name="author" content="Bartosz Ujazdowski" />

	<meta content="/brand_image" itemprop="image">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../assets/materialize/css/materialize.min.css"  media="screen, projection"/>
		<link type="text/css" rel="stylesheet" href="../../assets/css/style.css"/>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title><?php print $title; ?></title>
   	<?= $_scripts ?>
  	<?= $_styles ?>
	<script type="text/javascript">
   		<?php if (isset($script)) { print $script;} ?>
	</script>
  	<style type="text/css">
   		<?php if (isset($style)) { print $style;} ?>
	</style>
</head>
<body>

 	<?php print $menu ?>
	<div itemprop="mainContentOfPage">
	<?php print $content ?>
	</div>
  <?php print $footer ?>

	<script type="text/javascript" src="../../assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../../assets/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="../../assets/js/scripts.js"></script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgDGkJnoSOqLUgYkXggMSjIngzQbtO0mc&callback=initMap">
  </script>
</body>
</html>
