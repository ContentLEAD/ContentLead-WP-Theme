<?php get_header(); ?>
	<section id="news">

		<div id="primary">
			<h1 class="page-title">Latest News</h1>

			<section id="latest-news"> <!-- Start #latest-news -->

				<?php $latest_news_show = 3; // How many latest news posts should be displayed?
					  $latest_news_post_ids = array();
					  $latest_news_query = new WP_Query(array('posts_per_page' => $latest_news_show)); ?>
		
				<?php if ($latest_news_query->have_posts()) : while ($latest_news_query->have_posts()) : $latest_news_query->the_post(); ?>
				
					<?php array_push($latest_news_post_ids, $post->ID); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
						<header class="entry-header">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php echo get_the_post_thumbnail(get_the_ID(), 'latest-news-thumb'); ?></a>
							<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<time datetime="<?php echo date(DATE_W3C); ?>" pubdate ><?php the_time('F jS, Y') ?></time>
							<span class="byline author vcard">
								<span>by </span><span class="fn"><?php the_author() ?></span>
							</span>
						</header>		
						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div>
					</article>
			
				<?php endwhile; ?>
			
			</section><!-- End #latest-news -->
			
			<?php $categories = get_categories();
				$category_post_show = 2; // How many posts should be displayed in each category?

				// HACK - Counter for two-column layout...Cleaner CSS solution anyone?!
				$cat_count_half = round(count($categories)*.5);			
				$counter = 1; 
				?>
				
				<div class="left-col">
				<!-- Start #news-category -->
				<?php foreach($categories as $category) : 
					
					$news_cat_query = new WP_Query(array('cat' => $category->cat_ID, 'post__not_in' => $latest_news_post_ids, 'posts_per_page' => $category_post_show));
						if ($news_cat_query->have_posts()) : ?>
							<section class="news-category" id="category-<?php echo $category->cat_ID; ?>">
								<h3 class="category-title"><a href="<?php echo get_category_link($category->cat_ID)?>" title="Category <?php echo $category->cat_name; ?>"><?php echo $category->cat_name; ?></a></h3> 
									<?php while ($news_cat_query->have_posts()) : $news_cat_query->the_post(); ?>					 
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<header class="entry-header">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_post_thumbnail('news-category-thumb'); ?></a>
												<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
												<div class="entry-meta">
													<time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
													<span class="byline author vcard">
														<span>by </span><span class="fn"><?php the_author() ?></span>
													</span>
												</div><!-- .entry-meta -->
											</header><!-- .entry-header -->

											<div class="entry-summary">
												<?php the_excerpt(); ?>
											</div><!-- .entry-summary -->

										</article><!-- #post-<?php the_ID(); ?> -->
									<?php endwhile;  // Reset Post Data ?>

							</section>


							<?php if ($counter == $cat_count_half) : ?> 
						  		</div> <!-- End .left-col -->
						  		<div class="right-col">
						  <?php endif; $counter++; ?>

						<?php endif; ?>
								
				<?php endforeach; ?><!-- End #news-category -->
			</div><!-- End .right-col -->


			<?php else : ?> <!-- No Articles -->

				<h2>No articles posted yet! Come back soon.</h2>

			<?php endif; ?> 

		</div>
	
	
<?php get_sidebar(); ?>
</section><!-- End #news -->
<?php get_footer(); ?>
