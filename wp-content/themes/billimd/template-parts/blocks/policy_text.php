<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$last_update = get_field('last_update');
	$content = get_field('content');
	
	if( empty($content) ) return false;
?>
<section class="policy">
	<div class="wrapper">
		<div class="policy__inner">
			<div class="policy__content">
				<?php if( !empty($title) ) { ?>
					<h1 class="policy__title"><?php echo $title; ?></h1>
				<?php } ?>
				<?php if( !empty($last_update) ) { ?>
					<div class="policy__date">
						<span><?php _e('Last updated:', 'billi'); ?> </span><?php echo $last_update ?>
					</div>
				<?php } ?>
				<div class="policy__text">
					<?php echo $content ?>
				</div>
			</div>
		</div>
	</div>
</section>