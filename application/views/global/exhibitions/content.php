<<<<<<< HEAD
<!--Main content page for site-->

<div style="padding-left: 10px;">
	<?php foreach ($content as $row): ?>
	<!--add image if set-->

	<h1>
		<?= $row->title ?>
	</h1>

	<?php
	$is_logged_in = $this->session->userdata('is_logged_in');
	if (!isset($is_logged_in) || $is_logged_in == true) {
		echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this page</a><br/>";
	}
	?>

	<?php
	if (isset($age)) {
		$body = str_replace("[age]", "$age", "$row->content");
	} else {
		$body = $row->content;
	}
	?>


	<?php $body = str_replace("Access360", "<strong>Access360</strong>", "$body"); ?>


	<div style="padding-bottom: 10px">
		<?php if($row->news_image != NULL) {?>
		<img style="float: left; width: 300px; padding-right: 10px;"
			src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/medium_<?=$row->news_image?>" />
		<?php }?>
		<?= $body ?>
	</div>

	<?php endforeach; ?>


	<?php foreach ($content as $row): ?>
	<?php if ($row->extra != NULL) { ?>
	<?= $this->load->view('extra/' . $row->extra) ?>
	<?php } ?>
	<?php endforeach; ?>

	<?php if(isset($attachments) && $attachments != NULL) { ?>
	<h4>Attachments</h4>
	<p>
		<?php foreach($attachments as $row):?>

		<a
			href=" https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/<?=$row->filename?>"><?=$row->name?>
		</a><br />

		<?php endforeach; ?>


	</p>
	<?php } ?>
	
	<?php if(isset($news) && $news != NULL && $menu == "news") { ?>
<?php foreach($news as $row):?>
	<h3>
		<?= $row->title ?>
	</h3>
	By Dave Pimlott<br/>
	<?php
	$is_logged_in = $this->session->userdata('is_logged_in');
	if (!isset($is_logged_in) || $is_logged_in == true) {
		echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this item</a><br/>";
	}
	?>
	<?php
	if (isset($age)) {
		$body = str_replace("[age]", "$age", "$row->content");
	} else {
		$body = $row->content;
	}
	?>


	<?php $body = str_replace("Access360", "<strong>Access360</strong>", "$body"); ?>


	<div style="padding-bottom: 10px">
		<?php if($row->news_image != NULL) {?>
		<img style="float: right; width: 200px; padding-left: 10px;"
			src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/medium_<?=$row->news_image?>" />
		<?php }?>
		<?= $body ?>
	</div>
	<?php endforeach;?>
<?php }?>
</div>
=======
<!--Main content page for site-->

<div style="padding-left: 10px;">
	<?php foreach ($content as $row): ?>
	<!--add image if set-->

	<h1>
		<?= $row->title ?>
	</h1>

	<?php
	$is_logged_in = $this->session->userdata('is_logged_in');
	if (!isset($is_logged_in) || $is_logged_in == true) {
		echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this page</a><br/>";
	}
	?>

	<?php
	if (isset($age)) {
		$body = str_replace("[age]", "$age", "$row->content");
	} else {
		$body = $row->content;
	}
	?>


	<?php $body = str_replace("Access360", "<strong>Access360</strong>", "$body"); ?>


	<div style="padding-bottom: 10px">
		<?php if($row->news_image != NULL) {?>
		<img style="float: left; width: 300px; padding-right: 10px;"
			src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/medium_<?=$row->news_image?>" />
		<?php }?>
		<?= $body ?>
	</div>

	<?php endforeach; ?>


	<?php foreach ($content as $row): ?>
	<?php if ($row->extra != NULL) { ?>
	<?= $this->load->view('extra/' . $row->extra) ?>
	<?php } ?>
	<?php endforeach; ?>

	<?php if(isset($attachments) && $attachments != NULL) { ?>
	<h4>Attachments</h4>
	<p>
		<?php foreach($attachments as $row):?>

		<a
			href=" https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/<?=$row->filename?>"><?=$row->name?>
		</a><br />

		<?php endforeach; ?>


	</p>
	<?php } ?>
	
	<?php if(isset($news) && $news != NULL && $menu == "news") { ?>
<?php foreach($news as $row):?>
	<h3>
		<?= $row->title ?>
	</h3>
	By Dave Pimlott<br/>
	<?php
	$is_logged_in = $this->session->userdata('is_logged_in');
	if (!isset($is_logged_in) || $is_logged_in == true) {
		echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this item</a><br/>";
	}
	?>
	<?php
	if (isset($age)) {
		$body = str_replace("[age]", "$age", "$row->content");
	} else {
		$body = $row->content;
	}
	?>


	<?php $body = str_replace("Access360", "<strong>Access360</strong>", "$body"); ?>


	<div style="padding-bottom: 10px">
		<?php if($row->news_image != NULL) {?>
		<img style="float: right; width: 200px; padding-left: 10px;"
			src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/medium_<?=$row->news_image?>" />
		<?php }?>
		<?= $body ?>
	</div>
	<?php endforeach;?>
<?php }?>
</div>
>>>>>>> 42346483de52a23423eefe1ccb9fabaf409938cf
