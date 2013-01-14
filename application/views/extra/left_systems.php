<<<<<<< HEAD
<style type="text/css">
.systemsMenu {
	float: left;
	clear: left;
	width: 120px;
	padding-left: 20px;
}

.systemsMenu img {
	width: 120px;
}

.systemsMenuText {
	float: left;
}

.left-arrow,.right-arrow {
	float: left;
	width: 30px;
	height: 30px;
	
	margin-top:45px;
}

.systemPage {
	float: left;
	width: 120px;
	height: 30px;
	text-align: center;
	margin-top:45px;
}
.pointer, .pointerSelected {
position:absolute;
left:170px;
}

</style>

<div class="systemsMenu">

	<a href="<?=base_url()?>portable"><img
		src="<?=base_url()?>images/icons/PortableSmall.png" /> </a>

</div>


<div class="systemsMenuText">
	<?php if($gallery == "latestwork") {?>
	<div class="pointerSelected" style="display: block; opacity:1;">
		<?php } else {?>
		<div class="pointer"  style="display: block;  opacity:0;">
			<?php }?>
			<div class="left-arrow"><img src="<?=base_url()?>images/icons/arrows/portableLeft.png"/></div>

			<div class="systemPage">LATEST WORK</div>

			<div class="right-arrow"><img src="<?=base_url()?>images/icons/arrows/portableRight.png"/></div>

		</div>

	</div>

=======
<style type="text/css">
.systemsMenu {
	float: left;
	clear: left;
	width: 120px;
	padding-left: 20px;
}

.systemsMenu img {
	width: 120px;
}

.systemsMenuText {
	float: left;
}

.left-arrow,.right-arrow {
	float: left;
	width: 30px;
	height: 30px;
	
	margin-top:45px;
}

.systemPage {
	float: left;
	width: 120px;
	height: 30px;
	text-align: center;
	margin-top:45px;
}
.pointer, .pointerSelected {
position:absolute;
left:170px;
}

</style>

<div class="systemsMenu">

	<a href="<?=base_url()?>latestwork"><img
		src="<?=base_url()?>images/icons/PortableSmall.png" /> </a>

</div>


<div class="systemsMenuText">
	<?php if($gallery == "latestwork") {?>
	<div class="pointerSelected" style="display: block; opacity:1;">
		<?php } else {?>
		<div class="pointer"  style="display: block;  opacity:0;">
			<?php }?>
			<div class="left-arrow"><img src="<?=base_url()?>images/icons/arrows/portableLeft.png"/></div>

			<div class="systemPage">LATEST WORK</div>

			<div class="right-arrow"><img src="<?=base_url()?>images/icons/arrows/portableRight.png"/></div>

		</div>

	</div>

>>>>>>> 42346483de52a23423eefe1ccb9fabaf409938cf
	