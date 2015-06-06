<?php
/*
	Template Name: right page template
*/
?>
<?php get_header(); ?>
	<div id="the_heading">
		<div class="the_heading">
			<div class="slider">
                 <?php $title = get_the_title();
                    if (is_front_page()) {
                 include('slides/home/slides-home.php'); 
                    }else if($title == "Bookkeeping"){
                        include('slides/bookkeeping/slides-bookkeeping.php'); 
                        }; ?>
            </div>
		</div>
	</div>
	<div class="the_main the_width">
		<div class="center_container">
			<div class="row">
			<div id="blog">
				<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<div class="post">
						<div class="entry">
							<?php the_content(); ?>
                            <div class="scalingSideBar col s12 m4 l4 card noMarginTop">
			<?php get_sidebar( "right" ); ?>
                </div>
							<div class="postmetadata">
								<?php 	
									wp_link_pages(array(
										'before' => '<div class="page_linker"><div class="page_linker_inside">' . __(''),
										'after' => '</div></div>',
										'next_or_number' => 'next_and_number',
										'nextpagelink' => __(' Next &raquo; '),
										'previouspagelink' => __(' &laquo; Back '),
										'pagelink' => '%',
										'echo' => 1 )
									);
								?>
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
		</div>
	</div>
<script> $('.slider').slider({full_width: true, height:400, indicators: false});</script>
<?php get_footer(); ?>