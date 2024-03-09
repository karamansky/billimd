<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$all_card_same_color = !empty(get_field('all_card_same_color')) ? get_field('all_card_same_color') : false;
	$cards_columns = !empty(get_field('cards_columns')) ? get_field('cards_columns') : '4';
	$title = get_field('title');
	$description = get_field('description');
	$cards = get_field('cards');
	
	if( empty($cards) ) return false;
?>
<section class="cards cards--col-<?php echo $cards_columns; if ($all_card_same_color) { echo 'cards--samecolor'; } ?>" data-aos="fade-up">
	<div class="wrapper">
		<div class="cards__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="cards__title mb30"><?php echo $title ?></h2>
			<?php } ?>
			<?php if( !empty($description['left']) || !empty($description['right']) ) { ?>
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
				<?php foreach ($cards as $item) {
				
				?>
					<div class="cards__item <?php if( !empty($item['description_type']) && $item['description_type'] == 'button' && !empty($item['button']) ) { echo 'cards__item--center'; } ?>">
						<?php if( !empty($item['image']) ) { ?>
							<div class="cards__item-image">
								<?php DisplayGlobal::renderAcfImage($item['image']); ?>
							</div>
						<?php } ?>
						<?php if( !empty($item['title']) ) { ?>
							<h3 class="cards__item-title"><?php echo $item['title'] ?></h3>
						<?php } ?>
						<?php if( !empty($item['description_type']) && $item['description_type'] == 'text' && !empty($item['text']) ) { ?>
							<div class="cards__item-description">
								<?php echo $item['text']; ?>
							</div>
						<?php } ?>
						<?php if( !empty($item['description_type']) && $item['description_type'] == 'button' && !empty($item['button']) ) { ?>
							<div class="cards__item-description">
								<?php DisplayGlobal::renderAcfLink($item['button'], 'btn cards__item-button') ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
