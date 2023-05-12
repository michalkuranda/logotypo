
  
<div class="white-cont" id="ct">            
  <div class="row text-center realizace fullrow">              
        <?php mainHeader("Naše realizace","h2"); ?>                                                    
        <?php   
        
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $sticky = get_option( 'sticky_posts' );
                            
                $args = array(
                  'post_type' => 'realizace',
                  /*'posts_per_page' => 6,*/
                  'post__in' => get_option('sticky_posts'),
                  'caller_get_posts' => 1
                  );
                $loop = new WP_Query( $args );  ?>
                
<a href="<?php echo site_url(); ?>/realizace/" class="button radius"> Všechny realizace</a>
<br />
<?php                
                if ($loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); 
        ?>					 					  
        
        <?php 
        $postid = get_the_ID();
$termss = get_the_terms($postid,'kategorie-realizace'); 
if ($termss){
  foreach( $termss as $term ) { 
  	$classes[] = $term->slug;  
  } 
}
?>
                                                             
 
        <div class="columns large-2 medium-3 small-6 realize-item"> 
        <article <?php post_class($classes); ?>>
             <img src="<?php echo get_template_directory_uri (); ?>/library/images/trans-square.gif" /> 
             <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <?php if (has_post_thumbnail() != "") {  ?>
                <div class="flipper">
                  <div class="front">
                    <?php the_post_thumbnail('medium',array('class' => '')); ?>
                  </div>
                  <div class="back">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'full') ); ?>					 					    	
                    <?php       
                      $realdesc = get_field( "realdesc" );
                    ?>    
                    <a href="<?php echo $url; ?>" data-lightbox="realizace" data-title="<? if( $realdesc ) {echo $realdesc;} ?>">
                    <img class="show" src="<?php echo get_template_directory_uri (); ?>/library/images/trans-square.gif" />
                    </a>
                    <?php the_post_thumbnail('medium',array('class' => '')); ?> 
                  </div>
                </div>
                <?php } else { ?>
                <a href="<?php the_permalink(); ?>">
                  <img src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=200" />
                </a> 
                <?php } ?>
             </div>    
        </article> 
        </div> 			    					 					    
        <?php endwhile;?> 					 					   					    
        <?php endif; wp_reset_query(); ?>  
  </div>		                                           
</div>