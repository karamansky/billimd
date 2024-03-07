<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$description = get_field('description');
	$logos = get_field('logos');
	
	if( empty($logos) ) return false;
?>
<section id="insurance" class="insurance">
	<div class="wrapper">
		<div class="insurance__inner">
			<?php if( !empty($title) ) { ?>
				<h2 class="section-title insurance__title" data-aos="fade-up" ><?php echo $title ?></h2>
			<?php } ?>
			<?php if( !empty($description) ) { ?>
				<div class="insurance__description" data-aos="fade-up" >
					<?php echo $description; ?>
				</div>
			<?php } ?>
			
			<div class="insurance__logos" data-aos="fade-up" >
				<?php
					$i = 0;
					foreach ($logos as $item) {
						if ($i % 6 === 0) {
							echo '<div class="insurance__logos-slide">';
						}
						?>
						<div class="insurance__logo">
							<?php DisplayGlobal::renderAcfImage($item['image']); ?>
						</div>
						<?php
						$i++;
						if ($i % 6 === 0) {
							echo '</div>';
						}
					}
					
					if ($i % 6 !== 0) {
						echo '</div>';
					}
				?>
			</div>
		</div>
	</div>
</section>
