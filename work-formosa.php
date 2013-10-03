<!DOCTYPE html>
<html>
<head>
	<title>Lemonjuice</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body id="work" class="formosa">
	
	<div class="wrapper">
		<?php include 'include/header.php'; ?>

	<div class="section feature-image-section">
		<img class="feature-image" src="img/work-images/full/formosa/FR-1.jpg">
	</div>

	<div class="section thumbnail-nav">
		<a href="img/work-images/full/formosa/FR-1.jpg"><img class="thumb" src="img/work-images/thumbs/formosa/thumb1.jpg"></a>
		<a href="img/work-images/full/formosa/FR-2.jpg"><img class="thumb" src="img/work-images/thumbs/formosa/thumb2.jpg"></a>
	</div>

	<div class="section work-content">
		<div class="work-text">
			<h2 class="black">Formosa Restaurant</h2>
			<h3>Identity | Branding | Print</h3>
			<p>With the aim of sprucing up a fresh, new identity for Formosa, 
a traditional family-owned business, a mix of contemporary and hand-stencilled design is applied to the menu, collateral pieces, and print advertising without discounting its authentic oriental 
traditions in both food and atmosphere.</p>
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