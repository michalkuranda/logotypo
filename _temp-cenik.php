 <?php
/*
Template Name: Ceník
*/
?>        

<?php get_header(); ?>
            <div class="silver-cont">            
  <div class="row text-center">              
    <div class="columns large-12 medium-12 small-12 text-center">                
      <?php       
      $podnadpis = get_field( "podnadpis" );
      $hlnadpis = get_field( "hlavni_nadpis" );
      ?>    
        <? if( $hlnadpis ) {echo "<h1 class='hlnadpis'>".$hlnadpis."</h1>";} ?>   
        <? if( $podnadpis ) {echo "<h2 class='podnadpis'>".$podnadpis."</h2>";} ?>    
        
    
    </div>                             
  </div>
  <div class="row text-center rohy bottom">
      <div class="columns large-4 medium-4 small-4">
        &nbsp; 
      </div>
      <div class="columns large-4 medium-4 small-4">
        <img src="<?php echo get_template_directory_uri (); ?>/library/images/wcenter.png" /> 
      </div>
      <div class="columns large-4 medium-4 small-4">
        &nbsp;
      </div>
        	                                           
</div>                                          
</div> 	
<div class="white-cont price-cen">   		
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">


           <?php       
              $hlnadpis2 = get_field( "nadpis_v_tele" );
           ?>                     
           <?php mainHeader($hlnadpis2,"h2"); ?> 

           <?php the_content(); ?>
 
  
 


			
    				</div> <!-- end #main -->
    
			 
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
</div>
<?php get_footer(); ?>