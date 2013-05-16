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
		border-left: 1px #fff solid;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
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

	/* Bootstrap Carousel / Latest Projects Widget */
	/*-----------------------------------------------------------------------------------*/
	.carousel {
		position: relative;
	}
	.carousel li {
		margin-right: 5px
	}
	.carousel-wrapper {
		overflow: hidden;
		width: 100%
	}
	.carousel-wrapper ul {
		display: none;
	}
	.carousel-wrapper ul li {
		height: 100%;
		float: left;
		display: block;
	}
	.btleft .es-nav {
		position: absolute;
		top: 10px;
		left: -63px;
	}
	.btleft .es-nav2 {
		position: absolute;
		top: 10px;
		left: -63px;
	}
	.bttop .es-nav {
		position: absolute;
		top: 62px;
		right: 0;
	}
	.bttop .es-nav2 {
		position: absolute;
		top: 62px;
		left: 0;
	}
	.es-nav span {
		float: left;
		display: block;
		top: 3px;
		right: 0;
		text-indent: 4px;
		color: #fff;
		cursor: pointer;
		width: 26px;
		height: 21px;
		padding-top: 5px;
	}

	.es-nav2 span {
		float: left;
		display: block;
		top: 3px;
		right: 0;
		text-indent: 4px;
		color: #fff;
		cursor: pointer;
		width: 26px;
		height: 21px;
		padding-top: 5px;
	}
	.es-nav2 .es-nav-prev {
		background: rgba(232, 72, 7, 0.7);
		float: left;
	}
	.es-nav .es-nav-next {

		background-color: rgba(232, 72, 7, 0.7);
		margin-left: 5px;
		float: left;
	}
	.es-nav .es-nav-next:hover, .es-nav .es-nav-prev:hover {
		background-color: rgba(232, 72, 7, 1);
	}

	.es-nav2 .es-nav-next:hover, .es-nav2 .es-nav-prev:hover {
		background-color: rgba(232, 72, 7, 1);
	}

	.carousel-control {
		border: none;
		position: absolute;
		top: inherit;
		left: inherit;
		bottom: 5px;
		width: 26px;
		height: 26px;
	}
	.carousel-control.post {
		top: 50%;
	}
	.carousel-control.left.post {
		left: 0;
	}
	.carousel-control.left {
		left: 0px;
		background: url('../images/arrow-left.png') no-repeat center center;
		background-color: rgba(54, 55, 56, 0.7);
	}
	.carousel-control.right {
		right: 4px;
		background: url('../images/arrow-right.png') no-repeat center center;
		background-color: rgba(54, 55, 56, 0.7);
	}
	/* Portfolio */
	/*-----------------------------------------------------------------------------------*/
	.portfolio {
	}
	.portfolio article {
		background: none repeat scroll 0 0 #ffffff;
		margin-top: 10px;
		overflow: hidden;
		position: relative;
	}
	.portfolio h4 a {
		color: #E84807;
	}
	.portfolio h4 a:hover {
		color: #fefefe;
	}
	.portfolio p {
		color: #FFFFFF;
	}
	.portfolio article:hover {
		background: #ffffff !important;
		color: #C3C0B9 !important;
	}
	.portfolio article .title {
		font-size: 16px;
		font-weight: 600;
		padding-bottom: 3px;
	}
	.portfolio article:hover .title {
		border-color: #C3C0B9;
	}
	.portfolio article:hover .title a {
		color: #FFFFFF;
	}
	.portfolio .inner-image {
		position: relative;
	}
	.portfolio .inner-image a, .portfolio .inner-image img {
		display: block;
	}

	.thumbnails .inner-text, .thumbnails .inner-text, .portfolio .inner-text {
		padding: 10px 20px 20px;
	}
	.thumbnails li {
		position: relative;
		overflow: hidden;
	}
	.featured-blocks .thumbnails > li:hover {
		background: none repeat scroll 0 0 #EEEEEE !important;
		color: #E84807 !important;
	}
	.featured-blocks .thumbnails > li:hover p, .featured-blocks .thumbnails > li:hover h3 {
		color: #E84807 !important;
	}
	.thumbnails li .sliding, .portfolio article .sliding {
		position: absolute;
		left: 0;
		top: 100%;
		background: transparent;
		height: 100%;
		width: 100%;
		/* opacity */
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; /* IE 8 */
		filter: alpha(opacity=0); /* IE 5-7 */
		-khtml-opacity: 0; /* Safari 1.x */
		-moz-opacity: 0; /* Netscape */
		opacity: 0; /* Good browsers */
	}
	.thumbnails li:hover .sliding, .portfolio article:hover .sliding {
		background: #383838;
		top: 50%;
		/* opacity */
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"; /* IE 8 */
		filter: alpha(opacity=100); /* IE 5-7 */
		-khtml-opacity: 1; /* Safari 1.x */
		-moz-opacity: 1; /* Netscape */
		opacity: 1; /* Good browsers */
	}

	/* Frame overlay */
	.media a, .thumbnail {
		position: relative;
	}
	.media .frame-overlay, .thumbnail .frame-overlay, .portfolio article .frame-overlay {
		background: #FFFFFF;
		position: absolute;
		height: 100%;
		width: 100%;
		left: 0;
		top: 0;
		/* opacity */
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; /* IE 8 */
		filter: alpha(opacity=0); /* IE 5-7 */
		-khtml-opacity: 0; /* Safari 1.x */
		-moz-opacity: 0; /* Netscape */
		opacity: 0; /* Good browsers */
	}
	.media a:hover .frame-overlay, .thumbnail:hover .frame-overlay, .portfolio article:hover .frame-overlay {
		/* opacity */
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
		filter: alpha(opacity=50); /* IE 5-7 */
		-khtml-opacity: 0.5; /* Safari 1.x */
		-moz-opacity: 0.5; /* Netscape */
		opacity: 0.5; /* Good browsers */
	}

	.read-more [class^="icon-"], .read-more [class*=" icon-"] {
		margin-left: 5px;
		margin-right: 0;
	}

	/* which elements to animate */
	.thumbnails li .sliding, .portfolio article .sliding, .portfolio article .inner-text, .thumbnail .frame-overlay, .portfolio article .frame-overlay, .animate {
		/* transition */
		-webkit-transition: all 0.3s ease-out; /* Safari 3.2+, Chrome */
		-moz-transition: all 0.3s ease-out; /* Firefox 4-15 */
		-o-transition: all 0.3s ease-out; /* Opera 10.5–12.00 */
		transition: all 0.3s ease-out; /* Firefox 16+, Opera 12.50+ */
	}

	.ps-slider {
		margin-top: 10px;
	}
	.ps-description {
	}
	


