<?php
/**
 * Footer template for Christ Embassy Tema Newtown theme.
 *
 * @package CE_Tema_Newtown
 */
?>

<!-- Footer Section -->
<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<!-- Col 1: Brand & Mission -->
			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ce-logo.svg' ); ?>" alt="Christ Embassy" class="footer-logo-img">
					<div>
						<div class="footer-logo-text">Christ Embassy</div>
						<div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase; letter-spacing:0.05em;">Tema Newtown • Ghana</div>
					</div>
				</a>
				<p class="footer-mission">
					Taking the divine presence of God to the nations of the world and demonstrating the character of the Holy Spirit. Walking in victory, dominion, and the higher life in Christ Jesus.
				</p>
				<div style="display:flex; align-items:center; gap:8px;">
					<span class="live-indicator-dot"></span>
					<span style="font-size:0.82rem; color:#E2E8F0; font-weight:600;">Atmosphere of Miracles Every Sunday</span>
				</div>
			</div>

			<!-- Col 2: Connect -->
			<div>
				<h4 class="footer-heading">Connect</h4>
				<ul class="footer-links">
					<li><a href="#hero">Home</a></li>
					<li><a href="#" data-modal-target="modal-visit">Leadership & Pastors</a></li>
					<li><a href="#upcoming-events">Upcoming Events</a></li>
					<li><a href="#moments">Testimonies & Moments</a></li>
					<li><a href="#" data-modal-target="modal-giving">Online Giving & Partnership</a></li>
					<li><a href="#" data-modal-target="modal-first-timer">Foundation School</a></li>
					<li><a href="#" data-modal-target="modal-first-timer">Join a Cell Fellowship</a></li>
				</ul>
			</div>

			<!-- Col 3: Church Location & Contact -->
			<div>
				<h4 class="footer-heading">Church Location & Contact</h4>
				<div class="footer-contact-info">
					<div class="footer-contact-item">
						<svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
						<span>Opposite Manhean Senior High Technical School, Manhean Road, Tema Newtown, Ghana</span>
					</div>
					<div class="footer-contact-item">
						<svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
						<a href="tel:+233208591214" style="color:#CBD5E1; text-decoration:none;">+233 20 859 1214</a>
					</div>
					<div class="footer-contact-item">
						<svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
						<span>Sundays: 7:00 AM & 9:30 AM<br>Wednesdays: 6:00 PM</span>
					</div>
					<div style="margin-top:10px;">
						<a href="https://wa.me/233208591214" target="_blank" rel="noopener noreferrer" class="btn btn-dark-pill btn-sm" style="display:inline-flex;">
							Chat on WhatsApp
						</a>
					</div>
				</div>
			</div>

			<!-- Col 4: Ministry Network -->
			<div>
				<h4 class="footer-heading">LoveWorld Network</h4>
				<ul class="footer-links">
					<li><a href="https://christembassy.org/" target="_blank" rel="noopener noreferrer">Christ Embassy Online</a></li>
					<li><a href="https://healingstreams.tv/" target="_blank" rel="noopener noreferrer">Healing Streams TV</a></li>
					<li><a href="https://enterthehealingschool.org/" target="_blank" rel="noopener noreferrer">The Healing School</a></li>
					<li><a href="https://cect.co.za/" target="_blank" rel="noopener noreferrer">Christ Embassy Cape Town</a></li>
					<li><a href="https://rhapsodyofrealities.org/" target="_blank" rel="noopener noreferrer">Rhapsody of Realities</a></li>
					<li><a href="https://pastorchrisdigitallibrary.org/" target="_blank" rel="noopener noreferrer">Pastor Chris Digital Library (PCDL)</a></li>
					<li><a href="https://ceflix.org/" target="_blank" rel="noopener noreferrer">CeFlix Broadcast Platform</a></li>
				</ul>
			</div>
		</div>

		<!-- Footer Bottom Legal & Copyright -->
		<div class="footer-bottom">
			<div>
				&copy; <?php echo esc_html( date( 'Y' ) ); ?> Christ Embassy Tema Newtown. All rights reserved.
			</div>
			<div class="footer-legal-links">
				<a href="#">Privacy Policy</a>
				<a href="#">Terms of Worship</a>
				<a href="#" data-modal-target="modal-visit">Atmosphere of Miracles</a>
			</div>
		</div>
	</div>
</footer>

<!-- ═════════ INTERACTIVE MODALS ═════════ -->

