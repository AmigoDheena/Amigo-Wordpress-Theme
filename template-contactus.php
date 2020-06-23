<?php
/*
 Template name: Contact Us
 */
get_header('contact');
if (have_posts()){
	while (have_posts()){
		the_post(); ?>
		<div class="container">
			<div class="row">
	            <div class="col-lg-6">
					<?php	the_content(); ?>
	            </div>
					<p>This is side coloum</p>
				<div class="col-lg-6">
				</div>
			</div>
		</div>

	<?php
	}
}
get_footer();