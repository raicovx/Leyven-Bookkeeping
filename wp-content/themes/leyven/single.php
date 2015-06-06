<?php get_header(); ?>
	<div id="the_heading">
		<div class="the_heading the_width">
			<div class="slider">
                 <?php $title = get_the_title();
                    if (is_front_page()) {
                 include('slides/home/slides-home.php'); 
                    }else if($title == "Bookkeeping"){
                        include('slides/bookkeeping/slides-bookkeeping.php'); 
                    };
                        ?>
            </div>
		</div>
	</div>
	<div class="the_main the_width">
		<div id="blog">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="entry">  
					<?php the_post_thumbnail(); ?>
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
				<div class="comments-template">
					<?php /* comments_template(); */ ?>
				</div>
		</div>
		<?php endwhile; ?>
			<div class="navigation"> 
				<?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
			</div>
		<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
<script> $('.slider').slider({full_width: true, height:400, indicators: false});</script>
<?php get_footer(); ?>