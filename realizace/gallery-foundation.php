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
        
                <div class="grid-item large-3 columns">
                <?php $image_attributes = wp_get_attachment_image_src( $attachment->ID,"large"  ); ?>
         
               <?php if ( $image_attributes ) : ?>
                  <a href="<?php echo $image_attributes[0]; ?>">  
              <?php endif; ?>
                <?php echo wp_get_attachment_image( $attachment->ID, 'thumbnail' ); ?>
                </a>
                    <?php // echo apply_filters( 'the_title', $attachment->post_title ); ?>
                </div>
                <?php
            }
        }
     ?>          