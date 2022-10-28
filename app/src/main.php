<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="row justify-content-center justify-content-lg-end align-items-center">
                        <div class="col-12 col-md-auto">
                            <a href="#form-quote" class="btn btn-primary rounded-0 text-white py-3 px-md-5">
                                Get A Quote
                            </a>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-md-5">
                                Call Us <?= $phone_number ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<footer>
	<div class="container">
		<div class="row justify-content-center justify-content-lg-between align-items-center">
			<div class="col-auto">
				<div class="row gx-2 gx-md-3 text-white justify-content-center">
					<div class="col-12 text-center pb-3 d-lg-none">
						<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims.png", "logo") ?>
						</a>
					</div>
					<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center"><?= $site ?></div>
					<div class="col-auto">|</div>
					<div class="col-auto text-center">All Rights Reserved</div>
				</div>
			</div>
			<div class="col-auto d-none d-lg-block">
				<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
					<?= renderImg("aiims.png", "logo") ?>
				</a>
			</div>
		</div>
	</div>
</footer>