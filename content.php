<?php
/**
 * @package Simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('l-article'); ?>>
    <header class="l-article__header">
        <?php

            /* translators: used between list items, there is a space after the comma */
            $category_list = get_the_category_list( __( ', ', 'simone' ) );

            if ( simone_categorized_blog() ) {
                echo '<div class="category-list">' . $category_list . '</div>';
            }
        ?>

    	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    	<?php if ( 'post' == get_post_type() ) : ?>
    	<div class="entry-meta">
    		<?php simone_posted_on(); ?>
                <?php
                if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {
                    echo '<span class="comments-link">';
                    comments_popup_link( __( 'Leave a comment', 'simone' ), __( '1 Comment', 'simone' ), __( '% Comments', 'simone' ) );
                    echo '</span>';
                }
                ?>
                <?php edit_post_link( sprintf( ' | %s', __( 'Edit', 'simone' ) ), '<span class="edit-link">', '</span>' ); ?>
    	</div>
    	<?php endif; ?>
    </header>

    <?php
    if( $wp_query->current_post == 0 && !is_paged() && is_front_page() ) {
        echo '<div class="l-article__content">';
        the_content( __( '', 'simone' ) );
        echo '</div>';
        echo '<footer class="l-article__footer">';
        echo '<a href="' . get_permalink() . '" title="' . _x('Read ', 'First part of "Read *article title* in title tag of Read more link', 'simone') . get_the_title() . '" rel="bookmark">' . __('Read <span aria-hidden="true">the article</span>', 'simone') . '<span class="screen-reader-text"> ' . get_the_title() . '<span></a>';
        echo '</footer><!-- .entry-footer -->';
    } else { ?>
        <div class="l-article__content">
            <?php the_excerpt(); ?>
        </div>
        <footer class="l-article__footer">
	<?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'simone') . get_the_title() . '" rel="bookmark">' . __('Continue Reading', 'simone') . '<span class="screen-reader-text"> ' . get_the_title() . '<span></a>'; ?>
        </footer>
    <?php } ?>
</article>
