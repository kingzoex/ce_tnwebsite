<?php
/**
 * Header template for Christ Embassy Tema Newtown theme.
 *
 * @package CE_Tema_Newtown
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="theme-color" content="#08090E">
	<meta name="description" content="Christ Embassy Tema Newtown: Experience live services, vibrant worship, divine encounters, and the higher life in Christ Jesus.">
	<link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ce-logo.svg' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Ambient Lighting Effects -->
<div class="ambient-glow ambient-top-left"></div>
<div class="ambient-glow ambient-top-right"></div>
<div class="ambient-glow ambient-mid-center"></div>

<!-- Minimalist Top Bar -->
<header class="site-top-bar">
	<div class="container top-bar-inner">
		<div class="top-brand">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none; display:flex; align-items:center; gap:10px;">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ce-logo.svg' ); ?>" alt="Christ Embassy" style="width:36px; height:36px;">
				<span class="top-brand-badge">Christ Embassy • Tema Newtown</span>
			</a>
		</div>
		<div class="top-actions">
			<a href="#" class="btn btn-outline-glass btn-sm" data-modal-target="modal-live" style="color:#F43F5E; border-color:rgba(244,63,94,0.3);">
				<span class="live-indicator-dot" style="background:#F43F5E; box-shadow:0 0 8px #F43F5E;"></span>
				Watch Live
			</a>
			<a href="https://wa.me/233208591214" target="_blank" rel="noopener noreferrer" class="btn btn-dark-pill btn-sm" style="display:none;" id="top-phone-link">
				+233 20 859 1214
			</a>
		</div>
	</div>
</header>

<!-- Floating Glassmorphic Dock Navigation -->
<div class="floating-dock-wrapper">
	<nav class="floating-dock" aria-label="Main Navigation">
		<!-- Brand Crest -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="dock-logo">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ce-logo.svg' ); ?>" alt="Christ Embassy" class="dock-logo-img">
			<div class="dock-brand-text">
				<span class="dock-brand-title">Christ Embassy</span>
				<span class="dock-brand-sub">Tema Newtown</span>
			</div>
		</a>

		<!-- Dock Navigation Links -->
		<ul class="dock-links">
			<li><a href="#hero" class="dock-link active">Home</a></li>
			<li><a href="#" class="dock-link dock-link-live" data-modal-target="modal-live">Live</a></li>
			<li><a href="#sunday-service" class="dock-link" data-modal-target="modal-visit">Services</a></li>
			<li><a href="#upcoming-events" class="dock-link">Events</a></li>
			<li><a href="#moments" class="dock-link">Moments</a></li>
			<li><a href="#topics" class="dock-link">Channels</a></li>
			<li><a href="#" class="dock-link" data-modal-target="modal-giving">Give</a></li>
			<li><a href="#" class="dock-link" data-modal-target="modal-first-timer">Connect</a></li>
		</ul>

		<!-- Dock Right Action -->
		<div class="dock-action-btn">
			<a href="#" class="btn btn-primary btn-sm" data-modal-target="modal-first-timer">
				Sign In
			</a>
		</div>

		<!-- Mobile Hamburger -->
		<button class="mobile-nav-toggle" aria-label="Toggle Navigation Menu">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
				<line x1="3" y1="12" x2="21" y2="12"></line>
				<line x1="3" y1="6" x2="21" y2="6"></line>
				<line x1="3" y1="18" x2="21" y2="18"></line>
			</svg>
		</button>
	</nav>
</div>

<!-- Mobile Navigation Drawer -->
<div id="mobile-nav-drawer" class="mobile-drawer">
	<div class="mobile-drawer-header">
		<div style="display:flex; align-items:center; gap:12px;">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ce-logo.svg' ); ?>" alt="Christ Embassy" style="width:40px; height:40px;">
			<div>
				<div style="font-family:var(--font-display); font-weight:800; font-size:1.1rem; color:#FFF;">Christ Embassy</div>
				<div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Tema Newtown</div>
			</div>
		</div>
		<button class="modal-close-btn mobile-drawer-close" aria-label="Close Navigation Menu">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
				<line x1="18" y1="6" x2="6" y2="18"></line>
				<line x1="6" y1="6" x2="18" y2="18"></line>
			</svg>
		</button>
	</div>

	<ul class="mobile-drawer-links">
		<li><a href="#hero" class="mobile-drawer-link">Home <span>&rarr;</span></a></li>
		<li><a href="#" class="mobile-drawer-link" data-modal-target="modal-live" style="color:#F43F5E;">Watch Live Stream <span>●</span></a></li>
		<li><a href="#sunday-service" class="mobile-drawer-link" data-modal-target="modal-visit">Plan A Visit / Services <span>&rarr;</span></a></li>
		<li><a href="#upcoming-events" class="mobile-drawer-link">Upcoming Events <span>&rarr;</span></a></li>
		<li><a href="#moments" class="mobile-drawer-link">Moments Worth Replaying <span>&rarr;</span></a></li>
		<li><a href="#topics" class="mobile-drawer-link">Channels (Healing, Faith, Worship) <span>&rarr;</span></a></li>
		<li><a href="#" class="mobile-drawer-link" data-modal-target="modal-giving">Giving & Partnership (MoMo) <span>&rarr;</span></a></li>
		<li><a href="#" class="mobile-drawer-link" data-modal-target="modal-first-timer">First Time? Connect <span>&rarr;</span></a></li>
	</ul>

	<div style="margin-top:auto; padding-top:24px; border-top:1px solid rgba(255,255,255,0.08);">
		<div style="font-size:0.85rem; color:var(--text-muted); margin-bottom:8px;">Church Location:</div>
		<div style="font-size:0.95rem; color:#E2E8F0; margin-bottom:16px;">Opposite Manhean Senior High Technical School, Manhean Road, Tema Newtown</div>
		<a href="tel:+233208591214" class="btn btn-outline-glass btn-sm" style="width:100%;">Call +233 20 859 1214</a>
	</div>
</div>
