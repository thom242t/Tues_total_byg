<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!---->
	<!-- Site Metas -->
	<title>Tues Total Byg Aps</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php the_field ('logo1'); ?>">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>css/responsive.css">

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">



	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="index.php"><img width="90" height="auto" src="<?php the_field ('logo1'); ?>"
						alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
					aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
					<ul class="navbar-nav">
						<li><a class="nav-link active" href="#home">Forside</a></li>
						<li><a class="nav-link" href="#about">Om os</a></li>
						<li><a class="nav-link" href="#story">Vi tilbyder</a></li>
						<li><a class="nav-link" href="#gallery">Galleri</a></li>
						<li><a class="nav-link" href="#contact">Kontakt</a></li>
					</ul>
				</div>
			</div>
		</nav>
    </header>
    
    	<!-- Start Banner -->
                                                (<?php the_field ('gallery_img_1'); ?>);
	<div class="home-slider">
		<img class="responsive" src="<?php the_field ('cover_img1'); ?>" alt="">
		<img class="mobile" src="<?php echo get_template_directory_uri() ?>/images/moblie_cover.png" alt="">

	</div>

	</div>
