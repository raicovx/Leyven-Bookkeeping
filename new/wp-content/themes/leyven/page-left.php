<?php
/*
	Template Name: left page template
*/
?>
<?php get_header(); ?>
	<div id="the_heading">
		<div class="the_heading the_width">
			<h1><?php $key="custom_tag_header"; echo get_post_meta($post->ID, $key, true); ?></h1>
		</div>
	</div>
	<div class="the_main the_width">
		<div class="the_clear"></div>
		<div id="blog">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="post">
					<div class="entry">
						<?php the_content(); ?>
						<div class="postmetadata">
							<br /><br />
							<?php 	wp_link_pages(array(
										'before' => '<div class="page_linker"><div class="page_linker_inside">' . __(''),
										'after' => '</div></div>',
										'next_or_number' => 'next_and_number',
										'nextpagelink' => __(' Next &raquo; '),
										'previouspagelink' => __(' &laquo; Back '),
										'pagelink' => '%',
										'echo' => 1 )
									); ?><br />
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="navigation">
				<?php posts_nav_link(); ?>
			</div>
		<?php endif; ?>
		</div>
		<?php get_sidebar( "second" ); ?>
	</div>
<?php get_footer(); ?>