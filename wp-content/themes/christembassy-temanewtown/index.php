<?php
/**
 * Main Template File (Fallback)
 *
 * @package CE_Tema_Newtown
 */

get_header();
?>

<main id="main-content" style="padding: 140px 0 100px;">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: rgba(14,17,26,0.8); border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 40px; margin-bottom: 30px;">
					<h1 class="section-title" style="margin-bottom: 20px;"><?php the_title(); ?></h1>
					<div class="entry-content" style="color: #CBD5E1; font-size: 1.05rem; line-height: 1.8;">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<div style="text-align: center; padding: 60px 0;">
				<h2 class="section-title">Welcome to Christ Embassy Tema Newtown</h2>
				<p class="section-subtitle">Experience the higher life in Christ.</p>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
