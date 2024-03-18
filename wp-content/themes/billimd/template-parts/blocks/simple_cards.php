<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$description = get_field('description');
	$cards_columns = !empty(get_field('cards_columns')) ? get_field('cards_columns') : '4';
	$cards_color = !empty(get_field('cards_color')) ? get_field('cards_color') : '#F3FCFE';
	$cards = get_field('cards');
	
	if( empty($cards) ) return false;
?>
<section class="simple-cards simple-cards--col-<?php echo $cards_columns;?>" data-aos="fade-up">
	<div class="wrapper">
		<div class="simple-cards__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="simple-cards__title mb30"><?php echo $title ?></h2>
			<?php } ?>
			<?php if( !empty($description['left']) || !empty($description['right']) ) { ?>
				<div class="simple-cards__description">
					<?php if( !empty($description['left']) ) { ?>
						<div class="simple-cards__description-left">
							<div class="simple-cards__description-text">
								<?php echo $description['left'] ?>
							</div>
						</div>
					<?php } ?>
					<?php if( !empty($description['right']) ) { ?>
						<div class="simple-cards__description-right">
							<div class="simple-cards__description-text">
								<?php echo $description['right'] ?>
							</div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			<div class="simple-cards__items">
				<?php foreach ($cards as $item) {
					$desc_type = !empty($item['description_type']) ? $item['description_type'] : 'text';
					?>
					<div class="simple-cards__item <?php if( !empty($item['description_type']) && $item['description_type'] == 'button' && !empty($item['button']) ) { echo 'simple-cards__item--center'; } ?>"
						 style="background-color: <?php echo $cards_color; ?>">
						<?php if( !empty($item['title']) ) { ?>
							<h3 class="simple-cards__item-title"><?php echo $item['title'] ?></h3>
						<?php } ?>
						<?php if( $desc_type == 'text' && !empty($item['text']) ) { ?>
							<div class="simple-cards__item-description">
								<?php echo $item['text']; ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
