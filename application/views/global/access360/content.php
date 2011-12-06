<style>
    /* the overlayed element */
.apple_overlay {
	
	/* initially overlay is hidden */
	display:none;
	
	/* growing background image */
	background-image:url(/images/backgrounds/white.png);
	
	/* 
		width after the growing animation finishes
		height is automatically calculated
	*/
	width:640px;		
	
	/* some padding to layout nested elements nicely  */
	padding:35px;

	/* a little styling */	
	font-size:11px;
}

/* default close button positioned on upper right corner */
.apple_overlay .close {
	background-image:url(/images/icons/close.png);
	position:absolute; right:5px; top:5px;
	cursor:pointer;
	height:35px;
	width:35px;
}
    
</style>
<!-- content page for news-->


<div class="text_content">
<?php foreach($content as $row):?>

<h1><?=$row->title?></h1>

<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<a href='".base_url()."admin/edit/".$row->content_id."'>edit page</a><br/>";
		}	

?>

<?php if(isset($age)) { $body = str_replace("[age]", "$age", "$row->content"); }
else {
	$body = $row->content;
}?>

<?php if($row->news_image != NULL) { ?>
<!-- trigger elements -->
<div id="apple">
<img src="<?=base_url()?>images/uploads/thumbs/<?=$row->news_image?>" rel="#photo1"/>

<!-- overlay for the first trigger. id matches the rel- attribute -->
<div class="apple_overlay black" id="photo1">
	<img height="427px" src="<?=base_url()?>images/uploads/<?=$row->news_image?>" />

	<div class="details">
		<h2><?=$row->title?></h2>

		<p>
			
		</p>
	</div>
</div>
</div>

<?php } ?>

<?php  $body = str_replace("Access360", "<strong>Access360</strong>", "$body");?>
<?php  $body = str_replace("Flyer Direct", "<strong>Flyer Direct</strong>", "$body");?>
<?=$body?>

<?php endforeach;?>


	<?php foreach($content as $row):?>
			<?php if($row->extra != NULL) {?>
			<?=$this->load->view('extra/'.$row->extra)?>
			<?php }?>
	<?php endforeach;?>

</div>