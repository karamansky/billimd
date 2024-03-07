<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$title = get_field('title');
	$description = get_field('description');
	$images = get_field('images');
	
	if( empty($images) ) return false;
?>
<section class="emr">
	<div class="emr__inner">
		<div class="emr__top">
			<div class="wrapper">
				<?php if( !empty($title) ) { ?>
					<h2 class="section-title emr__title" data-aos="fade-up" ><?php echo $title ?></h2>
				<?php } ?>
				<?php if( !empty($description) ) { ?>
					<div class="emr__description" data-aos="fade-up" >
						<?php echo $description; ?>
					</div>
				<?php } ?>
			</div>
		</div>
		
		<div class="emr__bottom" data-aos="fade-up" >
			<div class="emr__slider">
				<div class="emr__slider-track">
					<div class="emr__slider-part emr__marquee">
						<?php foreach ($images as $item) { ?>
							<div class="emr__slide">
								<?php DisplayGlobal::renderAcfImage($item['image']); ?>
							</div>
						<?php } ?>
					</div>
					<div class="emr__slider-part emr__marquee" aria-hidden="true">
						<?php foreach ($images as $item) { ?>
							<div class="emr__slide">
								<?php DisplayGlobal::renderAcfImage($item['image']); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			
			<div class="emr__slider--mobile" data-aos="fade-up" >
				<?php
					$i = 0;
					foreach ($images as $item) {
						if ($i % 6 === 0) {
							echo '<div class="emr__slide-mob">';
						}
						?>
							<div class="emr__slide">
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