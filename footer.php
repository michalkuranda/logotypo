				            

          <footer class="footer" id="contact" role="contentinfo">
          <?php  mainHeader("Kontakt","h2"); ?> 
						<div id="inner-footer" class="row clearfix">
                        				<div class="large-1 medium-0 small-0 columns">                      
                         			        
                                     &nbsp;
                                                                                                           
						            </div>
               <div class="columns large-4 medium-12 small-12 text-center">
             
              <?php   
                    $args = array(
      						  'post_type' => 'page',
      						  'post__in' => array(2881)
      						  );
      						query_posts($args) 
              ?>        
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		          
        
        
                <?php   the_content(); ?>       
              <?php endwhile; else : ?> 					 					   		         
              <?php get_template_part( 'partials/content', 'missing' ); ?>  					             
              <?php endif; wp_reset_query();?>      
              
               </div>
               <div class="columns large-6 medium-12 small-12 text-center">
 
            

  
            
            
            						
                
        								<div class="large-12 medium-12 small-12 columns">                      
                         			        
                                       <?php echo do_shortcode( '[contact-form-7 id="199" title="Kontaktní formulář  1"]' ); ?>    
                                                                                                           
						            </div>  		
 
              
                </div>
                         				<div class="large-1 medium-0 small-0 columns">                      
                         			        
                                     &nbsp;
                                                                                                           
						            </div>
					</footer>  
				</div>  
			</div>  
		</div> 
		    <div id='backtotop'><span class="fi fi-arrow-up"></span></div>				
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/main.js"></script> 
    <!--<script src="<?php echo get_template_directory_uri(); ?>/library/js/swiper.min.js"></script>-->
 
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/masonry.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/classie.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/main2.js"></script>
  
  <script src="<?php echo get_template_directory_uri(); ?>/library/js/lightbox.min.js"></script>
	<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : -0.5,
					y : 1
				},
				onOpenItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 50);
							el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
							el.style.transform = 'scale3d(0.1,0.1,1)';
							el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
							el.style.transition = 'opacity .4s, transform .4s';
							el.style.WebkitTransform = 'scale3d(1,1,1)';
							el.style.transform = 'scale3d(1,1,1)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';                     
							});
						}
					});
				}
			});
		})();
	</script> 
        
				<?php wp_footer(); ?>      
        
	</body>

</html> <!-- end page -->
