
  
<div id="work" class="white-cont">    

    <div class="row  ">
  	<div class="grid">                   
        <?php  mainHeader("Vybrané reference","h2"); ?>                                                             
        <?php   wp_reset_query();
                $args = array(
                  'post_type' => 'portfolio_item',
                  'posts_per_page' => -1
                  );
                $loop = new WP_Query( $args );  ?>
                                                                           
 
<?php                
                if ($loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); 
        ?>					 					  
        
        <?php 
        $postid = get_the_ID();
$termss = get_the_terms($postid,'kategorie-portfolio_item'); 
if ($termss){
  foreach( $termss as $term ) { 
  	$classes[] = $term->slug;  
  } 
}
?>
        
        

 
 
 <!--                                                      
        <div class="id<?php echo $post->ID;?>">
        <div class="row "> 
        <article class="columns large-12 medium-12 small-12 realize-item text-center" <?php post_class($classes); ?>>
     -->
    
    
    
                       
    
 
    <?php
     $rok = get_field( "rok" );
     $contentcs = get_field( "content-cs" );
     $contenten = get_field( "content-en" );
    
    ?>

     <?php // the_title();  ?> <?php // echo $rok;?> 
 
    <?php //  echo $contentcs;  ?>
 
    <?php // the_content();  ?>  
                                                           
        <div class="large-4 medium-4 small-12 columns">
				<div class="grid__item" data-size="1280x857">
	        
                   <?php
         
         
        $attachments = get_posts( array(
            'post_type'   => 'attachment',
            'numberposts' => 1,
            'post_status' => null,
            'post_parent' => $post->ID
        ) );
         
        
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
                ?>
        
                 
                <?php $image_attributes = wp_get_attachment_image_src( $attachment->ID,"large"  ); ?>
         
               <?php if ( $image_attributes ) : ?>
                     
              <?php endif; ?>
                <?php // echo wp_get_attachment_image( $attachment->ID, 'medium' ); ?>
                
                     <!-- <a href="<?php echo $image_attributes[0]; ?>" class="img-wrap">-->
                     
                                   <?php      
                             if ( has_post_thumbnail() ) {
                  the_post_thumbnail("medium");
                } else {echo wp_get_attachment_image( $attachment->ID, 'medium' ); } ?> 
                      
                    <?php // echo apply_filters( 'the_title', $attachment->post_title ); ?>
             
                <?php
              
            }
        
        }
     ?> 
						
          
            <div class="description description--grid">
							<h3><?php the_title();  ?></h3>
							<p><?php   echo $contentcs;  ?></p>
    <div class="row fullrow">
    <?php  /*  Gallery  */  ?>
          <?php
        $attachments = get_posts( array(
            'post_type'   => 'attachment',
            'numberposts' => -1,
            'post_status' => null,
            'post_parent' => $post->ID
        ) );
         
        
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
                ?>
        
                <div class="grid-item large-3 medium-3 small-12 columns" >
                <?php $image_attributes = wp_get_attachment_image_src( $attachment->ID,"large"  ); ?>
         
               <?php if ( $image_attributes ) : ?>
                  <a href="<?php echo $image_attributes[0]; ?>" data-lightbox="<?php echo $post->ID; ?>">  
              <?php endif; ?>
                <?php echo wp_get_attachment_image( $attachment->ID, 'thumbnail' ); ?>
                </a>
                    <?php // echo apply_filters( 'the_title', $attachment->post_title ); ?>
                </div>
                <?php
            }
        } 
        ?>       
     <?php  /*  // Gallery  */  ?>
     </div>
							<div class="details">
								<ul>
                  <li><?php  echo $rok;?> </li>
								<!--	
                  <li><i class="icon icon-camera"></i><span>Canon PowerShot S95</span></li>
									<li><i class="icon icon-focal_length"></i><span>22.5mm</span></li>
									<li><i class="icon icon-aperture"></i><span>&fnof;/5.6</span></li>
									<li><i class="icon icon-exposure_time"></i><span>1/1000</span></li>
									<li><i class="icon icon-iso"></i><span>80</span></li>
                  -->
								</ul>
							</div>
						</div>
				    </a>
				</div>  
        </div>
  

               
  			    					 					    
        <?php endwhile;?> 					 					   					    
        <?php endif; wp_reset_query(); ?>  
   	      </div> 
      			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
      </div>                                            

</div>   