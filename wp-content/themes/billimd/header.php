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


<section class="services">
	<div class="services__inner">
		<div class="wrapper">
			<h2 class="section-title services__title">Our Services</h2>
		</div>
		<div class="services__items">
			<div class="services__item">
				<div class="services__item-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/med1.svg" alt="service " loading="lazy" />
				</div>
				<h3 class="services__item-title">Medical Billing</h3>
				<div class="services__item-description">
					Experience hassle-free billing with BilliMD.com. Our state-of-the-art billing services are designed to submit accurate claims promptly, reducing delays and boosting your cash flow.
				</div>
			</div>
			<div class="services__item">
				<div class="services__item-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/med2.svg" alt="service " loading="lazy" />
				</div>
				<h3 class="services__item-title">Medical Coding</h3>
				<div class="services__item-description">
					Our precision in medical coding ensures every service you provide is correctly captured and reimbursed, contributing to a swift and efficient billing cycle.
				</div>
			</div>
			<div class="services__item">
				<div class="services__item-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/med3.svg" alt="service " loading="lazy" />
				</div>
				<h3 class="services__item-title">Provider Credentialing</h3>
				<div class="services__item-description">
					We expedite your credentialing process, ensuring a smooth and rapid transition to getting your services billed and paid.
				</div>
			</div>
			<div class="services__item">
				<div class="services__item-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/med4.svg" alt="service " loading="lazy" />
				</div>
				<h3 class="services__item-title">Accounts Receivable (AR) Calling</h3>
				<div class="services__item-description">
					Our proactive approach to AR calling means faster payment resolutions and a healthier bottom line for your practice.
				</div>
			</div>
			<div class="services__item">
				<div class="services__item-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/med5.svg" alt="service " loading="lazy" />
				</div>
				<h3 class="services__item-title">EHR Support</h3>
				<div class="services__item-description">
					Leverage our EHR expertise for an integrated billing process that's both efficient and error-free.
				</div>
			</div>
			<div class="services__item">
				<div class="services__item-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/med6.svg" alt="service " loading="lazy" />
				</div>
				<h3 class="services__item-title">Hierarchical Condition Categories (HCC)</h3>
				<div class="services__item-description">
					With our HCC coding expertise, expect precise risk adjustment, leading to quicker and appropriate reimbursements.
				</div>
			</div>
			<div class="services__item">
				<div class="services__item-image">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/med7.svg" alt="service " loading="lazy" />
				</div>
				<h3 class="services__item-title">MACRA</h3>
				<div class="services__item-description">
					Our MACRA services are designed to simplify compliance, ensuring you reap the benefits of prompt and correct Medicare payments.
				</div>
			</div>
		</div>
	</div>
</section>


