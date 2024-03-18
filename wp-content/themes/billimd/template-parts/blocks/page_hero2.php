<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$subtitle = get_field('subtitle');
	$content = get_field('content');
	
	if( empty($title) && empty($content) ) return false;
?>
<section class="hero-block page-hero2">
	<div class="wrapper">
		<div class="page-hero2__inner">
			<?php if( !empty($title) ) { ?>
				<h1 class="page-hero2__title"><?php echo $title ?></h1>
			<?php } ?>
			<?php if( !empty($title) ) { ?>
				<h2 class="page-hero2__subtitle"><?php echo $subtitle ?></h2>
			<?php } ?>
			<?php if( !empty($content['left']) || !empty($content['right']) ) { ?>
				<div class="page-hero2__columns">
					<?php if( !empty($content['left']) ) { ?>
						<div class="page-hero2__col">
							<?php echo $content['left']; ?>
						</div>
					<?php } ?>
					<?php if( $content['right'] ) { ?>
						<div class="page-hero2__col">
							<?php echo $content['right']; ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>


