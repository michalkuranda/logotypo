 	         
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
<div class="white-cont">	
	 			           <?php       
                    $hlnadpis2 = get_field( "nadpis_v_tele" );
                   ?>                     
                   <?php mainHeader($hlnadpis2,"h2"); ?> 
  <div id="content">			 				
    <div id="inner-content" class="row clearfix">			 				    
      <div id="main" class="large-12 medium-12 small-12 columns" role="main">					    
			 					    	




          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
          						
          	<header class="article-header">
          	 
          	</header> <!-- end article header -->
          					
              <section class="entry-content clearfix" itemprop="articleBody">
                         <?php  the_post_thumbnail('medium',array('class' => 'alignright')); ?>  
          	    <?php
                   ob_start();
                   the_content('Read the full post',true);
                   $postOutput = preg_replace('/<img[^>]+./','', ob_get_contents());
                   ob_end_clean();
                   echo $postOutput;
                ?>
          	    <?php wp_link_pages(); ?>
          	</section> <!-- end article section -->
          						
          	<footer class="article-footer">
          	</footer> <!-- end article footer -->
          						                              
          	<?php // comments_template(); ?>
          					
          </article> <!-- end article -->

				    					 					    
   			     				
      </div> 
      <!-- end #main -->     				    
      <?php // get_sidebar(); ?> 				     				
    </div> 
    <!-- end #inner-content -->     			
  </div> 
  <!-- end #content -->    
</div>
      