
<footer class="site-footer">
				
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<address><strong>Company name. INC</strong> <br>590 Avenue Street, New York</address>
								<a href="tel:(423)324424534">(423) 324 424 534</a>
								<a href="mailto:office@companyname.com">office@companyname.com</a>
							</div>
						</div>
						<div class="col-md-3">
						<?php 
							if ( is_active_sidebar( 'footer-1' ) ) {
								get_sidebar( 'footer-1' ); 
							}
						?>
						</div>
						
						<div class="col-md-5">
							<div class="widget">
								<div class="subscribe-form">
									<form action="#">
										<input type="email" placeholder="Enter your email">
										<input type="submit" value="Subscribe">
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="colophon"><p>Copyright 2014 Company name. Designed by Themezy. All rights reserved.</p></div>
				</div> <!-- .container -->

			</footer> <!-- .site-footer -->

		</div>

		<?php wp_footer(); ?>
		
	</body>

</html>