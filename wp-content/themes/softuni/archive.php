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
						
					<?php if ( have_posts () ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        
                        <div class="entry-title">
                            <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></div>
						<div class="row">
							<div class="feature icon-left">
								<div class="feature-icon"><i class="icon-8"></i></div>
								<div class="feature-detail">
									<p>
										<?php the_excerpt(); ?>
									</p>
								</div>
						    </div>
						<?php endwhile; ?>

					<?php else : ?>

					Sorry, there is nothing I can show.

					<?php endif; ?>
						</div> <!-- .row -->


					</div> <!-- .page -->
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<?php get_footer(); ?>