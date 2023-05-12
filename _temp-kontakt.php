 <?php
/*
Template Name: Kontakt
*/
?>        
<?php get_header(); ?>
<div class="row fullrow">
  <div class="googlemap">
  <div class="slider_blokator"></div>
  <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
  </div>
</div>                                                   
<div class="white-cont">            
			<div id="content">		
				<div id="inner-content" class="row clearfix">			
				    <div id="main" class="large-8 medium-8 columns" role="main">
					    <h3>Napište nám</h3>
			        <?php echo do_shortcode( '[contact-form-7 id="199" title="Kontaktní formulář  1"]' ); ?>                                                       
    				</div> <!-- end #main -->    
            <div class="large-4 medium-4 columns sidebar-kontakt">        
              <h2>Kontakt</h2>
              <br />
              
              <?php   
                    $args = array(
      						  'post_type' => 'page',
      						  'post__in' => array(18)
      						  );
      						query_posts($args) 
              ?>        
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		          
              <?php       
              $podnadpis = get_field( "podnadpis" );
              $hlnadpis = get_field( "hlavni-nadpis" );
              ?>    
              <? if( $hlnadpis ) {echo "<h1 class='hlpodnadpis'>".$hlnadpis."</h1>";} ?>   
              <? if( $podnadpis ) {echo "<h2 class='podnadpis'>".$podnadpis."</h2>";} ?>           
                <?php the_content(); ?>       
              <?php endwhile; else : ?> 					 					   		         
              <?php get_template_part( 'partials/content', 'missing' ); ?>  					             
              <?php endif; ?>  
    				</div>
				</div> 
			</div> 
</div>      
<?php get_footer(); ?>