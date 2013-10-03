<!DOCTYPE html>
<html>
<head>
	<title>Lemonjuice</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body id="work" class="lowes">
	
	<div class="wrapper">
		<?php include 'include/header.php'; ?>

	<div class="section feature-image-section">
		<img class="feature-image" src="img/work-images/full/lowes/LOWES-1.jpg">
	</div>

	<div class="section thumbnail-nav">
		<a href="img/work-images/full/lowes/LOWES-1.jpg"><img class="thumb" src="img/work-images/thumbs/lowes/thumb1.jpg"></a>
		<a href="img/work-images/full/lowes/LOWES-2.jpg"><img class="thumb" src="img/work-images/thumbs/lowes/thumb2.jpg"></a>
	</div>

	<div class="section work-content">
		<div class="work-text">
			<h2 class="black">LOWE'S IN-STORE SIGNAGE</h2>
			<h3>Point-of-Purchase | Print</h3>
			<p>Improving home improvement - as well as retail experience - 
with in-store signage, point-of-purchase, and merchandising system created for the hardwood flooring department at Lowe's stores across the nation and Canada for their in-stock and special order inventories.</p>
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