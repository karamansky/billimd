<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$description = get_field('description');
	$button = get_field('button');
	$desktop_image = get_field('desktop_image');
	$mobile_image = get_field('mobile_image');
	
	if( empty($title) ) return false;
?>
<section class="hero">
	<div class="wrapper">
		<div class="hero__inner" <?php echo DisplayGlobal::generateStyleWithBgImageOrNothing($desktop_image); ?>>
			<?php if( !empty($mobile_image) ) { ?>
				<div class="hero__img">
					<?php DisplayGlobal::renderAcfImage($mobile_image) ?>
				</div>
			<?php } ?>
			<div class="hero__content">
				<h1 class="hero__title">
					<?php echo $title ?>
				</h1>
				<?php if( !empty($description) ) { ?>
					<div class="hero__text">
						<?php echo $description ?>
					</div>
				<?php } ?>
				<?php DisplayGlobal::renderAcfLink($button, 'btn btn--big btn--green scrollto hero__btn'); ?>
			</div>
		</div>
	</div>
</section>
