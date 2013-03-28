<style type="text/css" media="screen, projection">
	#port {
		margin: 1.5em 0px;
		overflow: hidden;
		position: relative;
		/*width: 700px;*/
		height: 128px;
		border-left: 1px solid rgba(0,0,0,0.2);
		border-right: 1px solid rgba(0,0,0,0.2);
		padding: 4px 64px;
	}

	.parallax-thumbs {
		position: absolute;
	}

	.thumb {
		display: inline-block;
		vertical-align: baseline;
		overflow: hidden;
		padding-top: 64px;
		height: 0;
		width: 64px;
		
		background-position: 0 0;
		background-repeat: no-repeat;
		text-decoration: none;
		color: inherit;
		z-index: 5000;
	}

	/* Horizontal lists of inline-blocks, with image backgrounds as thumbnails */
	/* Tested in Safari 4 | FF 3.5 | Opera 9.6 | IE7 */
	.thumbs_index {
		padding: 0 12px;
		/* initial position */
		left: 0;
		/* Put all he thumbs on one line. */
		white-space: nowrap;
	}

	.thumbs_index > li {
		display: inline;
		margin-right: 12px;
	}

	.img_thumb {
		padding-top: 120px;
		width: 132px;
		z-index: 2000;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		-webkit-box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4);
		-moz-box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4);
		box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4);
	}

	.hoverbox {
		background: #fff;
		width: 132px;
		height: 120px;
		position: absolute;
		top: 0px;
		opacity: 0;
		text-align: center;
	}
	.hoverbox i {
		position: relative;
		height: 40px;
		width: 40px;
		border-radius: 20px;
		top: 40px;
		line-height: 41px;
		color: #F7941E;
		background: #000;
	}
	.hoverbox i:hover {
		-webkit-transition: all .2s linear;
		-moz-transition: all .2s linear;
		transition: all .2s linear;
		opacity: 0.7;
	}

	.footnote {
		font-size: 0.6em;
		color: #858b95;
	}
</style>

<div id="port">

	<!-- List must be spaceless becuse <li>s are display: inline, and any spaces
	between them show in IE -->
	<ul class="thumbs_index index parallax-thumbs">
		<?php foreach($portfolio as $row):
?>
		<?php if($row->portfolio_pdf != NULL) {?>
		<li>
			<a class="img_thumb thumb spark"  data-original-title="<?=$row -> portfolio_title ?>" target="_blank" id=""
				 href="https://s3-eu-west-1.amazonaws.com/access360site/<?=$row -> page ?>/<?=$row -> portfolio_pdf ?>"
				  style="background: url('https://s3-eu-west-1.amazonaws.com/access360site/<?=$row -> page ?>/<?=$row -> portfolio_thumb ?>'); background-size: cover; ">
			<div class="hoverbox">
				<i class="icon-2x icon-download"></i>
			</div></a>

		</li>
		<? } ?>
		
		<?php if($row->portfolio_pdf == NULL) {?>
		<li>
			<a class="img_thumb thumb spark" rel="prettyPhoto[<?=$row -> page ?>]" data-original-title="<?=$row -> portfolio_title ?>" target="_blank" id=""
				 href="https://s3-eu-west-1.amazonaws.com/access360site/<?=$row -> page ?>/<?=$row -> portfolio_image01 ?>" 
				 style="background: url('https://s3-eu-west-1.amazonaws.com/access360site/<?=$row -> page ?>/<?=$row -> portfolio_thumb ?>'); background-size: cover; ">
			<div class="hoverbox">
				<i class="icon-2x icon-fullscreen"></i>
			</div></a>

		</li>
		<? } ?>

		<?php endforeach; ?>
	</ul>

</div>
<span class="social_links animated fadeInLeft">
<a href=""><i class="icon-2x icon-twitter-sign"></i></a> <a href=""><i class="icon-2x icon-facebook-sign"></i></a>
</span>
<ul class="footer_menu animated fadeInLeftBig">
	<li>
		<a href="">Contact</a>
	</li>
	<li>
		<a href="">Terms &amp; Conditions</a>
	</li>
	<li>
		
	</li>
	
</ul>