<!-- Modal: Watch Live Stream -->
<div id="modal-live" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="live-title">
	<div class="modal-container" style="max-width:800px;">
		<button class="modal-close-btn" aria-label="Close Live Stream Modal">&times;</button>
		
		<div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
			<span class="live-indicator-dot" style="background:#F43F5E; box-shadow:0 0 10px #F43F5E;"></span>
			<span style="font-size:0.8rem; font-weight:800; color:#F43F5E; letter-spacing:0.08em; text-transform:uppercase;">Live Broadcast Feed</span>
		</div>
		<h2 id="live-title" class="modal-title">Live Service Stream</h2>
		<p class="modal-subtitle">Experience the manifestation of God's Word with the saints at Christ Embassy Tema Newtown.</p>

		<div class="video-responsive-wrap">
			<!-- Live Player Embed with fallbacks (CeFlix / YouTube Live / Healing Streams) -->
			<iframe 
				src="https://www.youtube-nocookie.com/embed/live_stream?channel=UCXw5Z18rK6nE8QW9R6lQ2wA" 
				title="Christ Embassy Live Stream" 
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
				allowfullscreen>
			</iframe>
		</div>

		<!-- Interactive Prayer of Salvation and Giving bar -->
		<div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.1); border-radius:var(--radius-md); padding:20px; margin-bottom:16px;">
			<h4 style="font-size:1.05rem; font-weight:700; color:#FFF; margin-bottom:6px;">Prayer of Salvation</h4>
			<p style="font-size:0.9rem; color:#CBD5E1; line-height:1.5; margin-bottom:12px;">
				<em>"O Lord God, I believe with all my heart in Jesus Christ, Son of the living God. I believe He died for me and God raised Him from the dead. I confess with my mouth that Jesus Christ is Lord of my life..."</em>
			</p>
			<div style="display:flex; gap:12px; flex-wrap:wrap;">
				<a href="#" class="btn btn-primary btn-sm" data-modal-target="modal-first-timer">I Said This Prayer!</a>
				<a href="#" class="btn btn-outline-glass btn-sm" data-modal-target="modal-giving">Send Live Offering</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal: Plan Your Visit & Services -->
<div id="modal-visit" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="visit-title">
	<div class="modal-container">
		<button class="modal-close-btn" aria-label="Close Visit Modal">&times;</button>
		<div class="section-label">YOU ARE WELCOME HERE</div>
		<h2 id="visit-title" class="modal-title">Plan Your Visit</h2>
		<p class="modal-subtitle">We have saved a special seat for you this week at Christ Embassy Tema Newtown.</p>

		<!-- Service Times Grid -->
		<div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:24px;">
			<div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.1); border-radius:var(--radius-md); padding:16px;">
				<div style="font-size:0.75rem; color:var(--accent-amber); font-weight:700; text-transform:uppercase;">Sunday Services</div>
				<div style="font-size:1.1rem; font-weight:700; color:#FFF; margin:4px 0;">1st Service: 7:00 AM</div>
				<div style="font-size:1.1rem; font-weight:700; color:#FFF;">2nd Service: 9:30 AM</div>
				<div style="font-size:0.8rem; color:var(--text-muted); margin-top:4px;">Atmosphere of Miracles, Praise & Word</div>
			</div>
			<div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.1); border-radius:var(--radius-md); padding:16px;">
				<div style="font-size:0.75rem; color:var(--accent-purple); font-weight:700; text-transform:uppercase;">Midweek Service</div>
				<div style="font-size:1.1rem; font-weight:700; color:#FFF; margin:4px 0;">Wednesday: 6:00 PM</div>
				<div style="font-size:0.85rem; color:#CBD5E1;">Bible Study & Communion</div>
				<div style="font-size:0.8rem; color:var(--text-muted); margin-top:4px;">Deep revelation in God's Word</div>
			</div>
		</div>

		<!-- Location Information -->
		<div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.1); border-radius:var(--radius-md); padding:18px; margin-bottom:24px;">
			<div style="font-size:0.85rem; font-weight:700; color:#FFF; margin-bottom:4px;">Physical Address</div>
			<div style="font-size:0.95rem; color:#CBD5E1; margin-bottom:12px;">Opposite Manhean Senior High Technical School, Manhean Road, Tema Newtown, Ghana</div>
			<div style="display:flex; gap:12px; flex-wrap:wrap;">
				<a href="https://maps.google.com/?q=Manhean+Senior+High+Technical+School+Tema+Newtown+Ghana" target="_blank" rel="noopener noreferrer" class="btn btn-outline-glass btn-sm">
					Open in Google Maps &rarr;
				</a>
				<a href="tel:+233208591214" class="btn btn-primary btn-sm">
					Call Church Office: +233 20 859 1214
				</a>
			</div>
		</div>

		<!-- What to expect -->
		<div>
			<h4 style="font-size:1rem; font-weight:700; color:#FFF; margin-bottom:8px;">What to Expect</h4>
			<p style="font-size:0.9rem; color:#94A3B8; line-height:1.5;">
				Warm smiles, uplifting praise and worship, the life-transforming Word of God, and dedicated programs for children and teens. Our guest hosts will guide you every step of the way!
			</p>
		</div>
	</div>
