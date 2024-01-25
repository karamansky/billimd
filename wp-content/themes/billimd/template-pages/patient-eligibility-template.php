<?php
	/*
	 * Template Name: Patient Eligibility template
	 */
	get_header();
?>

<section class="page-hero1">
	<div class="wrapper">
		<div class="page-hero1__inner">
			<div class="page-hero1__left">
				<h1 class="page-hero1__title">Patient Eligibility Verification</h1>
				<a href="<?php echo get_home_url(); ?>/#contact-us" class="btn btn--big btn--green page-hero1__button">Contact Us Now</a>
			</div>
			<div class="page-hero1__right">
				<div class="page-hero1__content">
					<h2>Navigating patient eligibility can be complex and time-consuming, but it's crucial for efficient patient care and billing. That's where we come in.</h2>
					<p>Our Patient Eligibility Verification service is designed to take the guesswork out of your billing process. We diligently verify insurance coverage, benefits, co-pays, and deductibles in real time, ensuring that you have accurate and up-to-date information before services are rendered.</p>
					<p>This not only streamlines your billing cycle but also enhances patient satisfaction by preventing unexpected costs and delays. Don’t let eligibility uncertainties disrupt your practice. Call us today to secure a smooth, reliable billing process that supports your commitment to excellent patient care.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="cards">
	<div class="wrapper">
		<div class="cards__inner">
			<div class="cards__items">
				<div class="cards__item">
					<div class="cards__item-image">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/cards/card1.svg" alt="card" loading="lazy" />
					</div>
					<h3 class="cards__item-title">Real-Time Eligibility Checks</h3>
					<div class="cards__item-description">
						Instantly verify insurance coverage details, reducing uncertainties and delays.
					</div>
				</div>
				<div class="cards__item">
					<div class="cards__item-image">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/cards/card2.svg" alt="card" loading="lazy" />
					</div>
					<h3 class="cards__item-title">Minimize Claim Rejections</h3>
					<div class="cards__item-description">
						Ensure accurate billing information upfront to significantly reduce the likelihood of claim denials.
					</div>
				</div>
				<div class="cards__item">
					<div class="cards__item-image">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/cards/card3.svg" alt="card" loading="lazy" />
					</div>
					<h3 class="cards__item-title">Enhance Patient Satisfaction</h3>
					<div class="cards__item-description">
						Avoid unexpected costs for patients by providing clear, upfront information about their coverage.
					</div>
				</div>
				<div class="cards__item">
					<div class="cards__item-image">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/cards/card4.svg" alt="card" loading="lazy" />
					</div>
					<h3 class="cards__item-title">Streamline Your Revenue Cycle</h3>
					<div class="cards__item-description">
						Improve financial efficiency with precise eligibility verification, leading to faster payments and reduced administrative burdens.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
