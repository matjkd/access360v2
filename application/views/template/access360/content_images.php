<?php if($image1 != "") { ?>
<div class="  padR20 padT20 padB20">
	<div class="row-fluid">
		<img class="mainImage animated fadeIn" src="<?=$image1 ?>"/>
	</div>
	<div class="row-fluid padT10">
		<div class="span6 mainImage" style="background:url(<?=$image2 ?>); height:160px; background-size:cover; background-position:<?=$position2?>;"></div>
		<div class="span6 mainImage" style="background:url(<?=$image3 ?>); height:160px; background-size:cover; background-position:<?=$position3?>;"></div>
	</div>
</div>
<?php } ?>

