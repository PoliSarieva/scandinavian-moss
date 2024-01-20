<?php
/**
 * Template Name: Blog Template
 */
?>

<?php 
$blog_query_args = array (
    'post-type'     => 'post',
    'post_status'   => 'publish',
    'post_per_page' => 5,
    'paged'         => get_query_var( 'paged' ),
);

$blog_query = new WP_Query( $blog_query_args );
//var_dump( $blog_query );
?>

<?php get_header(); ?>
			
			<main class="main-content">
				<div class="container">
					<div class="page-head" data-bg-image="http://localhost/softuni/wp-content/themes/softuni/dummy/DSC_0554.jpg">
						<div class="breadcrumbs">
                        <a href="<?php echo get_home_url( '/' ); ?>">home</a>
							<span><?php the_archive_title(); ?></span>
						</div>
					</div>

					<div class="page">
						
					<?php if ( $blog_query -> have_posts () ) : ?>
                        <?php while ( $blog_query -> have_posts() ) : $blog_query -> the_post(); ?>
                        
							<?php get_template_part( 'partials/content', 'post' ); ?>
						<?php endwhile; ?>

						 <?php
                         $GLOBALS['wp_query'] = $blog_query;
						the_posts_pagination( array(
							'mid_size'  => 2,
							'prev_text' => __( 'previous', 'softuni' ),
							'next_text' => __( 'Next', 'softuni' ),
						) );
						?>				

					<?php else : ?>

					Sorry, there is nothing I can show.

					<?php endif; ?>

                    <?php wp_reset_postdata(); ?>
					</div> <!-- .page -->
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<?php get_footer(); ?>