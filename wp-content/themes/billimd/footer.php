<?php
	$support_phone = get_field('support_phone', 'option');
	$footer_image_title = get_field('footer_image_title', 'option');
	$footer_images = get_field('footer_images', 'option');
?>
<footer class="footer">
	<div class="wrapper">
		<div class="footer__inner">
			<div class="footer__top">
				<div class="footer__menu">
					<?php
						wp_nav_menu(
							[
								'theme_location' => 'footer-menu',
								'menu_class'     => 'footer-menu',
								'container'       => '',
							]
						);
					?>
				</div>
				<?php if( !empty($footer_images) ) { ?>
					<div class="footer__certifications">
						<?php if( !empty($footer_image_title) ) { ?>
							<span><?php echo $footer_image_title; ?></span>
						<?php } ?>
						<div class="footer__certifications-items">
							<?php foreach ($footer_images as $item) { ?>
								<div class="footer__certifications-item">
									<?php DisplayGlobal::renderAcfImage($item['image']); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="footer__bottom">
				<div class="footer__bottom-left">
					<div class="footer__policy-menu">
						<?php
							wp_nav_menu(
								[
									'theme_location' => 'policy-menu',
									'menu_class'     => 'policy-menu',
									'container'       => '',
								]
							);
						?>
					</div>
					<div class="footer__copy">
						Copyright © <?php echo date('Y'); ?> billiMD.com. All rights reserved.
					</div>
				</div>
				<div class="footer__bottom-right">
					<?php if( !empty($support_phone) ) { ?>
						<div class="footer__support">
							<a href="tel:<?php echo preg_replace("/[^0-9]/", "", $support_phone) ?>">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.7358 5.537V7.537H18.7358H20.7358" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7.58691 10.729C7.58691 9.91799 8.24491 9.25999 9.05591 9.25999C9.86691 9.25999 10.5249 9.91799 10.5249 10.729C10.5249 12.565 7.58791 12.565 7.58791 14.739H10.5249" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M15.894 12.03L13.382 12.003C13.24 12.001 13.125 11.886 13.125 11.743V9.261" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M15.8901 9.32001V14.74" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M20.3 7.53801C18.697 4.63601 15.582 2.66701 12 2.66701C6.84499 2.66701 2.66699 6.84601 2.66699 12C2.66699 17.154 6.84499 21.333 12 21.333C17.155 21.333 21.333 17.154 21.333 12" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
								<?php echo $support_phone; ?>
							</a>
						</div>
					<?php } ?>
					<div class="footer__policy-menu--mob">
						<?php
							wp_nav_menu(
								[
									'theme_location' => 'policy-menu',
									'menu_class'     => 'policy-menu',
									'container'       => '',
								]
							);
						?>
					</div>
					<div class="footer__social-menu">
						<?php
							wp_nav_menu(
								[
									'theme_location' => 'social-menu',
									'menu_class'     => 'social-menu',
									'container'       => '',
								]
							);
						?>
					</div>
				</div>
			</div>
			<div class="footer__bottom-copy">
				Copyright © <?php echo date('Y'); ?> billiMD.com. All rights reserved.
			</div>
		</div>
	</div>
</footer>

<?php if( !empty($support_phone) ) { ?>
	<a href="tel:<?php echo preg_replace("/[^0-9]/", "", $support_phone) ?>" class="btn help-btn">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
			<path class="strk" d="M20.736 5.53699V7.53699H18.736H20.736" stroke="#1B9260" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
			<path class="strk" d="M7.587 10.729C7.587 9.91801 8.245 9.26001 9.056 9.26001C9.867 9.26001 10.525 9.91801 10.525 10.729C10.525 12.565 7.588 12.565 7.588 14.739H10.525" stroke="#1B9260" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
			<path class="strk" d="M15.894 12.03L13.382 12.003C13.24 12.001 13.125 11.886 13.125 11.743V9.26099" stroke="#1B9260" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
			<path class="strk" d="M15.89 9.32001V14.74" stroke="#1B9260" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
			<path class="strk" d="M20.3 7.53799C18.697 4.63599 15.582 2.66699 12 2.66699C6.845 2.66699 2.667 6.84599 2.667 12C2.667 17.154 6.845 21.333 12 21.333C17.155 21.333 21.333 17.154 21.333 12" stroke="#1B9260" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
		<?php echo $support_phone; ?>
	</a>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>