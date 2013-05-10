<div class="row-fluid">
		<div class="span6">
			<div class="padL20 padR10 padT20 padB20 ">

				<h1 class="animated fadeInLeft"><?php if($parent != NULL) {
				?>
				<a href="<?=base_url() ?><?=$parent ?>"><small><i class="icon-circle-arrow-left"></i></small></a><?php } ?>
				<?=$title ?></h1>
				<?=$content_text ?>

				<?php if(isset($customContent) && $customContent != NULL) {
				?>
				<?=$this -> load -> view('extra/' . $customContent) ?>
				<?php } ?>
			</div>

		</div>
		<div class="span6">
			<?php if(!isset($extra) || $extra == NULL) {
			?>
			<?=$this -> load -> view('template/access360/content_images') ?>
			<?php } else { ?>
			<?=$this -> load -> view('extra/' . $extra) ?>

			<?php } ?>
		</div>
	</div>