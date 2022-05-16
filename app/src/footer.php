<footer>
	<div class="bg-dark">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-between align-items-center py-3 py-lg-4">
				<div class="col-auto">
					<div class="row no-gutters mb-3 mb-md-0 text-white justify-content-center">
						<div class="col-12 col-md-auto text-center">Copyright <?= date('Y') ?></div>
						<div class="col-auto px-2 px-md-4">|</div>
						<div class="col-12 col-md-auto text-center"><?= $site ?></div>
						<div class="col-auto px-2 px-md-4">|</div>
						<div class="col-12 col-md-auto text-center">All Rights Reserved
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
						<div class="col-auto footer-nav-li pl-lg-5">
							<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
								<?= renderImg("aiims.png","logo") ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-footer-bottom">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-between align-items-center py-3 py-lg-4">
				<div class="col-auto">
					<div class="row no-gutters mb-3 mb-md-0">
						<div class="col mr-1">a</div>
						<div class="col mr-1">a</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
						<div class="col-auto">Copyright 2021</div>
						<div class="col-auto px-2 px-md-4">|</div>
						<div class="col-auto"><?= $site ?></div>
						<div class="col-auto px-2 px-md-4">|</div>
						<div class="col-auto">All Rights Reserved</div>
						<div class="col-auto pl-lg-5">
							<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims1.png","logo") ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<img src="<?= $img_dir ?>/icon/arrow-up.webp">
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>