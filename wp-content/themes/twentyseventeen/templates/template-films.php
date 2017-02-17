<?php
/*
 * Template Name: Films Page
 */
get_header(); ?>

<div class="wrap">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
	<?php $arg = array(
		'post_type'	    => 'movies',
		'order'		    => 'ASC',
		'orderby'	    => 'menu_order',
		'posts_per_page'    => -1
	);
	$films_query = new WP_Query( $arg );
	if ( $films_query->have_posts() ) : ?>
		<div class="entry-content">
		<?php $i = 0 ?>
			<?php while ( $films_query->have_posts() ) : $films_query->the_post();
			 ?><!-- BEGIN of Post -->
				<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
				<h3><?php the_title(); ?></h3>
				<!-- <pre>

				<?php var_dump(); ?>
				</pre> -->
				<h4 class="subtitle"><?php echo get_post_meta($films_query->posts[$i]->ID, "subtitle", true); ?></h4>
				<?php $terms = get_the_terms($films_query->posts[$i]->ID,'movies_categories' ) ;  ?>
				<p>Жанры фильма: <?php foreach ($terms as $term) { echo $term->name;  } ?> </p>
				<?php the_content(); ?>

				<?php $i++ ?>
			<?php endwhile; ?><!-- END of Post -->
		</div>
	<?php endif; wp_reset_query(); ?>
</div>




<?php get_footer(); ?>