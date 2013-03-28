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

<div id="spaceport" class="">
	<!-- Seven image layers, each layer slightly bigger than the one behind, making
	'closer' layers move faster. -->

	<div class="parallax-layer"  style="width:96%; height:93%;">
		<a href="<?=base_url() ?>pos">
		<div class="planet" style="position:absolute; top:40px; left:240px;  width:180px; height:91px;">
			<img style="position:absolute"  src="<?=base_url() ?>images/space/saturn.png"/>
			<img class="target" src="<?=base_url() ?>images/space/saturnOverlay.png"/>
			<div class="target_text" style=" top:-20px; left:-30px;">
				POINT OF SALE
			</div>
		</div></a>
	</div>
	<div class="parallax-layer"  style="width:93%; height:91%;">
		<a href="<?=base_url() ?>signage">
		<div class="planet"style="position:absolute; left:600px; top:50px;  width:100px; height: 100px;">

			<img style="position:absolute" src="<?=base_url() ?>images/space/planet01.png"/>
			<img class="target" src="<?=base_url() ?>images/space/planet01overlay.png"/>
			<div class="target_text" style=" top:-20px; left:70px;">
				SIGNAGE
			</div>
		</div></a>
	</div>
	<div class="parallax-layer"  style="width:100%; height:100%;">
		<div class="sun" style="position:absolute; top:100px; left:400px;  width:150px; height: 150px;">
			<img src="<?=base_url() ?>images/space/sun.png"/>
			<img class="sunglow" src="<?=base_url() ?>images/space/sun2.png"/>
			<img src="<?=base_url() ?>images/space/sunOverlay.png"/>
		</div>
	</div>

	<div class="parallax-layer"  style="width:102%; height:107%;">
		<a href="<?=base_url() ?>digitalsignage">
		<div class="planet" style="position:absolute; left:90px; top:130px;  width:110px; height: 110px;">
			<img style="position:absolute"  src="<?=base_url() ?>images/space/planet03.png"/>
			<img class="target" src="<?=base_url() ?>images/space/planet03outline.png"/>
			<div class="target_text" style=" top:-20px; left:-30px;">
				DIGITAL SIGNAGE
			</div>
		</div></a>
	</div>

	<div class="parallax-layer"  style="width:105%; height:115%;">
		<a href="<?=base_url() ?>experiential">
		<div class="planet" style="position:absolute; left:250px; top:250px;  width:90px; height: 90px;">
			<img style="position:absolute"  src="<?=base_url() ?>images/space/planet02.png"/>
			<img class="target" src="<?=base_url() ?>images/space/planet02outline.png"/>
			<div class="target_text" style=" top:90px; left:30px;">
				EXPERIENTIAL
			</div>
		</div></a>
	</div>

	<div class="parallax-layer"  style="width:115%; height:119%;">
		<a href="<?=base_url() ?>exhibitions">
		<div class="planet" style="position:absolute; left:690px; top:190px;  width:150px; height: 150px;">
			<img style="position:absolute" src="<?=base_url() ?>images/space/earth.png"/>
			<img class="target"  src="<?=base_url() ?>images/space/earthoutline.png"/>
			<div class="target_text" style=" top:150px; left:-30px;">
				EXHIBITIONS
			</div>
		</div></a>
	</div>

	<!-- Rounded corners -->

</div>