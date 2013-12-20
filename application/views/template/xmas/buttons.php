<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>Access360 Christmas Card Generator</title>
		<link href='http://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
		<style>
			html {
				height: 100%;
			}
			body {
				background: url("<?=base_url()?>images/xmas/yellowstripes.jpg");
				height: 100%;
				padding: 0;
				margin: 0;
			}
			#main {
				position:relative;
				padding: 0px;
				display: block;
				color: #fff;
				font-family: 'Sigmar One', cursive;
				font-size: 36px;
				text-align: center;
				background: url("<?=base_url() ?>images/xmas/buttonbox.jpg");
				width: 744px;
				height: 472px;
				margin: 20px auto;
				-moz-box-shadow: 10px 10px 75px #000000;
				-webkit-box-shadow: 10px 10px 75px #000000;
				box-shadow: 10px 10px 75px #000000;
			}
			.bigbutton {
				position: absolute;
				background: #953B39;
				width: 160px;
				height: 160px;
				opacity:0;
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;
				border-radius: 50%;
				top:209px;
			}
			.naughty {
				left: 111px;
			}
			.naughty:hover {
				opacity:0.6;
				-moz-box-shadow:inset 10px 10px 75px #000000;
-webkit-box-shadow:inset 10px 10px 75px #000000;
box-shadow:inset 10px 10px 75px #000000;
			}
			.nice {
				left: 474px;
			}
			.nice:hover {
				opacity:0.6;
				-moz-box-shadow:inset 10px 10px 75px #000000;
-webkit-box-shadow:inset 10px 10px 75px #000000;
box-shadow:inset 10px 10px 75px #000000;
			}
		</style>
	</head>

	<body>
		<div id="main">
			<a href="<?=base_url()?>welcome/naughty"><div class="naughty bigbutton"></div></a>

			<a href="<?=base_url()?>welcome/nice"><div class="nice bigbutton"></div></a>
		</div>

		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {

			});
		</script>
	</body>
</html>