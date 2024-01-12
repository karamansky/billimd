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
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-overlay"></div>


<header class="header">
	<div class="header__inner">
		<div class="wrapper">
			<div class="header__container">
				<div class="header__left">
					<a href="#" class="header__hamburger header__hamburger--mobile">
						<i class="icon hamburger-icon"></i>
						<i class="icon close-icon" style="display: none;"></i>
					</a>
					<div class="header__logo-wrap">
						<a href="<?php echo home_url(); ?>" class="header__logo">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.svg" alt="logo" loading="lazy" />
						</a>
					</div>
				</div>
				
				<nav class="header__nav">
					<a href="#" class="header__hamburger">
						<i class="icon hamburger-icon"></i>
						<i class="icon close-icon" style="display: none;"></i>
					</a>
					<div class="header__menu">
						<ul>
							<li class="menu-item menu-item-has-children">
								<a href="#">Solutions</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="#">Patient Eligibility Verification</a></li>
									<li class="menu-item"><a href="#">Denial Management</a></li>
									<li class="menu-item"><a href="#">Account Receivable (AR) Services</a></li>
									<li class="menu-item"><a href="#">Coding Management (Medical Coding Services)</a></li>
									<li class="menu-item"><a href="#">Medical Billing</a></li>
									<li class="menu-item"><a href="#">Insurance Credentialing Services</a></li>
								</ul>
							</li>
							<li class="menu-item"><a href="#">Who we Serve</a></li>
							<li class="menu-item"><a href="#">Inside Look</a></li>
						</ul>
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
					<div class="header__login">
						<a href="#" class="header__login-button">
							<i class="icon login-icon"></i>
							<span>Login</span>
							<i class="icon arrow-down-icon"></i>
						</a>
						<div class="header__login-dropdown">
							<a href="#" class="header__login-dropdown-item">
								<i class="icon patient-icon"></i>Patient
							</a>
							<a href="#" class="header__login-dropdown-item">
								<i class="icon billimd-icon"></i>BilliMD
							</a>
						</div>
					</div>
					<a href="#" class="btn header__actions-btn">Let’s Connect </a>
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
						</form>
					</div>
					<div class="header__menu">
						<ul>
							<li class="menu-item menu-item-has-children">
								<a href="#">Solutions</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="#">Patient Eligibility Verification</a></li>
									<li class="menu-item"><a href="#">Denial Management</a></li>
									<li class="menu-item"><a href="#">Account Receivable (AR) Services</a></li>
									<li class="menu-item"><a href="#">Coding Management (Medical Coding Services)</a></li>
									<li class="menu-item"><a href="#">Medical Billing</a></li>
									<li class="menu-item"><a href="#">Insurance Credentialing Services</a></li>
								</ul>
							</li>
							<li class="menu-item"><a href="#">Who we Serve</a></li>
							<li class="menu-item"><a href="#">Inside Look</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="header__hidden-top">
				<div class="header__hidden-menu1">
					<ul>
						<li class="menu-item"><a href="#testimonials">Testimonials</a></li>
						<li class="menu-item"><a href="#message">Message Our Team</a></li>
						<li class="menu-item"><a href="#blog">News & blog</a></li>
					</ul>
				</div>
				<div class="header__hidden-support">
					<span>Support</span>
					<a href="tel:18772455163"><i class="icon clock-icon"></i>1 (877) 245-5163</a>
				</div>
			</div>
	
			<div class="header__hidden-bot">
				<div class="header__policy-menu">
					<ul>
						<li class="menu-item"><a href="#">Terms of Service</a></li>
						<li class="menu-item"><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
				<div class="header__social-menu">
					<ul>
						<li class="menu-item linkedin"><a href="https://linkedin.com"></a></li>
						<li class="menu-item twitter"><a href="https://x.com"></a></li>
						<li class="menu-item facebook"><a href="https://facebook.com"></a></li>
						<li class="menu-item instagram"><a href="https://instagram.com"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>


<section class="hero">
	<div class="wrapper">
		<div class="hero__inner" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/img/top-img.png);">
			<div class="hero__img">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/top-img-mob.png" alt="billimd image" loading="lazy" />
			</div>
			<div class="hero__content">
				<h1 class="hero__title">
					Simplify Your Medical Billing.
					Accelerate Your Payments.
				</h1>
				<div class="hero__text">
					<p>At BilliMD.com, we transform the complex world of medical billing
					   into a streamlined, stress-free process, ensuring you get paid faster
					   and with minimal hassle.</p>
				</div>
				<a href="#" class="btn btn--big btn--green hero__btn">Let’s Connect</a>
			</div>
		</div>
	</div>
</section>


<section class="commitment">
	<div class="wrapper">
		<div class="commitment__inner">
			<div class="commitment__image">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/commitment.svg" alt="commitment" loading="lazy" />
			</div>
			<h2 class="section-title commitment__title">Our Commitment</h2>
			<div class="commitment__description">
				<p>
					Dedicated to making medical billing effortless and more efficient, BilliMD.com is your partner in financial success. We handle the complexities of billing and coding, so you can focus on what you do best - caring for patients.
				</p>
			</div>
		</div>
	</div>
</section>


<section class="emr">
	<div class="emr__inner">
		<div class="emr__top">
			<div class="wrapper">
				<h2 class="section-title erm__title">EHR/EMR's we work with</h2>
				<div class="emr__description">
					<p>
						At BilliMD.com we know the features and workarounds of your EHR system.
						All our RCM tools are integrated with the system you use.
					</p>
				</div>
			</div>
		</div>
		<div class="erm__bottom">
			<div class="erm__slider">
				<div class="erm__slider-track">
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/1.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/2.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/3.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/4.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/5.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/6.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/7.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/8.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/9.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/10.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/11.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/12.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/13.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/14.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/15.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/16.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/17.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/18.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/19.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/20.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/21.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/22.png" alt="logo" loading="lazy" />
					</div>
				</div>
			</div>

			<div class="erm__slider--mobile">
				<div class="erm__slide-mob">
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/1.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/2.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/3.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/4.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/5.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/6.png" alt="logo" loading="lazy" />
					</div>
				</div>
				<div class="erm__slide-mob">
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/7.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/8.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/9.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/10.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/11.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/12.png" alt="logo" loading="lazy" />
					</div>
				</div>
				<div class="erm__slide-mob">
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/13.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/14.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/15.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/16.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/17.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/18.png" alt="logo" loading="lazy" />
					</div>
				</div>
				<div class="erm__slide-mob">
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/19.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/20.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/21.png" alt="logo" loading="lazy" />
					</div>
					<div class="erm__slide">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/logos/22.png" alt="logo" loading="lazy" />
					</div>
				</div>
			</div>
		</div>
		<style>
			/*	Change 22 to count of logo images */
			.erm__slider-track {
				animation: scroll 40s linear infinite;
				display: flex;
				width: calc(240px * 22);
			}
			/*	Change 11 to half of count of logo images */
			@keyframes scroll {
				0% { transform: translateX(0); }
				100% { transform: translateX(calc(-200px * 11))}
			}
		</style>
	</div>
</section>


