<?php
	/**
	 * Template Name: Page: Contact us
	 */
	get_header();
?>

<section id="contact-us" class="contact-us" >
	<div class="wrapper">
		<div class="contact__inner">
			<h2 class="section-title contact__title" data-aos="fade-up" >Contact Us</h2>
			<div class="contact__description" data-aos="fade-up" >
				<p>
					Embark on a journey to simpler, faster medical billing. Connect with us today and let's discuss how we can enhance your practice's financial health.
				</p>
			</div>
			<div class="contact__form" data-aos="fade-up" >
				<?php echo do_shortcode('[contact-form-7 id="d4a4d15" title="Home Contact form in block"]'); ?>
			</div>
		</div>
	</div>
</section>

<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		window.location.href = '/thank-you';
	}, false );
</script>

<?php get_footer(); ?>
