<!DOCTYPE html>
<html>
<head>
	<title>Lemonjuice</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body id="home">
	
	<div class="wrapper">
		<?php include 'include/header.php'; ?>

	<div class="section feature-image-section">
		<img class="feature-image" src="img/work-images/full/green-island/GI-1.jpg">
	</div>

	<div class="section thumbnail-nav">
		<img class="thumb" src="img/work-images/thumbs/green-island/thumb1.jpg">
		<img class="thumb" src="img/work-images/thumbs/green-island/thumb2.jpg">
	</div>

	<div class="section work-content">
		<div class="work-text">
			<h2 class="black">The Green Island</h2>
			<h3>Identity | Point-of-Purchase | Branding</h3>
			<p>With the introduction of the first "all eco-friendly" flooring display aptly named <i>The Green Island</i></p>
		</div>

		<div class="work-titles">
			<?php include 'include/work-titles.php'; ?>
		</div>
	</div>

	</div><!-- /wrapper -->

<!-- <script src="js/jquery-1.6.2.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/script.js"></script>

<script>
	lemonJuice.initialize();
	lemonJuice.autoScroll('interactive');
	lemonJuice.menuHighlight();

	// This is where you input the locations of the left and right "WORK" images
	var leftImages = [
			'blue.jpg',
			'red.jpg',
			'lemon.jpg'
		];
	var rightImages = [
			'leaf.jpg',
			'silver.jpg',
			'squeeze.jpg'
		];

	lemonJuice.fade(leftImages,rightImages);
	</script>
</body>
</html>