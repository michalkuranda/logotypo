 
<?php
/*
Template Name: Produkty
*/
?>         
<?php get_header(); ?>  
        <?php 
              $args = array(
						  'post_type' => 'page',
						  'post__in' => array(8)
						  );
						query_posts($args) 
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		         

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
  <div class="row text-center  rohy bottom">
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
            <section class="entry-content clearfix" itemprop="articleBody">
          	    <?php the_content(); ?>
          	    <?php wp_link_pages(); ?>
          	</section>          					
          </article>	
      </div> 		     				
    </div> 		
  </div> 
</div>
        <?php endwhile; else : ?> 					 					   		
        <?php get_template_part( 'partials/content', 'missing' ); ?> 					    
        <?php endif; ?> 
        
        
<div class="silver-cont">
  <?php require_once('design/trizuby-wd.php'); ?>
  <div class="row text-center product-item-cont">              
    <div class="columns large-12 medium-12 small-12 text-center">                
    <h3>Řada A</h3>                                 
    </div>                                           
        <?php         
                $args = array(                     
                	'tax_query' => array(
                		array(
                			'taxonomy' => 'kategorie-produktu',
                			'field' => 'slug',
                			'terms' => 'rada-a'
                		)
                	),                 
                  'post_type' => 'produkty',
                  'posts_per_page' => -1
                  );
                $loop = new WP_Query( $args );
                if ($loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); 
        ?>					 					    	
    <div class="columns large-3 medium-6 small-12 product-item">             
                    <?php 
                      if (has_post_thumbnail() != "") {  ?>
                        <?php the_post_thumbnail('medium',array('class' => 'soupiska')); ?>
                        <?php
                        }
                      else {
                    ?>
                       <a href="<?php the_permalink(); ?>">
                        <img class="soupiska" src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=200" />
                       </a> 
                        <?php                      
                      }
                      ?>
      <?php       
      $cena = get_field( "cena" );
      $vaha = get_field( "vaha" );
      $velikost = get_field( "velikost" );
      ?>
      <ul>
        <li><h4><?php the_title(); ?></h4></li>
        <li><? if( $velikost ) {echo $velikost; echo " cm";} ?></li>
        <li><? if( $vaha ) {echo $vaha; echo " kg";} ?></li>          
        <li><h4><? if( $cena ) {echo $cena; echo " kč";} ?></h4></li>
      </ul>                            
    </div>  			    					 					    
        <?php endwhile;?> 					 					   					    
        <?php endif; wp_reset_query(); ?> 
                                 
                         
                                             
  </div>    
       <?php require_once('design/trizuby-wh.php'); ?>   	
  </div>


<div class="white-cont">      
                          <?php       
                    $hlnadpis3 = get_field( "nadpis_v_tele2" );
                    ?>                     
                   <?php mainHeader($hlnadpis3,"h2"); ?> 
  <div class="row text-center product-item-cont">              
    <div class="columns large-12 medium-12 small-12 text-center"> 
              
        
    <h3>Řada B</h3>                            
    </div> 

                                    
        <?php 
        
                $args = array(                    
                	'tax_query' => array(
                		array(
                			'taxonomy' => 'kategorie-produktu',
                			'field' => 'slug',
                			'terms' => 'rada-b'
                		)
                	),                   
                  'post_type' => 'produkty',
                  'posts_per_page' => -1
                  );
                $loop = new WP_Query( $args );
                if ($loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>					 					    	
    <div class="columns large-3 medium-6 small-12 product-item">             
                    <?php 
                      if (has_post_thumbnail() != "") {  ?>
                        <?php the_post_thumbnail('medium',array('class' => '')); ?>
                        <?php
                        }
                      else {
                    ?>
                       <a href="<?php the_permalink(); ?>">
                        <img class="" src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=200" />
                       </a> 
                        <?php                      
                      }
                      ?>
      <?php                                                                  
      $cena = get_field( "cena" );
      $vaha = get_field( "vaha" );
      $velikost = get_field( "velikost" );
      ?>
      <ul>
        <li><h4><?php the_title(); ?></h4></li>
        <li><? if( $velikost ) {echo $velikost; echo " cm";} ?></li>
        <li><? if( $vaha ) {echo $vaha; echo " kg";} ?></li>          
        <li><h4><? if( $cena ) {echo $cena; echo " kč";} ?></h4></li>
      </ul>                       
    </div>  			    					 					    
        <?php endwhile;?> 					 					   					    
        <?php endif; wp_reset_query(); ?>
                                 
                         
                                             
  </div>	
            <?php require_once('design/trizuby-yh.php'); ?>                                             
</div>

<?php require_once('yellow/produkt.php'); ?>
          <div class="white-cont">   
 
                          <?php       
                    $hlnadpis4 = get_field( "nadpis_v_tele3",8);
                    ?>                     
                   <?php mainHeader($hlnadpis4,"h2"); ?> 
    
   
     
            <div class="row product-blog">
      
          
                      
  
        <?php 
        
global $more;
$more = 0;        
        
              $args = array(
						  'post_type' => 'page',
						  'post__in' => array(167,169)
						  );
				 
                $loop = new WP_Query( $args );
                if ($loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>					 					    	
        <div class="columns large-6 medium-6 small-12">
        <a class="img" href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('medium',array('class' => '')); ?>  <br />
        </a>             
      <?php       
      $podnadpis = get_field( "podnadpis" );
      $hlnadpis = get_field( "hlavni_nadpis" );
      ?>
      <div class="columns large-1 medium-1 small-1">
      &nbsp;
      </div>
      <div class="columns large-10 medium-10 small-10 mainer">    
            <a href="<?php the_permalink(); ?>"><? if( $hlnadpis ) {echo "<h3 class='hlnadpis'>".$hlnadpis."</h3>";} ?></a>    
           <? if( $podnadpis ) {echo "<h4 class='podnadpis'>".$podnadpis."</h4>";} ?> <br />    
           <?php the_content('Číst více'); ?>
      </div>           
      <div class="columns large-1 medium-1 small-1">
      &nbsp;
      </div>           
           
    </div>  			    					 					    
        <?php endwhile;?> 					 					   					    
        <?php endif; ?>                 
                      
                          
          </div>
          </div>           


  
<?php get_footer(); ?>