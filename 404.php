<?php get_header(); ?>
<section id="news">
	<article id="post-0" class="post error404 not-found">
		<header class="entry-header">
			<h1 class="entry-title">This is somewhat embarrassing, isn&rsquo;t it?</h1>
		</header>

		<div class="entry-content">
			<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps one of the links below, can help.</p>

			<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 5 ), array( 'widget_id' => '404' ) ); ?>

			<div class="widget">
				<h2 class="widget-title">Categories</h2>
				<ul>
				<?php wp_list_categories( array('title_li' => '')); ?>
				</ul>
			</div>

			<div class="widget">
				<h2 class="widget-title">Archives</h2>
				<ul>
				<?php wp_get_archives(); ?> 
				</ul>
			</div>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->
</section><!-- End #news -->
<?php get_footer(); ?>