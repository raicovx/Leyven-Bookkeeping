<?php
/*
	Template Name: Sub Pages Template
*/
?>
<?php get_header(); ?>
	<div class="the_main the_width">
		<div id="blog">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="content-wrapper">
				<div class="content-wrapper">
<div class="slider"><img class="aligncenter size-full wp-image-99" title="slider-pics" src="http://leyven.com.au/wp-content/uploads/2013/01/slider-pics.jpg" alt="" width="960" height="290" /></div>
				
				<div class="sub-page-content">
					<div class="sub-page-content-left">
						<div class="sub-page-info">
							<h2>Accounting</h2>
							<p><span><strong>Here are some of the issues facing business today. Is this you?</strong></span></p>
							<p>Are you already in business? </p>
							<p>Thinking about going into business?</p>
							<p>Do have an established business?</p>
							<p>Do you not have enough time in business?</p>
							<p>Do you need some specific support in your business?</p>
							<p>Too many things to worry about and just want to get on with business?</p>
							<p>Need someone to provide an independent unbiased view on business matters?</p>
							<p>Your accountant may or may not do all this work, or they may do, it depends on their size and their status, for example, 
							registered tax agents lodging business tax returns would not provide solutions for a lot of the above.  With respect to 
							accountants, you generally visit their office and they do get "snowed under" with accounting work that stifles their 
							efforts to go out and visit their customers and talk about their business.  Usually you contact your account when you 
							have a specific problem, want specific advice, or when its tax time at end of year.  What about all the in between times, 
							who do you talk to then?</p>
							<p><span><strong>What's your reason to be in business, let's consider the following, as we all have different reasons 
							(believe it or not), do you want to:</strong></span></p>
							<ol>
							<li>Be your own boss</li>
							<li>Build sales and your territory</li>
							<li>Build an empire</li>
							<li>Buy a job</li>
							<li>lways own some type of business i.e. newsagency</li>
							<li>Move to an area that you want to live in and buy a business</li>
							<li>Buy a franchise, where a lot of the worry has already been taken out of your hands, feel secure that established 
								 procedures, training and support is in place</li>
							<li>Just be in business at some stage of your life</li></ol>
							<p>Whatever the reason, some people choose the wrong reason or are just not suited, yes, they are their own worst 
							enemy. Others go into business and fulfill their desire to do so, then leave the business and go back to paid 
							employment (I did, but know I am back in my own business).</p>
							<p>Whatever the reason, it still poses those issues above, or others they may not be there.  There is a solution, and I put 
							my skills and experience to you to contribute to your outcomes.</p>
							<p>Can I let you know that I have talked to many people in small business, I have a passion for assessing performances 
							of business, especially where I go and buy something.  I can very quickly judge if that business managed well and 
							what the business owner(s) expect.  I can critical if customer service is below par, relative to what I am paying and 
							what is expected, and I compliment owners and employees when service impresses me.  That's my passion, and I 
							offer that to you.  Take a few seconds more to read my simple but effective way of the growth cycle of a managing a 
							business.</p><ol>
							<li>INFANCY STAGE     -   Start Up  -  from scratch or taking over an existing business</li>
							<li>ADOLESCENT STAGE  -  Start of stability, growth and repeat business - it's growing...</li>
							<li>MATURITY AND BEYOND  -  further expansion, my business is leaving "home"...</li></ol>
							<p>These three (3) cycles of evolution present many different challenges to you, to family, and to the business itself 
							(which is paramount).  The business is not a person, but treat it as such, with respect and it should return the favour.
							I can help you with these matters, my relationship with you is important. </p>
						</div>
					</div>
					
					<div class="right-widget">
						<h2>Is this you?</h2>
						<div class="widgets-content">
							<ol>
								<li>Is your accountant <strong>too
								busy</strong> to visit you?</li>
								<li>Are you <strong>tired</strong> or your
								business or is your 
								business tired of you?</li>
								<li>Do you see further
								<strong>opportunities</strong> but don't
								know what to do?</li>
							</ol>
						</div>
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
<?php get_footer(); ?>