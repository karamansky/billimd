<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	
	<?php
		wp_head();
	?>

	<!-- !Google Tag Manager! -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MJ2CJLR2');</script>
	<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ2CJLR2"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="body-overlay"></div>

<?php
	$logo = get_field('logo', 'option');
	$button = get_field('button', 'option');
	$support_phone = get_field('support_phone', 'option');
?>
<header class="header">
	<div class="header__inner">
		<div class="wrapper">
			<div class="header__container">
				<div class="header__left">
					<a href="#" class="header__hamburger header__hamburger--mobile">
						<i class="icon hamburger-icon"></i>
						<i class="icon close-icon" style="display: none;"></i>
					</a>
					<?php if( !empty($logo) ) { ?>
						<div class="header__logo-wrap">
							<a href="<?php echo home_url(); ?>" class="header__logo">
								<?php DisplayGlobal::renderAcfImage($logo); ?>
							</a>
						</div>
					<?php } ?>
				</div>
				
				<nav class="header__nav">
<!--					<a href="#" class="header__hamburger">-->
<!--						<i class="icon hamburger-icon"></i>-->
<!--						<i class="icon close-icon" style="display: none;"></i>-->
<!--					</a>-->
					<div class="header__menu">
						<?php
							wp_nav_menu(
								[
									'theme_location' => 'primary-menu',
									'menu_class'     => 'header-menu',
									'container'       => '',
								]
							);
						?>
					</div>
					<div class="header__search">
						<a href="#" class="header__search-btn"><i class="icon search-icon"></i></a>
						<form action="">
							<input type="text" name="s" placeholder="Search">
							<a href="#" class="header__search-close"><i class="icon close-icon"></i></a>
						</form>
					</div>
				</nav>
				
				<div class="header__actions">
<!--					<div class="header__login">-->
<!--						<div class="header__login-button">-->
<!--							<i class="icon login-icon"></i>-->
<!--							<span>Login</span>-->
<!--							<i class="icon arrow-down-icon"></i>-->
<!--							<div class="header__login-dropdown">-->
<!--								<a href="#" class="header__login-dropdown-item">-->
<!--									<i class="icon patient-icon"></i>Patient-->
<!--								</a>-->
<!--								<a href="#" class="header__login-dropdown-item">-->
<!--									<i class="icon billimd-icon"></i>BilliMD-->
<!--								</a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
					
					<?php if( !empty($button) ) { DisplayGlobal::renderAcfLink($button, 'btn header__actions-btn'); } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="header__hidden">
		<div class="wrapper">
			<div class="header__hidden-mob">
				<nav class="header__hidden-nav">
					<div class="header__search">
						<form action="">
							<input type="text" name="s" placeholder="Search">
							<a href="#" class="header__search-clear"><i class="icon close-icon"></i></a>
						</form>
					</div>
					<div class="header__menu">
						<?php
							wp_nav_menu(
								[
									'theme_location' => 'primary-menu',
									'menu_class'     => 'header-menu',
									'container'       => '',
								]
							);
						?>
					</div>
				</nav>
			</div>
			<div class="header__hidden-top">
<!--				<div class="header__hidden-menu1">-->
<!--					<ul>-->
<!--						<li class="menu-item"><a href="--><?php //if(is_page('patient-eligibility-verification')) echo '/'; ?><!--#testimonials">Testimonials</a></li>-->
<!--						<li class="menu-item"><a href="--><?php //if(is_page('patient-eligibility-verification')) echo '/'; ?><!--#blog">News & blog</a></li>-->
<!--						<li class="menu-item"><a href="--><?php //if(is_page('patient-eligibility-verification')) echo '/'; ?><!--#contact-us">Message Our Team</a></li>-->
<!--					</ul>-->
<!--				</div>-->
				<?php if( !empty($support_phone) ) { ?>
					<div class="header__hidden-support">
						<span>Support</span>
						<a href="tel:<?php echo preg_replace("/[^0-9]/", "", $support_phone) ?>">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.7358 5.537V7.537H18.7358H20.7358" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M7.58691 10.729C7.58691 9.91799 8.24491 9.25999 9.05591 9.25999C9.86691 9.25999 10.5249 9.91799 10.5249 10.729C10.5249 12.565 7.58791 12.565 7.58791 14.739H10.5249" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.894 12.03L13.382 12.003C13.24 12.001 13.125 11.886 13.125 11.743V9.261" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.8901 9.32001V14.74" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M20.3 7.53801C18.697 4.63601 15.582 2.66701 12 2.66701C6.84499 2.66701 2.66699 6.84601 2.66699 12C2.66699 17.154 6.84499 21.333 12 21.333C17.155 21.333 21.333 17.154 21.333 12" stroke="black" stroke-width="1.15" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<?php echo $support_phone; ?>
						</a>
					</div>
				<?php } ?>
			</div>

			<div class="header__hidden-bot">
				<div class="header__policy-menu">
					<?php
						wp_nav_menu(
							[
								'theme_location' => 'policy-menu',
								'menu_class'     => 'policy-menu',
								'container'       => '',
							]
						);
					?>
				</div>
				<div class="header__social-menu">
					<?php
						wp_nav_menu(
							[
								'theme_location' => 'social-menu',
								'menu_class'     => 'social-menu',
								'container'       => '',
							]
						);
					?>
				</div>
			</div>
		</div>
	</div>
</header>