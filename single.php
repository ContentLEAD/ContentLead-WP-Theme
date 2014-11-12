<?php get_header(); ?>
<section id="news">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="meta">
					<time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
					<span class="byline author vcard">by <span class="fn"><?php the_author() ?></span></span>
				</div>
			</header>

			<div class="entry-content">

				<!-- share this social plugins -->
				<div class="social-sharing"><span class='st_facebook_hcount' displayText='Facebook'></span>
					<span class='st_twitter_hcount' displayText='Tweet'></span>
					<span class='st_googleplus_hcount' displayText='Google +'></span>
					<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
					<span class='st_pinterest_hcount' displayText='Pinterest'></span>
				</div>
					
				<!--video embed code-->

				<?php if (!get_post_meta( get_the_ID(), 'brafton_video', true )): ?>
					<div class="figure"><?php echo get_the_post_thumbnail(get_the_ID(), 'news-category-thumb'); ?>	
					</div>
				<?php else: ?>
                 			<?php echo get_post_meta( get_the_ID(), 'brafton_video', true ) ?>
				<?php endif; ?>
					
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
		
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>

		</article>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
