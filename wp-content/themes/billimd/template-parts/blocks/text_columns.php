<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$text_rows = get_field('text_rows');
	
	if( empty($text_rows) ) return false;
?>
<section class="text-columns" data-aos="fade-up">
	<div class="wrapper">
		<div class="text-columns__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="text-columns__title"><?php echo $title ?></h2>
			<?php } ?>
			
			<?php foreach ($text_rows as $row) { ?>
				<div class="text-columns__block">
					<div class="text-columns__col">
						<?php if( !empty($row['left']) ) echo $row['left'] ?>
					</div>
					<div class="text-columns__col">
						<?php if( !empty($row['right']) ) echo $row['right'] ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>


