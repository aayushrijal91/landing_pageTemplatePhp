<?php
include __DIR__ . '/../functions.php';
global $site;
global $description;
?>

<?php include __DIR__ . '/header.php'; ?>
	<section>
		<div class="section-quote bg-light" id="form-quote">
			<div class="container">
				<div class="row justify-content-center justify-content-xl-start align-items-center">
					<div class="col-12 py-4">
						<form action="./app/form.php" method="POST">
							<input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
							<div class="row no-gutters mb-2">
								<div class="col mr-lg-1">
									<input class="form-control border-0 rounded-0 bg-white" type="text"
										placeholder="Name" name="name" required>
								</div>
								<div class="col-12 col-lg-6 ml-lg-1 mt-2 mt-lg-0">
									<input class="form-control border-0 rounded-0 bg-white" type="tel"
										placeholder="Phone" name="phone" required>
								</div>
							</div>
							<div class="row no-gutters my-1">
								<div class="col mr-lg-1">
									<input class="form-control border-0 rounded-0 bg-white" type="email"
										placeholder="Email Address" name="email" required>
								</div>
								<div class="col-12 col-lg-6 ml-lg-1 mt-2 mt-lg-0">
									<select name="service" class="form-control border-0 rounded-0 bg-white" required>
										<option value="" disabled selected>Select a Service</option>
										<option value="Blocked Drains">Blocked Drains</option>
										<option value="General Plumbing Services">General Plumbing Services</option>
										<option value="Emergency Plumbers">Emergency Plumbers</option>
									</select>
								</div>
							</div>
							<div class="row no-gutters my-2">
								<div class="col-12 col-lg-2 mr-lg-1">
									<input class="form-control border-0 rounded-0 bg-white" type="text"
										placeholder="Street Number" name="streetNumber" required>
								</div>
								<div class="col ml-lg-1 mt-2 my-lg-0">
									<input class="form-control border-0 rounded-0 bg-white" type="text"
										placeholder="Street Name" name="streetName" required>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-12 col-lg-7 mr-lg-1">
									<input class="form-control border-0 rounded-0 bg-white" type="text"
										placeholder="Suburb" name="suburb" required>
								</div>
								<div class="col ml-lg-1 mt-2 mt-lg-0">
									<input class="form-control border-0 rounded-0 bg-white" type="number"
										placeholder="Postcode" name="postcode" required>
								</div>
							</div>
							<div class="row justify-content-start align-items-center mt-4">
								<div class="col-12 col-md-auto form-quote-privacy-policy-text pb-3 pb-xl-0">
									<i class="fas fa-lock"></i><span class="pl-3 font-gilroy-bold">Your privacy is our
										priority</span> |
									All
									information will remain 100% private and
									secure
								</div>
								<div class="col col-lg">
									<button type="submit"
										class="btn btn-primary text-white form-control rounded-3 font-helvetica font-weight-bold quote-btn">
										Enquire Now!</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include __DIR__ . '/footer.php'; ?>
