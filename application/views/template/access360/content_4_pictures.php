<div class="row-fluid">
  <div class="span12">
  	<div class="padL20 padR20 padT20 padB20 ">
   
    <div class="row-fluid">
      <div class="span6">
      	
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
      <div class="span6 mainImage" style="background:url(<?=$image1 ?>); height:350px; background-size:cover; margin-bottom:20px;"></div>
    </div>
    
     <div class="row-fluid">
          <div class="span3 mainImage" style="background:url(<?=$image2 ?>); height:160px; background-size:cover; background-position:<?=$position2 ?>;"></div>
          <div class="span3 mainImage" style="background:url(<?=$image3 ?>); height:160px; background-size:cover; background-position:<?=$position3 ?>;"></div>
          <div class="span3 mainImage" style="background:url(<?=$image4 ?>); height:160px; background-size:cover; background-position:<?=$position4 ?>;"></div>
          <div class="span3 mainImage" style="background:url(<?=$image5 ?>); height:160px; background-size:cover; background-position:<?=$position5 ?>;"></div>
        </div>
  </div>
  </div>
</div>