</style>
<?php if($portfolio != "" && $hidegallery != 1) { ?>
<div class="row-fluid">
	

	<!-- flexslider -->
	<div class="flexslider">
		<ul class="slides">
			<?php $x=0; foreach($portfolio as $row):
$x = $x + 1;
			?>

			<?php if($row->portfolio_pdf == NULL && $row->page != "digitalsignage") {
			?>
			<li>
				<article>
					<a class="img_thumb thumb spark" rel="prettyPhoto[<?=$row -> page ?>]" data-original-title="<?=$row -> portfolio_title ?>" target="_blank" id=""
					href="https://s3-eu-west-1.amazonaws.com/access360site/<?=$row -> page ?>/<?=$row -> portfolio_image01 ?>"
					style="background: url('https://s3-eu-west-1.amazonaws.com/access360site/<?=$row -> page ?>/<?=$row -> portfolio_thumb ?>'); background-size: cover; ">
					<div class="hoverbox">
						<i class="icon-2x icon-fullscreen"></i>
					</div></a>
				</article>

			</li>
			<? } ?>

			<?php endforeach; ?>
		</ul>
		
		<!-- items mirrored twice, total of 12 -->
		</ul>
	</div>

</div>
<?php } ?>
<div style="margin-top:10px;">
	<span class="social_links animated fadeInLeft"> <a target="_blank" href="https://twitter.com/access_360"> <i class="icon-2x icon-twitter-sign"></i></a> <a target="_blank" href="http://www.facebook.com/pages/Access360/250361334977191"> <i class="icon-2x icon-facebook-sign"></i></a> <a target="_blank" href="mailto:sales@access360.co.uk"> <i class="icon-2x icon-envelope-alt"></i></a> </span>

	<ul class="footer_menu animated fadeInLeftBig">

		<li>

			<a href="<?=base_url() ?>terms">Terms &amp; Conditions</a>
		</li>
		<li>

		</li>

	</ul>
</div>