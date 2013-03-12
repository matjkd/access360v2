<style type="text/css" media="screen, projection">
	#spaceport {
		background: none;
		margin: 1.5em 0px;
		overflow: hidden;
		position: relative;
		height: 400px;
	}
	.parallax-layer {
		position: absolute;
	}

	.planet {

	}
	.sun {
		-moz-box-shadow: 1px 1px 43px rgb(248, 161, 68);
		-webkit-box-shadow: 1px 1px 43px rgb(248, 161, 68);
		box-shadow: 1px 1px 43px rgb(248, 161, 68);
		-moz-border-radius: 75px;
		-webkit-border-radius: 75px;
		border-radius: 75px;
	}
	.sun img {
		position: absolute;
	}

	.sunglow {
		-moz-box-shadow: 1px 1px 143px rgb(248, 161, 68);
		-webkit-box-shadow: 1px 1px 143px rgb(248, 161, 68);
		box-shadow: 1px 1px 143px rgb(248, 161, 68);
		-moz-border-radius: 75px;
		-webkit-border-radius: 75px;
		border-radius: 75px;
	}
	.target {
		opacity:0.3;
		cursor: crosshair;
	}
	.target_text {
		opacity:0.3;
	}
</style>

<div id="spaceport">
	<!-- Seven image layers, each layer slightly bigger than the one behind, making
	'closer' layers move faster. -->
	<div class="parallax-layer"  style="width:94%; height:94%;">
		<div class="planet"style="position:absolute; left:700px; top:100px;  width:50px; height: 50px;"><img src="<?=base_url() ?>images/space/planet01.png"/>
		</div>
	</div>

	<div class="parallax-layer"  style="width:99%; height:99%;">
		<div class="planet" style="position:absolute; top:100px; left:150px;  width:120px; height: 80px;"><img src="<?=base_url() ?>images/space/saturn.png"/>
		</div>
	</div>
	<div class="parallax-layer"  style="width:100%; height:100%;">
		<div class="sun" style="position:absolute; top:100px; left:400px;  width:150px; height: 150px;">
			<img src="<?=base_url() ?>images/space/sun.png"/>
			<img class="sunglow" src="<?=base_url() ?>images/space/sun2.png"/>
			<img src="<?=base_url() ?>images/space/sunOverlay.png"/>
		</div>
	</div>

	<div class="parallax-layer"  style="width:102%; height:102%;">
		<div class="planet"style="position:absolute; left:500px; top:190px;  width:70px; height: 70px;"><img src="<?=base_url() ?>images/space/planet01.png"/>
		</div>
	</div>

	<div class="parallax-layer"  style="width:103%; height:103%;">
		<div class="planet" style="position:absolute; left:250px; top:250px;  width:60px; height: 60px;"><img src="<?=base_url() ?>images/space/planet02.png"/>
		</div>
	</div>

	<div class="parallax-layer"  style="width:109%; height:109%;">
		<div class="planet" style="position:absolute; left:630px; top:190px;  width:150px; height: 150px;">
			<img style="position:absolute" src="<?=base_url() ?>images/space/earth.png"/>
			<img class="target" style="position:absolute" src="<?=base_url() ?>images/space/earthoutline.png"/>
			<div class="target_text" style="color:#fff; position:absolute; top:150px; left:-30px;">
				EXHIBITIONS
			</div>
		</div>
	</div>

	<!-- Rounded corners -->

</div>