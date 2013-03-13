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
		cursor: crosshair;
		z-index: 2;
	}
	.sun {
		-moz-box-shadow: 1px 1px 43px rgb(248, 161, 68);
		-webkit-box-shadow: 1px 1px 43px rgb(248, 161, 68);
		box-shadow: 1px 1px 43px rgb(248, 161, 68);
		-moz-border-radius: 75px;
		-webkit-border-radius: 75px;
		border-radius: 75px;
		z-index: 2;
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
		position: absolute;
		opacity: 0.1;
	}
	.target_text {
		position: absolute;
		opacity: 0.7;
		color: #fff;
	}
</style>

<div id="spaceport">
	<!-- Seven image layers, each layer slightly bigger than the one behind, making
	'closer' layers move faster. -->
	<div class="parallax-layer"  style="width:94%; height:94%;">
		<div class="planet"style="position:absolute; left:550px; top:70px;  width:50px; height: 50px;"><img src="<?=base_url() ?>images/space/planet01.png"/>
		</div>
	</div>

	<div class="parallax-layer"  style="width:98%; height:98%;">
		<div class="planet" style="position:absolute; top:40px; left:190px;  width:180px; height:91px;">
<img style="position:absolute"  src="<?=base_url() ?>images/space/saturn.png"/>
			<img class="target" src="<?=base_url() ?>images/space/saturnOverlay.png"/>
			<div class="target_text" style=" top:-20px; left:-30px;">
				POINT OF SALE
			</div>
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
		<div class="planet" style="position:absolute; left:90px; top:130px;  width:110px; height: 110px;">
			<img style="position:absolute"  src="<?=base_url() ?>images/space/planet03.png"/>
			<img class="target" src="<?=base_url() ?>images/space/planet03outline.png"/>
			<div class="target_text" style=" top:-20px; left:-30px;">
				DIGITAL SIGNAGE
			</div>
		</div>
	</div>

	<div class="parallax-layer"  style="width:102%; height:102%;">
		<div class="planet"style="position:absolute; left:750px; top:130px;  width:100px; height: 100px;">

			<img style="position:absolute" src="<?=base_url() ?>images/space/planet01.png"/>
			<img class="target" src="<?=base_url() ?>images/space/planet01overlay.png"/>
			<div class="target_text" style=" top:-20px; left:70px;">
				SIGNAGE
			</div>
		</div>
	</div>

	<div class="parallax-layer"  style="width:105%; height:105%;">
		<div class="planet" style="position:absolute; left:250px; top:250px;  width:90px; height: 90px;">
			<img style="position:absolute"  src="<?=base_url() ?>images/space/planet02.png"/>
			<img class="target" src="<?=base_url() ?>images/space/planet02outline.png"/>
			<div class="target_text" style=" top:90px; left:30px;">
				EXPERIENTIAL
			</div>
		</div>
	</div>

	<div class="parallax-layer"  style="width:109%; height:109%;">
		<div class="planet" style="position:absolute; left:630px; top:190px;  width:150px; height: 150px;">
			<img style="position:absolute" src="<?=base_url() ?>images/space/earth.png"/>
			<img class="target"  src="<?=base_url() ?>images/space/earthoutline.png"/>
			<div class="target_text" style=" top:150px; left:-30px;">
				EXHIBITIONS
			</div>
		</div>
	</div>

	<!-- Rounded corners -->

</div>