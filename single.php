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
					
				<div class="figure"><?php echo get_the_post_thumbnail(get_the_ID(), 'news-category-thumb'); ?>
					<p class="caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>	
				</div>
					
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
		
			<?php comments_template(); ?>

		</article>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>