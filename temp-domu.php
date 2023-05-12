<?php
/*
Template Name: HOME!!!!
*/                                                
?>                                                               
<?php get_header(); ?>  
   <div class="row fullrow">  
    <div class="columns large-2 medium-0 small-0">

      &nbsp;
    </div>    
    <div class="columns large-8 medium-12 small-12 logotyps center">
                
               <!-- <img src='http://www.vegalaboratories.com/wp-content/uploads/2016/02/vega_labs_3b.png' class='logo-vega'/>-->
                 <img src='<?php echo get_template_directory_uri(); ?>/library/images/logo-logotypo.png' class='logo-vega' />     
    </div> 
    <div class="columns large-2 medium-0 small-0">
    &nbsp;   
    </div> 
 
  
    </div>
      <div class="reftop">
                 <img src='<?php echo get_template_directory_uri(); ?>/library/images/reftop.png' />
               
      
     </div> 
<?php require_once('services/default.php'); ?> 
      <div class="reftop">
                 <img src='<?php echo get_template_directory_uri(); ?>/library/images/reftop3.png' />
               
      
     </div>    

<?php require_once('realizace/white-realizace.php'); ?>
      <div class="reftop">
                 <img src='<?php echo get_template_directory_uri(); ?>/library/images/reftop4.png' />
               
      
     </div>  
<!--
         <div id="about">
 
<?php  mainHeader("About","h2"); ?>    
 
                       
  <div class="row text-center" > 

                     <div class="large-12 columns">         
                

        
  <?php   
                    $args = array(
      						  'post_type' => 'page',
      						  'post__in' => array(600)
      						  );
      						query_posts($args) 
              ?>        
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		          
        
        
                <?php   the_content(); ?>       
              <?php endwhile; else : ?> 					 					   		         
              <?php get_template_part( 'partials/content', 'missing' ); ?>  					             
              <?php endif; wp_reset_query();?>                      
                                
</div> 
 </div>  
 </div>-->
<?php // require_once('yellow/produkt.php'); ?>

<?php get_footer(); ?>