<?php
/**
 * Index template — affiche la boucle principale des posts
 */
get_header();

?>
<main class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta">Par <?php the_author(); ?> — <?php the_date(); ?></div>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
			</article>
	<?php
		endwhile;

		the_posts_pagination(array(
			'mid_size' => 2,
			'prev_text' => __('&laquo; Précédent', 'beeharmony'),
			'next_text' => __('Suivant &raquo;', 'beeharmony'),
		));

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