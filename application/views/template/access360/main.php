<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Access360</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" content="">
		<meta name="author" content="">

		
		<!-- CSS -->
		<link href="<?=base_url() ?>css/bootstrap.css" rel="stylesheet">
		<link href=".<?=base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">
		<link href="<?=base_url() ?>css/font-awesome.css" rel="stylesheet">
		<link href="<?=base_url() ?>css/animate.css" rel="stylesheet">
		<link href="<?=base_url() ?>css/prettyphoto.css" rel="stylesheet">

		<link href="<?=base_url() ?>css/<?=$this -> config_theme ?>/speed-use.css" rel="stylesheet">
		
		

		<link href="<?=base_url() ?>css/<?=$this -> config_theme ?>/styles.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,900,200italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="//use.typekit.net/tfb0iji.js"></script>
		<script src="<?=base_url()?>js/modernizr.custom.17475.js"></script>

		<script type="text/javascript">
			try {
				Typekit.load();
			} catch(e) {
			}
		</script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="../assets/ico/favicon.png">
	</head>

	<body>
		<input type="hidden" id="baseurl" value="<?= base_url() ?>"/>
		<div class="bodycontain">
			<div class="navbar navbar-inverse ">

				<div class="navbar-access">
					<div class="container">
						<div class="logo animated fadeInDown" >
							<a href="<?=base_url() ?>"><img src="<?=base_url() ?>css/access360/images/logoBig.png"/></a>
						</div>
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

						<div id="navcontainer">
							<ul>
								<li>
									<a href="<?=base_url() ?>">Home</a>
								</li>

								<li>
									<a href="<?=base_url() ?>about">About us</a>
								</li>
								
								<li>
									<a href="<?=base_url() ?>experiential">Experiential</a>
								</li>
								<li>
									<a href="<?=base_url() ?>exhibitions">Exhibitions</a>
									<ul>
										<li>
											<a href="<?=base_url() ?>custom">Custom Build</a>
										</li>
										<li>
											<a href="<?=base_url() ?>modular">Modular</a>
										</li>
										<li>
											<a href="<?=base_url() ?>outdoor">Outdoor</a>
										</li>
										<li>
											<a href="<?=base_url() ?>roadshow">Roadshow</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="<?=base_url() ?>digitalsignage">Digital Signage</a>
								</li>
								<li>
									<a href="<?=base_url() ?>signage">Signage</a>
								</li>
								<li>
									<a href="<?=base_url() ?>pos">Point of Sale</a>
								</li>
								
								<li>
									<a href="<?=base_url() ?>casestudies">Case Studies</a>
								</li>
								
								<li>
									<a href="<?=base_url() ?>contact">Contact</a>
								</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="container">
				
				<?=$this -> load -> view('template/access360/alert') ?>

				<!-- Main hero unit for a primary marketing message or call to action -->
				<?=$this -> load -> view($mainpage) ?>

			</div>
			<!-- /container -->
		</div>
		<footer>
			<div class="container">
				<?=$this -> load -> view('template/access360/pagefooter') ?>
			</div>
		</footer>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<script src="<?=base_url() ?>js/bootstrap.js"></script>
		<script src="<?=base_url() ?>js/jquery.prettyPhoto.js"></script>
		<script src="<?=base_url() ?>js/plugins.js"></script>
		<script src="<?=base_url() ?>js/superfish.js"></script>
		<script src="<?=base_url() ?>js/elastislide.js"></script>
		<script src="<?=base_url() ?>js/parallax.js"></script>
		<script src="<?=base_url() ?>js/script.js?2"></script>

	</body>
</html>
