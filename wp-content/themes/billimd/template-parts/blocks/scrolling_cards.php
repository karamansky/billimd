<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$description = get_field('description');
	$cards = get_field('cards');
	
	if( empty($cards) ) return false;
?>
<section id="services" class="services">
	<div class="services__inner">
		<div class="wrapper">
			<?php if( !empty($title) ) { ?>
				<h2 class="section-title services__title" data-aos="fade-up" ><?php echo $title ?></h2>
			<?php } ?>
		</div>
		<div class="services__items" data-aos="fade-up" >
			<?php foreach ($cards as $item) { ?>
				<div class="services__item">
					<?php if( !empty($item['image']['url']) ) { ?>
						<div class="services__item-image">
							<?php DisplayGlobal::renderAcfImage($item['image']); ?>
						</div>
					<?php } ?>
					<?php if( !empty($item['title']) ) { ?>
						<h3 class="services__item-title"><?php echo $item['title']; ?></h3>
					<?php } ?>
					<?php if( !empty($item['text']) ) { ?>
						<div class="services__item-description">
							<?php echo $item['text']; ?>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>