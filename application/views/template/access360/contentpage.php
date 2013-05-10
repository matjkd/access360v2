<div class=" mainbody">
	<?php if(isset($image4) && $image4 != NULL) {
	?>
	
	<?=$this -> load -> view('template/access360/content_4_pictures') ?>
	
	<?php } else { ?>
		
	<?=$this -> load -> view('template/access360/content_3_pictures') ?>
	
	<?php } ?>

	<?php if(!isset($block2) || $block2 == NULL) {
	?>

	<?php } else { ?>

	<div class="span12">
		
		<?=$this -> load -> view('template/access360/' . $block2) ?>
	</div>
	<?php } ?>
	<div class="row">
		<div class="span12">
			<div class="well marL20 marR20">
				<a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal">Call Back Request</a><span class="padL20"><h3 style="float:right; margin-top:5px;">Or call us on 0845 074 5656</h3></span>
			</div>

		</div>

	</div>

</div>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			×
		</button>
		<h3 id="myModalLabel">Call Back Request</h3>
	</div>
	<div class="modal-body">
		<div class="row-fluid">
			<div class="span6">
				<p>
					Enter Your details
				</p>

				<form id="callback-form" action="<?=base_url() ?>email/callback" method="post" accept-charset="utf-8">

					<?= form_open('email/callback'); ?>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input class="span8" id="formname" type="text" name="name" placeholder="Name">
					</div>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-phone"></i></span>
						<input class="span8" id="formphone" type="text" name="phone" placeholder="Phone Number">
					</div>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input class="span8" id="formemail" type="text" name="email" placeholder="Email">
					</div>

			</div>
			<div class="span6">

				<address>
					<strong>Access360 Ltd</strong>
					<br/>
					Ilgars Manor
					<br/>
					Workhouse Lane
					<br/>
					South Woodham Ferrers
					<br/>
					Essex CM3 8RD
					<br/>
				</address>

				<address>
					<i class="icon-phone"></i> 0845 074 5656
					<br/>
					<i class="icon-envelope"></i> sales@access360.co.uk
				</address>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">
			Close
		</button>
		<button class="btn btn-primary" type="submit">
			Send Request
		</button>
		</form>
	</div>
</div>