</div>

<!-- Modal: Online Giving & Partnership (Ghana MoMo + Bank) -->
<div id="modal-giving" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="giving-title">
	<div class="modal-container">
		<button class="modal-close-btn" aria-label="Close Giving Modal">&times;</button>
		<div class="section-label">HONOR THE LORD WITH YOUR SUBSTANCE</div>
		<h2 id="giving-title" class="modal-title">Giving & Partnership</h2>
		<p class="modal-subtitle">Partner with Christ Embassy Tema Newtown for global soul-winning, Healing Streams outreaches, and church expansion.</p>

		<!-- MoMo & Bank Grid -->
		<div class="giving-grid">
			<!-- MTN MoMo -->
			<div class="giving-card" data-copy-text="0208591214">
				<div class="giving-card-header">
					<span style="font-weight:700; color:#FACC15;">MTN Mobile Money</span>
					<span class="giving-badge">Ghana MoMo</span>
				</div>
				<div class="giving-number">
					<span>020 859 1214</span>
					<button class="copy-badge-btn" data-copy-text="0208591214">Copy</button>
				</div>
				<div style="font-size:0.75rem; color:var(--text-muted); margin-top:4px;">Name: Christ Embassy Tema Newtown</div>
			</div>

			<!-- Telecel / Vodafone Cash -->
			<div class="giving-card" data-copy-text="0208591214">
				<div class="giving-card-header">
					<span style="font-weight:700; color:#EF4444;">Telecel Cash</span>
					<span class="giving-badge">Mobile Money</span>
				</div>
				<div class="giving-number">
					<span>020 859 1214</span>
					<button class="copy-badge-btn" data-copy-text="0208591214">Copy</button>
				</div>
				<div style="font-size:0.75rem; color:var(--text-muted); margin-top:4px;">Reference: Tithe / Offering / Partnership</div>
			</div>
		</div>

		<!-- Bank Transfer Details -->
		<div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.1); border-radius:var(--radius-md); padding:18px; margin-bottom:20px;">
			<div style="font-size:0.85rem; font-weight:700; color:#FFF; margin-bottom:6px;">Bank Wire / Direct Deposit</div>
			<div style="font-size:0.92rem; color:#CBD5E1; line-height:1.6;">
				<strong>Bank:</strong> Zenith Bank / Ecobank Ghana<br>
				<strong>Account Name:</strong> Christ Embassy Tema Newtown<br>
				<strong>Account Type:</strong> Church Operations & Partnership
			</div>
		</div>

		<div style="font-size:0.85rem; color:var(--text-muted); text-align:center;">
			<em>"Give, and it shall be given unto you; good measure, pressed down, and shaken together, and running over..."</em> — Luke 6:38
		</div>
	</div>
</div>

<!-- Modal: First-Timer / Membership Registration -->
<div id="modal-first-timer" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="connect-title">
	<div class="modal-container">
		<button class="modal-close-btn" aria-label="Close Registration Modal">&times;</button>
		<div class="section-label">FIRST TIME WITH US?</div>
		<h2 id="connect-title" class="modal-title">Take Your Seat in the Family</h2>
		<p class="modal-subtitle">Register in 30 seconds and our pastoral connection team will be in touch with you for special prayer and fellowship.</p>

		<div>
			<form id="first-timer-form">
				<div class="form-group">
					<label class="form-label" for="reg_name">Your Full Name</label>
					<input type="text" id="reg_name" name="full_name" class="form-input" placeholder="e.g. Brother Emmanuel Mensah" required>
				</div>

				<div class="form-group">
					<label class="form-label" for="reg_phone">Phone / WhatsApp Number</label>
					<input type="tel" id="reg_phone" name="phone" class="form-input" placeholder="e.g. +233 20 859 1214" required>
				</div>

				<div class="form-group">
					<label class="form-label" for="reg_interest">How Can We Serve You?</label>
					<select id="reg_interest" name="interest" class="form-select">
						<option value="first_time">I'm visiting for the first time</option>
						<option value="salvation">I recently gave my life to Christ</option>
						<option value="foundation">Enroll in Foundation School</option>
						<option value="cell_group">Join a Cell Fellowship in Tema</option>
						<option value="prayer">I need urgent prayer / pastoral guidance</option>
					</select>
				</div>

				<div class="form-group">
					<label class="form-label" for="reg_prayer">Prayer Request or Comment (Optional)</label>
					<textarea id="reg_prayer" name="prayer" class="form-textarea" rows="3" placeholder="Share anything you'd like our pastor to pray with you about..."></textarea>
				</div>

				<button type="submit" class="btn btn-primary" style="width:100%; margin-top:8px;">
					Complete Registration &rarr;
				</button>
			</form>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
