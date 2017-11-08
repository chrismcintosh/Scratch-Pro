<?php
     $blog_category = get_sub_field('blog_category');

     $args = array(
          'post_type'      => 'post',
          'category_name'  => $blog_category,
          'posts_per_page' => 6
     );

     $loop = new WP_Query( $args );
?>

     <section class="blog-posts">
          <div class="wrap">
               <div class="blog-section-header">
                    <div class="left">
                         <h2><?php the_sub_field('blog_section_title'); ?></h2>
                    </div>
                    <div class="right">
                         <?php if ($news_category === '') { ?>
                              <a href="/news/">All Posts</a>
                         <?php } else { ?>
                         <a href="/category/<?php echo $selected_category; ?>">More Posts Like This</a>
                         <?php } ?>
                    </div>
               </div>

               <div class="article-container">
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                              <div class="article">
          					<div class="inner">
          	                         <a href="<?php the_permalink(); ?>">
                                             <?php if ( has_post_thumbnail() ) : ?>
                                                  <div class="article-image" style="background: url('<?php the_post_thumbnail_url('large'); ?>')"></div>
                                             <?php endif; ?>
                                             <div class="article-info">
                                                  <div class="article-title">
                                                       <h3><?php the_title(); ?></h3>
                                                  </div>
                                                  <div class="article-author">
                                                       <span><?php the_author(); ?></span>
                                                  </div>
                                                  <div class="article-date">
                                                       <span><?php the_date('M j Y'); ?></span>
                                                  </div>
                                             </div>
          						</a>
          	                         </a>
          					</div>
                              </div>
                    <?php endwhile; ?>
               </div>
          </div>
     </section>

	<?php
          wp_reset_postdata();
