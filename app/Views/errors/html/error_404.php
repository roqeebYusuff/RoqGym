<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>RoqGym | 404 - Page Not Found</title>

		<link rel="shortcut icon" href="<?php echo base_url() ?>/assets/images/favicon.ico" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main-plugin.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/remixicon/fonts/remixicon.css">
	</head>

	<body>		
		<div id="loading">
			<div id="loading-center">
			</div>
		</div>
		
		<div class="wrapper">
			<div class="container">
				<div class="row no-gutters height-self-center">
					<div class="col-sm-12 text-center align-self-center">
						<div class="iq-error position-relative">
							<img src="<?php echo base_url() ?>/assets/images/error/404.png" class="img-fluid iq-error-img" alt="" style="height: 170px;">
							<h2 class="mb-0 mt-4">Oops! This Page is Not Found.</h2>

							<p>
								<?php if (! empty($message) && $message !== '(null)') : ?>
									<?= nl2br(esc($message)) ?>
								<?php else : ?>
									Sorry! Cannot seem to find the page you were looking for.
								<?php endif ?>
							</p>
							<a class="btn btn-primary d-inline-flex align-items-center mt-3" href="<?php echo base_url() ?>"><i class="ri-home-4-line"></i>Back to Home</a>
						</div>
					</div>
				</div>
			</div>
      	</div>

		<script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/vendor/wow/wow.min.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/app.js"></script>
	</body>
</html>