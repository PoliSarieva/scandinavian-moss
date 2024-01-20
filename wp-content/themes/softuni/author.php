<?php get_header(); ?>
			
			<main class="main-content">
				<div class="container">
					<div class="page-head" data-bg-image="http://localhost/softuni/wp-content/themes/softuni/dummy/DSC_0554.jpg">
						<div class="breadcrumbs">
							<a href="<?php echo get_home_url( '/' ); ?>">home</a>
							<span><?php the_title(); ?></span>
						</div>
					</div>

					<div class="page">
						THIS IS AUTHOR PHP
					<?php if ( have_posts () ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
						
							<?php get_template_part( 'partials/content', 'post' ); ?>
                        
						<?php endwhile; ?>

					<?php else : ?>

					Sorry, there is nothing I can show.

					<?php endif; ?>
						
					</div> <!-- .page -->
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<?php get_footer(); ?>