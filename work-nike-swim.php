<!DOCTYPE html>
<html>
<head>
	<title>Lemonjuice</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body id="work" class="nike-swim">
	
	<div class="wrapper">
		<?php include 'include/header.php'; ?>

	<div class="section feature-image-section">
		<img class="feature-image" src="img/work-images/full/nike-swim/nike1.jpg">
	</div>

	<div class="section thumbnail-nav">
		<a href="img/work-images/full/nike-swim/nike1.jpg"><img class="thumb" src="img/work-images/thumbs/nike-swim/thumb1.jpg"></a>
		<a href="img/work-images/full/nike-swim/nike2.jpg"><img class="thumb" src="img/work-images/thumbs/nike-swim/thumb2.jpg"></a>
		<a href="img/work-images/full/nike-swim/nike3.jpg"><img class="thumb" src="img/work-images/thumbs/nike-swim/thumb3.jpg"></a>
		<a href="img/work-images/full/nike-swim/nike4.jpg"><img class="thumb" src="img/work-images/thumbs/nike-swim/thumb4.jpg"></a>
	</div>

	<div class="section work-content">
		<div class="work-text">
			<h2 class="black">Nike Swim</h2>
			<h3>Imaging | Email Campaign</h3>
			<p>Iconic brands serve iconic products. In the same manner, 
an iconic approach to designing an email campaign for 
Nike Swim's 2011 collection is a definite exaction. Drawing full 
inspiration directly from their new line of swim apparel, tech suits, and gear, the technology, utility, and sharp fabric design is given visual prominence on the catalog.</p>
		</div>

		<div class="work-titles">
			<?php include 'include/work-titles.php'; ?>
		</div>
	</div>

	</div><!-- /wrapper -->
	<div class="spacer-40"></div>

<!-- <script src="js/jquery-1.6.2.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/script.js"></script>

<script>
	lemonJuice.initialize();
	lemonJuice.workDetail();
	</script>
</body>
</html>