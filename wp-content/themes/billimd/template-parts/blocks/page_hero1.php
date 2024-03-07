<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$button = get_field('button');
	$content = get_field('content');
	
	if( empty($title) ) return false;
?>
<section class="page-hero1">
	<div class="wrapper">
		<div class="page-hero1__inner">
			<div class="page-hero1__left">
				<h1 class="page-hero1__title"><?php echo $title ?></h1>
				<?php if( !empty($button) ) { DisplayGlobal::renderAcfLink($button, 'btn btn--big btn--green page-hero1__button'); } ?>
			</div>
			<?php if( !empty($content) ) { ?>
				<div class="page-hero1__right">
					<div class="page-hero1__content">
						<?php echo $content; ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
