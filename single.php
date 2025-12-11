<?php
/**
 * Single post template
 */
get_header();
?>

<main class="site-main single-post">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">Par <?php the_author(); ?> — <?php the_date(); ?></div>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
    <?php
        endwhile;
    else :
    ?>
        <p>Aucun contenu trouvé.</p>
    <?php
    endif;
    ?>
</main>

<?php
get_footer();
?>