<section class="insurance">
	<div class="wrapper">
		<div class="insurance__inner">
			<h2 class="section-title insurance__title">Insurance</h2>
			<div class="insurance__description">
				<p>
					Insurance companies we provide credentialing services for
				</p>
			</div>
			<div class="insurance__logos">
				<div class="insurance__logos-slide">
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/1.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/2.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/3.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/4.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/5.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/6.png" alt="logo" loading="lazy" />
					</div>
				</div>
				<div class="insurance__logos-slide">
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/7.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/8.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/9.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/10.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/11.png" alt="logo" loading="lazy" />
					</div>
					<div class="insurance__logo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/ins/12.png" alt="logo" loading="lazy" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="testimonials">
	<div class="testimonials__inner">
		<div class="wrapper">
			<h2 class="section-title testimonials__title">Testimonials</h2>
			<div class="testimonials__description">
				<p>
					Discover how BilliMD.com has revolutionized billing for practices like yours – making it smoother, quicker, and more reliable.
				</p>
			</div>
		</div>
		<div class="testimonials__items">
			<div class="testimonials__item">
				<div class="testimonials__item-text">
					I want to express my sincere appreciation for the outstanding medical service I received at billiMD. The doctors and nurses went above and beyond to ensure my well-being, and their dedication to providing personalized and comprehensive care was evident. Thank you for making a difficult time more manageable.
				</div>
				<div class="testimonials__item-author">
					<div class="testimonials__photo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/user1.png" alt="user" loading="lazy" />
					</div>
					<div class="testimonials__info">
						<div class="testimonials__name">Jan Siemiński</div>
						<div class="testimonials__position ">Surgeon</div>
					</div>
				</div>
			</div>
			<div class="testimonials__item">
				<div class="testimonials__item-text">
					I recently had a positive experience with billiMD and couldn't be happier with the results. The medical team was thorough in their assessment, took the time to explain everything to me, and made sure I felt supported every step of the way. I highly recommend their services to anyone seeking top-notch medical care.
				</div>
				<div class="testimonials__item-author">
					<div class="testimonials__photo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/user2.png" alt="user" loading="lazy" />
					</div>
					<div class="testimonials__info">
						<div class="testimonials__name">Linda Karlin</div>
						<div class="testimonials__position ">Otorhinolaryngologist</div>
					</div>
				</div>
			</div>
			<div class="testimonials__item">
				<div class="testimonials__item-text">
 					The level of professionalism and expertise at billiMD is truly commendable. From the moment I walked in, the staff made me feel welcomed and assured. The doctors not only treated my condition effectively but also took the time to address my concerns and answer all my questions. I am grateful for the exceptional care I received.
				</div>
				<div class="testimonials__item-author">
					<div class="testimonials__photo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/user3.png" alt="user" loading="lazy" />
					</div>
					<div class="testimonials__info">
						<div class="testimonials__name">Hilton Chen</div>
						<div class="testimonials__position ">Surgeon</div>
					</div>
				</div>
			</div>
			<div class="testimonials__item">
				<div class="testimonials__item-text">
					I recently had a positive experience with billiMD and couldn't be happier with the results. The medical team was thorough in their assessment, took the time to explain everything to me, and made sure I felt supported every step of the way. I highly recommend their services to anyone seeking top-notch medical care.
				</div>
				<div class="testimonials__item-author">
					<div class="testimonials__photo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/user2.png" alt="user" loading="lazy" />
					</div>
					<div class="testimonials__info">
						<div class="testimonials__name">Linda Karlin</div>
						<div class="testimonials__position ">Otorhinolaryngologist</div>
					</div>
				</div>
			</div>
			<div class="testimonials__item">
				<div class="testimonials__item-text">
					The level of professionalism and expertise at billiMD is truly commendable. From the moment I walked in, the staff made me feel welcomed and assured. The doctors not only treated my condition effectively but also took the time to address my concerns and answer all my questions. I am grateful for the exceptional care I received.
				</div>
				<div class="testimonials__item-author">
					<div class="testimonials__photo">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/user3.png" alt="user" loading="lazy" />
					</div>
					<div class="testimonials__info">
						<div class="testimonials__name">Hilton Chen</div>
						<div class="testimonials__position ">Surgeon</div>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonials__pagination">
		</div>
	</div>
</section>


<section class="blog-block">
	<div class="blog-block__inner">
		<div class="wrapper">
			<h2 class="section-title blog-block__title">Blog</h2>
			<div class="blog-block__description">
				<p>
					Stay informed with our insightful blog – your resource for the latest in medical billing, coding trends, and healthcare management tips.
				</p>
			</div>
		</div>
		<div class="blog-block__slider-wrap">
			<div class="wrapper">
				<div class="blog-block__items">
					<div class="blog-block__item">
						<a href="#" class="blog-block__img">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/blog1.png" alt="blog" loading="lazy" />
						</a>
						<div class="blog-block__item-bottom">
							<div class="blog-block__item-date">Dec 15</div>
							<a href="#"><h3 class="blog-block__item-title">What It’s Like Witnessing Life Coming into Being</h3></a>
							<div class="blog-block__item-text">
								Her face was covered in sweat, she was breathing heavily, her screams intensifying the tense aura of the labour room.
							</div>
						</div>
					</div>
					<div class="blog-block__item">
						<a href="#" class="blog-block__img">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/blog2.png" alt="blog" loading="lazy" />
						</a>
						<div class="blog-block__item-bottom">
							<div class="blog-block__item-date">Nov 28</div>
							<h3 class="blog-block__item-title">The Misuse of Medical Leave: A Story of Irresponsibility</h3>
							<div class="blog-block__item-text">
								Firstly, this article is not meant to bring anyone down. Everyone is imperfect, and when it comes to health, we all have different levels…
							</div>
						</div>
					</div>
					<div class="blog-block__item">
						<a href="#" class="blog-block__img">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/blog3.png" alt="blog" loading="lazy" />
						</a>
						<div class="blog-block__item-bottom">
							<div class="blog-block__item-date">Nov 18</div>
							<h3 class="blog-block__item-title">This Doctor Disappeared, But Her Room Tells a Bizarre Stor…</h3>
							<div class="blog-block__item-text">
								Shocking Disappearance of a Doctor and a Room That Changed Overnight — Can You Solve the
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="contact-us">
	<div class="wrapper">
		<div class="contact__inner">
			<h2 class="section-title contact__title">Contact Us</h2>
			<div class="contact__description">
				<p>
					Embark on a journey to simpler, faster medical billing. Connect with us today and let's discuss how we can enhance your practice's financial health.
				</p>
			</div>
			<div class="contact__form">
				<?php echo do_shortcode('[contact-form-7 id="d4a4d15" title="Home Contact form in block"]'); ?>
			</div>
		</div>
	</div>
</section>