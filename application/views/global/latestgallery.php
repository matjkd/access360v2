<<<<<<< HEAD
<style type="text/css" >
    /* the overlayed element */
.simple_overlay {
	
	/* must be initially hidden */
	display:none;
	
	/* place overlay on top of other elements */
	z-index:10000;
	
	/* styling */
	background-color:#333;
	
		
	min-height:200px;
	border:1px solid #666;
	
	/* CSS3 styling for latest browsers */
	-moz-box-shadow:0 0 90px 5px #000;
	-webkit-box-shadow: 0 0 90px #000;	
}

/* close button positioned on upper right corner */
.simple_overlay .close {
	background-image:url(<?=base_url() ?>/images/overlay/close.png);
	position:absolute;
	right:-15px;
	top:-15px;
	cursor:pointer;
	height:35px;
	width:35px;
}

/* styling for elements inside overlay */
	.details {
		position:relative;
		margin:5px;
		font-size:11px;
		color:#fff;
		
	}
	
	.details a{
		
		color:#fff;
		
	}
	
	.details h3 {
		
		font-size:15px;
		margin:0 0 0px 0px;
        }
	
                
                #triggers img{
                border:4px solid #fff;
                float:left;
                margin:20px 0px 2px 20px;
        }
 .sortable { list-style-type: none; margin: 0; padding: 0; }
	.sortable li {  float: left; }
        
         .notsortable { list-style-type: none; margin: 0; padding: 0; }
	.notsortable li {  float: left; }
	
	.thumbtitle {
	clear:both;
	margin-left:30px;
	margin-bottom:10px;
	border-left:0px solid #000;
	border-right:0px solid #000;
	text-align:left;
	margin-top:5px;
	
	}
	</style>
<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			$sortclass = "sortable";
		}	else {
                    $sortclass = "notsortable";
                }
                
if($content != NULL )  {                

?>


<div id="triggers" >
    <ul class="<?=$sortclass ?>">
<?php foreach($latest as $row):?>
        <li id="gallery_<?=$row -> content_id ?>">
<img  class="thumbnails"  style="width:203px; height: 120px;" alt="<?=$row -> title ?>" src="https://s3-eu-west-1.amazonaws.com/<?=$this -> bucket ?>/thumb_<?=$row -> news_image ?>" rel="#img_<?=$row -> content_id ?>"/><br/>
<div class="thumbtitle"><?=$row -> title ?></div>
        </li>
<?php endforeach; ?>
</ul>
</div>
<div style="clear:both;">
</div>

<?php foreach($latest as $row):?>
<div class="simple_overlay" id="img_<?=$row -> content_id ?>">

	<!-- large image -->
	<img  alt="<?=$row -> title ?>" src="https://s3-eu-west-1.amazonaws.com/<?=$this -> bucket ?>/medium_<?=$row -> news_image ?>" />

	<!-- image details -->
	<div class="details">
		<h3><?=$row -> title ?></h3>

		<?php
	$is_logged_in = $this -> session -> userdata('is_logged_in');
	if (!isset($is_logged_in) || $is_logged_in == true) {
		echo "<a href='" . base_url() . "admin/edit/" . $row -> content_id . "'>Edit this page</a><br/>";
	}
?>

		<p><?=$row -> content ?></p>
	</div>

</div>
<?php endforeach; ?>


=======
<style type="text/css" >
    /* the overlayed element */
.simple_overlay {
	
	/* must be initially hidden */
	display:none;
	
	/* place overlay on top of other elements */
	z-index:10000;
	
	/* styling */
	background-color:#333;
	
		
	min-height:200px;
	border:1px solid #666;
	
	/* CSS3 styling for latest browsers */
	-moz-box-shadow:0 0 90px 5px #000;
	-webkit-box-shadow: 0 0 90px #000;	
}

/* close button positioned on upper right corner */
.simple_overlay .close {
	background-image:url(<?=base_url() ?>/images/overlay/close.png);
	position:absolute;
	right:-15px;
	top:-15px;
	cursor:pointer;
	height:35px;
	width:35px;
}

/* styling for elements inside overlay */
	.details {
		position:relative;
		margin:5px;
		font-size:11px;
		color:#fff;
		
	}
	
	.details a{
		
		color:#fff;
		
	}
	
	.details h3 {
		
		font-size:15px;
		margin:0 0 0px 0px;
        }
	
                
                #triggers img{
                border:4px solid #fff;
                float:left;
                margin:20px 0px 2px 20px;
        }
 .sortable { list-style-type: none; margin: 0; padding: 0; }
	.sortable li {  float: left; }
        
         .notsortable { list-style-type: none; margin: 0; padding: 0; }
	.notsortable li {  float: left; }
	
	.thumbtitle {
	clear:both;
	margin-left:30px;
	margin-bottom:10px;
	border-left:0px solid #000;
	border-right:0px solid #000;
	text-align:left;
	margin-top:5px;
	
	}
	</style>
<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			$sortclass = "sortable";
		}	else {
                    $sortclass = "notsortable";
                }
                
if($content != NULL )  {                

?>


<div id="triggers" >
    <ul class="<?=$sortclass ?>">
<?php foreach($latest as $row):?>
        <li id="gallery_<?=$row -> content_id ?>">
<img  class="thumbnails"  style="width:203px; height: 120px;" alt="<?=$row -> title ?>" src="https://s3-eu-west-1.amazonaws.com/<?=$this -> bucket ?>/thumb_<?=$row -> news_image ?>" rel="#img_<?=$row -> content_id ?>"/><br/>
<div class="thumbtitle"><?=$row -> title ?></div>
        </li>
<?php endforeach; ?>
</ul>
</div>
<div style="clear:both;">
</div>

<?php foreach($latest as $row):?>
<div class="simple_overlay" id="img_<?=$row -> content_id ?>">

	<!-- large image -->
	<img  alt="<?=$row -> title ?>" src="https://s3-eu-west-1.amazonaws.com/<?=$this -> bucket ?>/medium_<?=$row -> news_image ?>" />

	<!-- image details -->
	<div class="details">
		<h3><?=$row -> title ?></h3>

		<?php
	$is_logged_in = $this -> session -> userdata('is_logged_in');
	if (!isset($is_logged_in) || $is_logged_in == true) {
		echo "<a href='" . base_url() . "admin/edit/" . $row -> content_id . "'>Edit this page</a><br/>";
	}
?>

		<p><?=$row -> content ?></p>
	</div>

</div>
<?php endforeach; ?>


>>>>>>> 42346483de52a23423eefe1ccb9fabaf409938cf
<?php } ?>