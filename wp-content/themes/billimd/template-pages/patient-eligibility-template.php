<?php
	/*
	 * Template Name: Page: Patient Eligibility template
	 */
	get_header();
	
	the_content();
?>




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
