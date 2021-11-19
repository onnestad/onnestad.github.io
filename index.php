<!doctype html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="jc/style.css" rel="stylesheet">
	<link href="jc/cssSvgImages.css" rel="stylesheet">
	<link href="jc/icomoon/style.css" rel="stylesheet">
	<title>! Flexbox Grid sida </title>
</head>
<body>
  <header>
    <h1 class="gridHead">Onnestad IT-teknik - Start</h1>
  </header>
	<section>
		<div class="page">
			<span class="logo">
				<span class="big icon-apacheflink"> </span>
			</span>
      <span class="drop">
				<span class="big icon-apacheflink"> </span>

				<div id="dropMenu1" class="dropMenu">
					<button class="dropButton">Dropdown</button>
					<span class="dropCnt">
						<a href="index.php">Home </a>
						<a href="about.php">Om </a>
						<a href="contact.php">Kontakt </a>
					</span>
				</div>
      </span>
			<span class="top">
				<?php include "menu.php";	?>
      </span>
			<span class="left"> left </span>
			<span class="main"> main </span>
			<footer class="footer"> footer </footer>
		</div>
	</section>

	<?php include "footer.php"; 	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
</body>

</html>
