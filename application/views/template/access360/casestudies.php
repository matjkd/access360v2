<style>
	.casethumb {
		border: 1px solid #eee;
		-moz-box-shadow: 3px 4px 4px #000000;
		-webkit-box-shadow: 3px 4px 4px #000000;
		box-shadow: 3px 4px 4px #000000;
		-webkit-transition: All 0.5s ease;
		-moz-transition: All 0.5s ease;
		-o-transition: All 0.5s ease;
		
	}

	.casethumb:hover {
		opacity: 0.5;
		-webkit-transition: All 0.5s ease;
		-moz-transition: All 0.5s ease;
		-o-transition: All 0.5s ease;
	}

</style>
<div class="row padL20">
	
		
			<?php foreach($case_studies as $row):
			?>

			<div class="span6 ">
				<div class="padR20  padB20">
					<a target="_blank" href="https://s3-eu-west-1.amazonaws.com/access360site/casestudies/<?=$row -> portfolio_pdf ?>"> <img class="casethumb"  src="https://s3-eu-west-1.amazonaws.com/access360site/casestudies/<?=$row -> portfolio_thumb ?>"/> </a>
				</div>
			</div>
			<?php endforeach; ?>
		
	
</div>

