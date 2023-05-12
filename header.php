<?php  /* HEADER */  ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->  
<html <?php language_attributes(); ?>> 
  <!--<![endif]-->	
  <head>		
    <meta charset="utf-8">		
<title><?php if (is_front_page()) {  echo "Úvodní stránka"; } ?><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archiv pro &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' - '; } elseif (is_search()) { echo 'Vyhledávání &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo '404 - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />     
    <!-- Google Chrome Frame for IE -->		
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		
    <!-- mobile meta -->		                                                
    <meta name="HandheldFriendly" content="True">		
    <meta name="MobileOptimized" content="320">		
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>		
    <!-- icons & favicons -->		
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">		
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.png">		
    <!--[if IE]>
    			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.ico">
    		<![endif]-->		
    <meta name="msapplication-TileColor" content="#f01d4f">		
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">  	
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">		
    <?php wp_head(); ?> 
    <div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.5&appId=352463151594205";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/swiper.css">-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/lightbox.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!--<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.animateNumber.js"></script>-->
                                             
             
       <script src="<?php echo get_template_directory_uri(); ?>/library/js/segment.min.js"></script>
           
         <script src="<?php echo get_template_directory_uri(); ?>/library/js/ease.min.js"></script>        
         	<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr-custom.js"></script>
             <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,400italic,700italic,900italic,100,100italic,300,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
     <script type="text/javascript">

  	  var _gaq = _gaq || [];
  	  _gaq.push(['_setAccount', 'UA-23737866-1']);
  	  _gaq.push(['_trackPageview']);
  	
  	  (function() {
  	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  	  })();

    </script>               	
               
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/style2.css" />
                <script>     
     function goToByScroll(id){                                                   
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll                     
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        'slow');
}

   $('.menu-cont').hide();
            /*

$(window).on('scroll',function() {
  var scroll = $(window).scrollTop();  
  var positionTopbar = $( ".top-bar" ).position();    
 
  if  (positionTopbar.top <= 19){
     $(".top-bar").css("top","20px");     
  }
  if  (scroll <= 434){
     $(".top-bar").css("top",434-(scroll)); 
  } 

  var wrapWork = $( "#work" );
  var positionWork = $( "#work" ).position();     
  var i = scroll/positionWork.top;

  if  (positionWork.top < (scroll+1000)){  
    if  (positionWork.top < (scroll+400)){
      wrapWork.children().slideDown(300);     
    }else{wrapWork.children().slideUp(300);}     
    wrapWork.children().css("opacity",i+0.1);     
  }
  
  var wrapAbout = $( "#about" );
  var positionAbout = $( "#about" ).position();     
  var i = scroll/positionAbout.top;

  if  (positionAbout.top < (scroll+1000)){  
    
    wrapAbout.children().css("opacity",i-0.1);     
  }  
  
  var wrapContact = $( "#contact" );
  var positionContact = $( "#contact" ).position();     
  var i = scroll/positionContact.top;

  if  (positionContact.top < (scroll+1000)){  
       
    wrapContact.children().css("opacity",i-0.2);     
  }  
  
  
  


  
  
       
});    */
  

$(window).on('scroll',function() {
  var scroll = $(window).scrollTop();  
 

  //var wrapWork = $( "#services-cont" );
  //var positionWork = $( "#services-cont" ).position();     
  // var i = scroll/positionWork.top;
  scroll = scroll + 650;
   var speeed = 400;

  
   var positionv = $( "#services-cont" ).position();    
   var vpositionv = $( "#work" ).position();  
  // var jvpositionv = $( ".blue-cont.jerab" ).position();
    
    //if  (vpositionv.top < scroll){
     //alert (vposition.top +"??? "+ scroll);

   // $( "#work" ).show(speeed); 
    // } 
    /*else {
    $( "#work .columns,#work .row" ).slideUp(speeed);  
     }*/   
   
      if  (positionv.top < scroll){
    // alert (positionv.top +"tvoje máma"+ scroll);     .delay( 800 )  
    
    $('.show1').slideDown(speeed);
    $('.show2').delay(200).slideDown(speeed);
    $('.show3').delay(400).slideDown(speeed);
    $('.show4').delay(600).fadeIn(speeed);
    $('.show5').delay(800).fadeIn(speeed);
    $('.show6').delay(1000).fadeIn(speeed);                     
                      
    /*    
    
  
    
    var i = 1;
    for (;i < 7;) {
      
    var delayA;
        delayA = i * 150;    
            
    $('.show'+i).fadeIn(speeed);
    }     
    i++;     */    
  } else {
  
    $('.show1').hide();
    $('.show2').hide();
    $('.show3').hide();
    $('.show4').hide();
    $('.show5').hide();
    $('.show6').hide();       
  
  }
     
    
   
   

  
  
       
});




               

  $(document).ready( function() {
  /*$( "#work,#about,#contact" ).children().hide();*/
  $("#dummy a, #home-menu a, .fixed-menu a").click(function(e) { 
 
        // Prevent a page reload when a link is pressed
      e.preventDefault(); 
        // Call the scroll function
      goToByScroll(this.id);       
  });
 /*  
  $( ".grid img" ).load(function() {
  $('.grid img').show();
                                              

});     */
});
</script> 

    
  </head>	
  <body <?php body_class(); ?> id="home">  

                
    <!-- Top top bar -->    
    <?php // get_template_part( 'lts/nav','topbar' ); ?>    
    <!-- Top top bar--> 	
    <div class="off-canvas-wrap">		
      <div class="inner-wrap">			
        <div id="container">	
	
                      
          <?php  /* HEADER */  ?>
           <?php  get_template_part( 'nav/nav','header' ); ?>