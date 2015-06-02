<?php
/*
Template Name: 404 Page Template
*/
?>
<?php get_header(); ?>
	<div id="the_heading">
		<div class="the_heading the_width">
			<h1><?php $key="custom_tag_header"; echo get_post_meta($post->ID, $key, true); ?></h1>
		</div>
	</div>
	<div class="the_main the_width">
		<div id="blog">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<div class="entry">
					<div id="content" class="narrowcolumn">
					<center><h2 class="center">Error 404</h2></center>
					<img src="<?php bloginfo('template_directory'); ?>/images/Mario_Slinging_Pharmies.png" alt="404" />
					<center><h2>Not Found</h2></center>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
				<div class="navigation">
					<?php posts_nav_link(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>