<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Demo_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>

			<?php get_template_part('template-parts/content', 'Pika'); 
			?>
 <!-- 			<?php while ( have_posts() ) : the_post(); ?>
				<div class="myPost">
				<div class="myPostTitle">
				<?php  the_title();?>
				<?php $pfx_date = get_the_date( $format, $post_id ); ?>	

				<?php 
				echo ('<br>');
				echo $pfx_date; ?>
				</div>
 -->
<!-- 				<div class="myPostContent">
				<?php  the_title();?>
					
				</div>
				</div>
 --><!-- 				<?php 
						
						// echo "<div class="myPost">";
						// echo the_title();
						// echo "</div>"
				?> -->



			<?php endwhile; ?>

			<?php rewind_posts();?>

			<?php

				$arg =  array( 'post_type' => 'post_review', 'posts_per_page'=> 10 );
				$loop = new WP_Query( $args );
				while ($loop->have_posts()): $loop->the_post();

					the_title();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';

			endwhile;




		?>



			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
