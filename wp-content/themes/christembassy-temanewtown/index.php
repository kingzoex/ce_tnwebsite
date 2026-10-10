<?php
/**
 * Main Template File (Fallback)
 *
 * @package CE_Tema_Newtown
 */

get_header();
?>

<main id="main-content" class="page-archive">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
					<h1 class="section-title u-mb-20"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="empty-state">
				<h2 class="section-title">Welcome to Christ Embassy Tema Newtown</h2>
				<p class="section-subtitle">Experience the higher life in Christ.</p>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
