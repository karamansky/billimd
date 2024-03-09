<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$image_position = !empty(get_field('image_position')) ? get_field('image_position') : 'left';
	$image = get_field('image');
	$text_content = get_field('text_content');
	
	if( empty($text_content) && empty($image) ) return false;
?>
<section class="image-text image-text--<?php echo $image_position ?>" data-aos="fade-up">
	<div class="wrapper">
		<div class="image-text__inner">
			<?php if( !empty($image['url']) ) { ?>
				<div class="image-text__left">
					<div class="image-text__image">
						<?php DisplayGlobal::renderAcfImage($image); ?>
					</div>
				</div>
			<?php } ?>
			<?php if( !empty($text_content) ) { ?>
				<div class="image-text__right">
					<div class="image-text__text image-text__text--card">
						<?php echo $text_content; ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>