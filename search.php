<?php get_header(); ?>
<section id="news">

	<?php if (have_posts()) : ?>
		<div id="primary">
		<h1>Search Results</h1>

		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
				<header class="entry-header">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php echo get_the_post_thumbnail(get_the_ID(), 'latest-news-thumb'); ?></a>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<time datetime="<?php echo date(DATE_W3C); ?>" pubdate ><?php the_time('F jS, Y') ?></time>
					<span class="byline author vcard">
						<span>by</span> <span class="fn"><?php the_author() ?></span>
					</span>
				</header>		
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
			</article>

		<?php endwhile; ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
