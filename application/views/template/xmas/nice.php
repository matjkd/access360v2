<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>You've been Nice</title>
		<style type="text/css" media="screen">
		html, body { height:100%; background-color: #000000;}
		body { margin:0; padding:0; overflow:hidden;
		background: url("<?=base_url()?>images/xmas/stripes.jpg"); }
		#flashContent { width:100%; height:100%; }
		</style>
	</head>
	<body>
		<div id="flashContent">
			<object type="application/x-shockwave-flash" data="<?=base_url()?>images/swf/nice.swf" width="100%" height="500px" id="redtree8" style="float: none; vertical-align:middle">
				<param name="movie" value="<?=base_url()?>images/swf/nice.swf" />
				<param name="quality" value="high" />
				<param name="wmode" value="transparent">
				<param name="play" value="true" />
				<param name="loop" value="true" />
				
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<a href="http://www.adobe.com/go/getflash">
					<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
				</a>
			</object>
		</div>
		
		
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
					
					var audio1 = document.createElement("audio");
						audio1.src = "https://s3-eu-west-1.amazonaws.com/access360redstudio/SleighBells.mp3";

						audio1.play();
			
					var vol = 1;
					var times = 44;
					var loop = setInterval(repeat, 4782);

					function repeat() {
						times--;
						if (vol === 0) {
							clearInterval(loop);
							vol = 0;
							audio.volume = 0; 
						}
						
						

						var audio = document.createElement("audio");
						audio.src = "https://s3-eu-west-1.amazonaws.com/access360redstudio/SleighBells.mp3";

						audio.play();
						
						audio.volume = vol - 0.1;
						vol = vol - 0.1;

					}

					

				

			

			
			});
		</script>
	</body>
</html>
