          <div class="black-cont" id="services-cont" >
  
            <?php //  mainHeader("Služby","h2"); ?> 
 
            <div class="row ">
 
              <?php 
                    $args = array(
      						  'post_type' => 'promo',
                    'post_per_pages' => -1,
                    'order'   => 'ASC'
      						  );
                    $i = 0;
      				 
                      $loop = new WP_Query( $args );
                      if ($loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); 
                      $i++;
              ?>					 					    	
              <div class="columns large-4 medium-12 small-12 text-center <?php echo "show".$i; ?>">
                 <?php the_post_thumbnail('medium',array('class' => 'promo_icons')); ?>
                 <h2><?php the_title(); ?></h2>
                 <?php the_content(); ?>
     			    </div>  		
               <?php 
               
               if ($i == 3) {$i = 0; echo "</div><div class='row'>";}
               
               ?>			 					    
              <?php endwhile;?> 					 					   					    
              <?php endif; wp_reset_query();?>     
    
            </div> 
                                   
           		                                
          </div>