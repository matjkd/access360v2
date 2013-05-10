<div class="row">
		<div class="span12">
			<div class="marL20 marR20" style="text-align:center;">
				<?php  foreach($portfolio as $row):

				?>

				<?php if($row->portfolio_pdf == NULL) {
				?>
				<img style="width:100px;" src="https://s3-eu-west-1.amazonaws.com/access360site/<?=$row -> page ?>/<?=$row -> portfolio_thumb ?>"/>
						
				<? } ?>

				<?php endforeach; ?>
			</div>

		</div>

</div>