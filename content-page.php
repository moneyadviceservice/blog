<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('l-article'); ?>>
        <?php
    if (has_post_thumbnail()) {
        echo '<div class="single-post-thumbnail clear">';
        echo '<div class="image-shifter">';
        simone_the_responsive_thumbnail( get_the_ID() );
        echo '</div>';
        echo '</div>';
    }
    ?>
	<header class="l-article__header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="l-article__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'simone' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php edit_post_link( __( 'Edit', 'simone' ), '<footer class="l-article__content"><span class="edit-link">', '</span></footer>' ); ?>
</article>
