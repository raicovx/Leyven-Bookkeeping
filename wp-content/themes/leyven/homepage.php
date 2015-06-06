<?php
/*
	Template Name: Home Page Template
*/
?>
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
			<script type="text/javascript">//<![CDATA[ 
				jQuery(window).load(function(){
					jQuery('.cps1').click(function() {
						jQuery('.cps1_pop').fadeToggle();
						jQuery('.cps1_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps2').click(function() {
						jQuery('.cps2_pop').fadeToggle();
						jQuery('.cps2_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps3').click(function() {
						jQuery('.cps3_pop').fadeToggle();
						jQuery('.cps3_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps4').click(function() {
						jQuery('.cps4_pop').fadeToggle();
						jQuery('.cps4_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps5').click(function() {
						jQuery('.cps5_pop').fadeToggle();
						jQuery('.cps5_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps6').click(function() {
						jQuery('.cps6_pop').fadeToggle();
						jQuery('.cps6_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps7').click(function() {
						jQuery('.cps7_pop').fadeToggle();
						jQuery('.cps7_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps8').click(function() {
						jQuery('.cps8_pop').fadeToggle();
						jQuery('.cps8_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps9').click(function() {
						jQuery('.cps9_pop').fadeToggle();
						jQuery('.cps9_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps10').click(function() {
						jQuery('.cps10_pop').fadeToggle();
						jQuery('.cps10_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps11').click(function() {
						jQuery('.cps11_pop').fadeToggle();
						jQuery('.cps11_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps12').click(function() {
						jQuery('.cps12_pop').fadeToggle();
						jQuery('.cps12_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps13').click(function() {
						jQuery('.cps13_pop').fadeToggle();
						jQuery('.cps13_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps14').click(function() {
						jQuery('.cps14_pop').fadeToggle();
						jQuery('.cps14_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps15').click(function() {
						jQuery('.cps15_pop').fadeToggle();
						jQuery('.cps15_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps16').click(function() {
						jQuery('.cps16_pop').fadeToggle();
						jQuery('.cps16_arrow').toggle();
					});
				});
				jQuery(window).load(function(){
					jQuery('.cps17').click(function() {
						jQuery('.cps17_pop').fadeToggle();
						jQuery('.cps17_arrow').toggle();
					});
				});
				//]]>  
			</script>
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<div class="entry">
				<?php the_content(); ?>
					<div class="postmetadata">
					<?php 	wp_link_pages(array(
								'before' => '<div class="page_linker"><div class="page_linker_inside">' . __(''),
								'after' => '</div></div>',
								'next_or_number' => 'next_only',
								'nextpagelink' => __(' Mission Continued &raquo; '),
								'previouspagelink' => __(' '),
								'pagelink' => '%',
								'echo' => 1 )
							); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
			<div class="navigation">
				<?php posts_nav_link(); ?>
			</div>
		<?php endif; ?>
		</div>
		<?php get_sidebar('homepage'); ?> 
	</div> 
<script> $('.slider').slider({full_width: true, height:400, indicators: false});</script>
<?php get_footer(); ?>