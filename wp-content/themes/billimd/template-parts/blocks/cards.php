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
<section class="cards" data-aos="fade-up">
	<div class="wrapper">
		<div class="cards__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="cards__title mb30"><?php echo $title ?></h2>
			<?php } ?>
			<?php if( !empty($description) ) { ?>
			<div class="cards__description">
				<?php if( !empty($description['left']) ) { ?>
					<div class="cards__description-left">
						<div class="cards__description-text">
							<?php echo $description['left'] ?>
						</div>
					</div>
				<?php } ?>
				<?php if( !empty($description['right']) ) { ?>
					<div class="cards__description-right">
						<div class="cards__description-text">
							<?php echo $description['right'] ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php } ?>
			<div class="cards__items">
				<?php foreach ($cards as $item) { ?>
					<div class="cards__item">
						<?php if( !empty($item['image']) ) { ?>
							<div class="cards__item-image">
								<?php DisplayGlobal::renderAcfImage($item['image']); ?>
							</div>
						<?php } ?>
						<?php if( !empty($item['title']) ) { ?>
							<h3 class="cards__item-title"><?php echo $item['title'] ?></h3>
						<?php } ?>
						<?php if( !empty($item['text']) ) { ?>
							<div class="cards__item-description">
								<?php echo $item['text']; ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
