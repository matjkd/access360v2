<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>You've been BAD</title>
		<link href="//fonts.googleapis.com/css?family=Holtwood One SC&subset=latin" rel="stylesheet" type="text/css">
<style>
* {
 font-family: 'Holtwood One SC', sans-serif;
}
</style>
		<style>
			html {
				height: 100%;
			}
			body {
				background: #000000;
				height: 100%;
				padding: 0;
				margin: 0;
			}
			#main {
				padding-top: 180px;
				color: #fff;
				
				font-size: 36px;
				text-align: center;
				background: #BD362F;
				width: 100%;
				height: 100%;
			}
		</style>
	</head>

	<body>
		<div id="main">
			Mmmm..  Oh Dear...
			<br/>
			well have a good Christmas anyway
		</div>

		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {

					
			

					var times = 44;
					var loop = setInterval(repeat, 1321);

					function repeat() {
						times--;
						if (times === 0) {
							clearInterval(loop);
						}

						var audio = document.createElement("audio");
						audio.src = "https://s3-eu-west-1.amazonaws.com/access360redstudio/klaxon.mp3";

						audio.play();

					}

					repeat();

				

			

			(function pulse() {
				$('#main').delay(200).fadeOut(200).delay(50).fadeIn(200, pulse);
			})();
			});
		</script>
	</body>
</html>