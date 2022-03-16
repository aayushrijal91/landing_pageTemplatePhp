<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>
</head>

<body>
	<header>
		<div class="header-top-bar">
			<div class="container py-3">
				<div class="row justify-content-center justify-content-lg-between align-items-center">
					<div class="col-auto">
						<a href="./">
							<img src="<?= $img_dir ?>/logo/logo.png" alt="Logo">
						</a>
					</div>
					<div class="col-auto col-lg font-weight-bold">
						<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
							<div class="col-12 col-md-auto ml-lg-3 mr-2 mr-lg-0">
								<a href="#form-quote" class="btn btn-block btn-primary rounded-0 text-white py-3 px-md-5">
									Get A Quote
								</a>
							</div>
							<div class="col-12 col-md-auto ml-lg-2">
								<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-secondary rounded-0 text-white py-3 px-md-5">
									Call Us <?= $phone_number ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>