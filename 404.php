<?php get_header(); ?>
								
<div class="silver-cont">            
  <div class="row text-center">              
    <div class="columns large-12 medium-12 small-12 text-center">                
      <h1><?php _e("Chyba 404", "jointstheme"); ?></h1>	
    </div>                             
  </div>                                        
</div>                     		
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-12 medium-12 small-12 columns first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
						
							<header class="article-header text-center">
                <h2><?php _e("Stránka neexistuje", "jointstheme"); ?></h2>
							</header> <!-- end article header -->
					   
							<section class="entry-content text-center">
								<p><?php _e("Stránka kterou hledáte zde není.", "jointstheme"); ?></p>
							</section> 
               <!--
							<section class="search">
							    <p><?php get_search_form(); ?></p>
							</section>
						 -->
							<footer class="article-footer">
              &nbsp;
							</footer> 
            
						</article> <!-- end article -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>