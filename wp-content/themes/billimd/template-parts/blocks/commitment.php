<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$description = get_field('description');
	$image = get_field('image');
	
	if( empty($title) && empty($image) ) return false;
?>

<section data-aos="fade-up" class="commitment">
	<div class="wrapper">
		<div class="commitment__inner">
			<?php if( !empty($image) ) { ?>
				<div class="commitment__image" data-aos="fade-up" >
					<?php DisplayGlobal::renderAcfImage($image) ?>
				</div>
			<?php } ?>
			<?php if( !empty($title) ) { ?>
				<h2 class="section-title commitment__title" data-aos="fade-up" ><?php echo $title ?></h2>
			<?php } ?>
			<?php if( !empty($description) ) { ?>
				<div class="commitment__description" data-aos="fade-up" >
					<?php echo $description; ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>