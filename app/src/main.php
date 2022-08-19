<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

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

<?php include __DIR__ . '/footer.php'; ?>