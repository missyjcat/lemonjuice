<!DOCTYPE html>
<html>
<head>
	<title>Lemonjuice</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body id="home">
	<div class="wrapper">

		<?php include 'include/header.php'; ?>

		<div class="section work-section overlay-trigger">
			<div class="size-50 work-section-left">
				<span class="overlay">View Work</span>
				<span class="next-img"></span>
				<img src="img/work-top/swimmer.jpg" />
			</div>
			<div class="size-50 work-section-right">
				<span class="overlay">View Work</span>
				<span class="next-img"></span>
				<img src="img/work-top/leaf.jpg" />
			</div>
		</div><!-- /section -->

		<div class="section-title clear-both">
			<h2>Freshly Squeezed</h2>
		</div>

		<div class="section freshly-squeezed-section overlay-trigger">
			<div class="first thumb">
				<span class="overlay">The<br>North Face</span>
				<img src="img/freshly-squeezed/northface.jpg" />
			</div>
			<div class="thumb">
				<span class="overlay">Artworks<br>For Change</span>
				<img src="img/freshly-squeezed/awfc.jpg" />
			</div>
			<div class="last thumb">
				<span class="overlay">Sporti<br>Swim Caps</span>
				<img src="img/freshly-squeezed/swimcaps.jpg" />
			</div>
		</div>

		<div class="section-title clear-both">
			<h2>Interactive</h2>
		</div>

		<div class="section interactive-section overlay-trigger">

			<div class="row">
				<div class="first thumb">
					<span class="overlay">Fall<br>Surf</span>
					<img src="img/interactive/fall-surf.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">Nike<br>Swim</span>
					<img src="img/interactive/nike-swim.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">Sporti<br>Lifeguard</span>
					<img src="img/interactive/sporti-lifeguard.jpg" />
				</div>
				<div class="last thumb">
					<span class="overlay">Give a<br>Giftcard</span>
					<img src="img/interactive/gift-card.jpg" />
				</div>
			</div><!-- /row -->

			<div class="row">
				<div class="first thumb">
					<span class="overlay">Red, White<br>&amp; New</span>
					<img src="img/interactive/red-white-new.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">Billabong<br>Intro</span>
					<img src="img/interactive/billabong.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">MP3<br>Players</span>
					<img src="img/interactive/mp3.jpg" />
				</div>
				<div class="last thumb">
					<span class="overlay">Tri<br>New</span>
					<img src="img/interactive/tri-new.jpg" />
				</div>
			</div><!-- /row -->

			<div class="row">
				<div class="first thumb">
					<span class="overlay">Electronic<br>Experience</span>
					<img src="img/interactive/electronics.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">Fall<br>Surf</span>
					<img src="img/interactive/raise-awareness.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">Raise<br>Awareness</span>
					<img src="img/interactive/looks-summer.jpg" />
				</div>
				<div class="last thumb">
					<span class="overlay">Spring<br>Surf</span>
					<img src="img/interactive/spring-surf.jpg" />
				</div>
			</div><!-- /row -->

			<div class="row">
				<div class="first thumb">
					<span class="overlay">Love is in<br>the water</span>
					<img src="img/interactive/inthe-water.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">Kids&lsquo;<br>Swim</span>
					<img src="img/interactive/kids.jpg" />
				</div>
				<div class="thumb">
					<span class="overlay">Jantzen<br>Holiday</span>
					<img src="img/interactive/jantzen-holiday.jpg" />
				</div>
				<div class="last thumb">
					<span class="overlay">Sporti<br>New Suits</span>
					<img src="img/interactive/sporti-new.jpg" />
				</div>
			</div><!-- /row -->

		</div><!-- /section -->

		<div class="section-title clear-both">
			<h2>More News</h2>
		</div>
		<div class="spacer-40 section more-news-section">
		</div>
		<div class="clear-both spacer-40">
		</div>

	</div><!-- /wrapper -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/script.js"></script>
<script>
	// This is where you input the locations of the left and right "WORK" images
	lemonJuice.leftImages = [
			'swimmer.jpg',
			'blue.jpg',
			'lemon.jpg',
			'red.jpg'
		]
	lemonJuice.rightImages = [
			'leaf.jpg',
			'silver.jpg',
			'squeeze.jpg'
		]
	</script>
</body>
</html>