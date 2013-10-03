<!DOCTYPE html>
<html>
<head>
	<title>Lemonjuice</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body id="work" class="green-island">
	
	<div class="wrapper">
		<?php include 'include/header.php'; ?>

	<div class="section feature-image-section">
		<img class="feature-image" src="img/work-images/full/green-island/GI-1.jpg">
	</div>

	<div class="section thumbnail-nav">
		<a href="img/work-images/full/green-island/GI-1.jpg"><img class="thumb" src="img/work-images/thumbs/green-island/thumb1.jpg"></a>
		<a href="img/work-images/full/green-island/GI-2.jpg"><img class="thumb" src="img/work-images/thumbs/green-island/thumb2.jpg"></a>
	</div>

	<div class="section work-content">
		<div class="work-text">
			<h2 class="black">The Green Island</h2>
			<h3>Identity | Point-of-Purchase | Branding</h3>
			<p>With the introduction of the first "all-eco-friendly" flooring display aptly named <i>The Green Island</i> by USFloors, the ecological story behind its diverse environmentally responsible product lines is cohesively extended and narrated through a composition of rich botanical scenery, beautiful island muses, and organic graphic elements.</p>
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