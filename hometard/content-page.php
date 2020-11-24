<!-- start content container -->
<div class="row">   
	<article class="col-md-<?php hometard_main_content_width_columns(); ?>">        
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                          
				<div <?php post_class(); ?>>
					<div class="main-content-page">
						<header>                              
							<h1 class="entry-title page-header">
								<?php the_title(); ?>
							</h1> 
							<time class="posted-on published" datetime="<?php the_time( 'Y-m-d' ); ?>"></time>                                                        
						</header>                            
						<div class="entry-content">                              
							<?php the_content(); ?>                            
						</div>                               
						<?php wp_link_pages(); ?>                                                                                     
						<?php comments_template(); ?>
					</div>
				</div>        
			<?php endwhile; ?>        
		<?php else : ?>            
			<?php get_template_part( 'content', 'none' ); ?>        
		<?php endif; ?>    
	</article>       
	<?php get_sidebar( 'right' ); ?>
</div>
<!-- end content container -->
