<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$page = 'home';

if (!empty($_GET["p"])) {
	$page = $_GET["p"];
}

$page = strtolower($page);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="http://altmarkventures.com/favicon.ico">

	<title>Altmark Ventures | Focused exclusively on Blockchain Tech, Algorithmic Trading & More</title>

	<!-- Bootstrap core CSS -->
	<link href="./static/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="./static/css/cover.css" rel="stylesheet">

	<style type="text/css">

		html {
			height: 100%;
			box-sizing: border-box;
		}

		*,
		*:before,
		*:after {
			box-sizing: inherit;
		}

		body {
			position: relative;
			font-family: 'Avenir Next';
			margin: 0;
			min-height: 100%;
			padding-bottom: 50px;
			background: black; /* For browsers that do not support gradients */
			background: -webkit-linear-gradient(black, #232323); /* For Safari 5.1 to 6.0 */
			background: -o-linear-gradient(black, #232323); /* For Opera 11.1 to 12.0 */
			background: -moz-linear-gradient(black, #232323); /* For Firefox 3.6 to 15 */
			background: linear-gradient(black, #232323); /* Standard syntax */
			background-repeat: -webkit-no-repeat;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-attachment: -webkit-fixed;
		}

		/* navbar */

		div.navbar {
			width: 100%;
			text-align: center;
		}

		div.navbar > ul {
			padding: 0;
		}

		div.navbar > ul > li {
			display: inline-block;
		}

		div.navbar > ul > li > a {
			color: white;
			text-transform: uppercase;
			font-weight: 400;
			font-size: 0.8rem;
			opacity: 0.7;
			letter-spacing: 0.2rem;
		}

		div.navbar > ul > li > a.selected {
			font-weight: 600;
			opacity: 1.0;
		}

		div.navbar > ul > li > a:hover {
			color: #7AB0FD;
		}

		/* content */

		div.content {
			width: 90%;
			max-width: 1200px;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			color: white;
			/*margin-bottom: 145px;*/
			margin-top: 3rem;

		}

		div.center-vertical {
			width: 90%;
			max-width: 1200px;
			color: white;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
		}

		div.blurb {
			max-width: 450px;
			width: 90%;
			padding-top: 3rem;
			margin-left: auto;
			margin-right: auto;
		}



		a.contact-us, a.contact-us:visited, a.contact-us:active {
			color: white;
			text-decoration: none;
			border-bottom: 1px white dotted;
		}

		a.contact-us:hover {
			color: white;
		}

		/* footer */
		
		div.footer {
			background-color: #999A99;
			border-top: 5px solid #3E8BD7;
			position: absolute;
			right: 0;
			bottom: 0;
			left: 0;
			padding: 1rem;
			text-align: center;
			color: white;
		}

		@media only screen and (max-width: 1150px) {
			div.navbar-footer > ul > li {
				display: inherit;
			}

			div.footer {
				background-color: #999A99;
				border-top: 5px solid #3E8BD7;
				position: inherit;
				padding: 1rem;
				text-align: center;
				color: white;
			}	

			div.content {
				margin-bottom: 100px;
			}

		}
		

		p.copyrights {
			font-size: 0.8rem;
		}

		h1.page-title {
			letter-spacing: 10px;
			font-size: 1.68rem;
			margin-bottom: 4rem;
			font-weight: 700;
			line-height: 3.5rem;
			text-align: center;
		}

		img.hero {
			width: 100%;
			max-width: 500px;
			margin-top: 3rem;
		}

		div.our-focus {
			width: 100%;
			max-width: 800px;
			margin-right: auto;
			margin-left: auto;
			font-size: 0.8rem;
			opacity: 0.9;
			letter-spacing: 0.13rem;
		}


		/* FORM */

		form.form {
			width: 100%;
			max-width: 1000px;
			margin-left: auto;
			margin-right: auto;
			padding: 3rem 0;
		} 

		div.form-col {
			text-align: left !important;
		}

		label.form-label {
			text-align: left !important;
			width: 100%;
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 0.8rem;
		}

		.form-control, .form-control:focus {
			background-color: #4C4C4C;
			color: white;
			margin-bottom: 1rem;
		}

		.form-control::-webkit-input-placeholder { /* Chrome/Opera/Safari */
			color: rgba(255,255,255,0.45);
		}
		.form-control::-moz-placeholder { /* Firefox 19+ */
			color: rgba(255,255,255,0.45);
		}
		.form-control:-ms-input-placeholder { /* IE 10+ */
			color: rgba(255,255,255,0.45);
		}
		.form-control:-moz-placeholder { /* Firefox 18- */
			color: rgba(255,255,255,0.45);
		}

		button.btn-default {
			width: 100%;
			max-width: 300px; 
			margin-left: auto; 
			margin-right: auto;
			border-radius: 100px;
			height: 54px;
			background-color: rgba(0,0,0,0);
			border: 2px white solid;
			color: white;
			text-transform: uppercase;
			font-size: 1.1rem;
			letter-spacing: 3px;
			font-weight: 300;
			margin-top: 3rem;
		}

		.uploadcare--widget__button_type_open {
			background-color: #4C4C4C;
			width: 100% !important;
		}
		
		.uploadcare--widget {
			width: 100% !important;
		}

	</style>

</head>

<body>

	<div class="">
		<br>
		<div class="navbar"> 
			<ul>
				<li><a class="nav-link <?php echo ($page == 'home') ? 'selected' : '' ?>" href="/">Home</a></li>
				<li><a class="nav-link <?php echo ($page == 'gotanidea') ? 'selected' : '' ?>" href="/GotAnIdea">Got an Idea?</a></li>
				<li><a class="nav-link <?php echo ($page == 'ourfocus') ? 'selected' : '' ?>" href="/OurFocus">Our Focus</a></li>
				<li><a class="nav-link <?php echo ($page == 'contactus') ? 'selected' : '' ?>" href="/ContactUs">Contact Us</a></li>
			</ul>
		</div>

		

		<?php 
			require_once($page . ".php");
		?>

		

	</div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./static/js/jquery-3.1.1.min.js"></script>
	<script src="./static/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="./static/js/ie10-viewport-bug-workaround.js"></script>

	<script type="text/javascript">


		
		$(document).ready(function() {

		});




	</script>

</body>

</html>