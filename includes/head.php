
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<?php
	// pathinfo give info about given file and returns it into an associative array:
$info = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$info = ucwords(str_replace('_', ' ', $info));

if($info === 'Index' || $info === '/'){
	$info = 'Terapie Bowen';
}
?>

<title><?php echo $info; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/bootstrap/bootstrap-min.css">
	<link rel="stylesheet" href="./assets/css/owl.carousel-min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="./style.css" type="text/css">
	<?php if($info == 'Despre'){ ?>
	<link rel="stylesheet" href="./despre.css">
	<?php } ?>
	<?php if($info == 'Galerie'){ ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
	<link rel="stylesheet" href="./galerie.css">
	<?php } ?>
	<?php if($info == 'Servicii' || $info == 'Reflexoterapie' || $info == 'Drenaj' || $info == 'Masaj' || $info == 'Terapia Bowen'|| $info == 'Servicii V2'){ ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>	
	<link rel="stylesheet" href="./servicii.css">
	<link rel="stylesheet" href="./servicii_v2.css">
	<?php } ?>
	<?php if($info == 'Contact'){ ?>
	<link rel="stylesheet" href="./contact.css">
	<?php } ?>
	<link rel="stylesheet" href="servicii_v2.css">
	<link rel="stylesheet" href="responsive.css">
	<link href="assets/fontawesome/all.min.css" rel="stylesheet">



	<script src="assets/js/jquery.js"></script>
	<?php if($info == 'Galerie' || $info == 'Servicii'){ ?>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<?php } ?>
	<script src="assets/js/owl-carousel/owl.carousel-min.js" ></script>
	<script src="assets/js/bootstrap/bootstrap-min.js"></script>
	<script src="assets/js/main.js" defer></script>
	<?php if($info == 'Contact'){ ?>
	<script src="assets/js/validate.js" defer></script>
	<?php } ?>
	
</head>
<body>