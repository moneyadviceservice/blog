<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Simone
 */

get_header(); ?>

	<main id="main" class="l-main site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

      <?php
      if ( get_the_author_meta( 'description' ) ) {
          echo '<hr>';
          echo '<div class="author-index shorter">';
          get_template_part('inc/author','box');
          echo '</div>';
      }
      ?>

		<?php simone_post_nav(); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
		?>

	<?php endwhile; // end of the loop. ?>

	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
