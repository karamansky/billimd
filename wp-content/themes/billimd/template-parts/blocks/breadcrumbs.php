<?php
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}
	
	$breadcrumbs = get_field('breadcrumbs');
	
	if( empty($breadcrumbs) ) return false;
?>
<div class="breadcrumbs">
	<div class="wrapper">
		<div class="breadcrumbs__inner">
			<ul class="breadcrumbs__items">
				<?php $i = 0; foreach ($breadcrumbs as $item) { ?>
					<li class="breadcrumbs__item">
						<?php if ( $i+1 < count($breadcrumbs) ) { ?>
							<?php if( !empty( $item['link'] ) ) { ?>
								<a href="<?php echo $item['link']['url'] ?>"><?php echo $item['link']['title']; ?></a>
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
									<g opacity="0.5">
										<path d="M7.5 12L10.5 9L7.5 6" stroke="black" stroke-width="0.8625" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
								</svg>
							<?php } ?>
						<?php } else { ?>
							<?php if( !empty( $item['link'] ) ) { ?>
								<span><?php echo $item['link']['title']; ?></span>
							<?php } ?>
						<?php } ?>
					</li>
				<?php $i++; } ?>
			</ul>
		</div>
	</div>
</div>
