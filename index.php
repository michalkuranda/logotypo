<?php get_header(); ?>	 			
<div id="content">			 				
  <div id="inner-content" class="row clearfix">				    
    <div id="main" class="large-9 medium-12 columns clearfix" role="main">       
    
             <?php if (is_category()) { ?>
							    <h2><?php single_cat_title(); ?></h2>
					    <?php } elseif (is_tag()) { ?>                            
							    <h2><?php single_tag_title(); ?></h2>
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
						    	<h2><?php echo get_the_author_meta('display_name', $author_id); ?>
					    <?php } elseif (is_day()) { ?>
	    					<h2><?php the_time('l, F j, Y'); ?></h2>
		    			<?php } elseif (is_month()) { ?>
				    	    <h2><?php the_time('F Y'); ?></h2>             
					    <?php } elseif (is_year()) { ?>
					    	    <h2><?php the_time('Y'); ?></h2>
					    <?php } ?>
    
    				    
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 					 					    	
      <?php get_template_part( 'partials/loop', 'archive' ); ?> 					 					    
      <?php endwhile; ?> 	 					                
      <div class="large-12 columns">					        
        <?php if (function_exists('joints_page_navi')) { ?>					            
        <?php joints_page_navi(); ?>					        
        <?php } ?>                                     
      </div> 	 					 					    
      <?php else : ?> 					         						
      <?php get_template_part( 'partials/content', 'missing' ); ?> 					 					    
      <?php endif; ?>                                         			 				    
    </div> 
    <!-- end #main -->     				    
    <?php // get_sidebar(); ?> 				     				
  </div> 
  <!-- end #inner-content -->			
</div> 
<!-- end #content -->   
<?php get_footer(); ?>      