<!-- <div class="gallery__card card-gallery">ここはindex.phpでやる -->
    
    <div class="card-gallery__body">
        
    <!-- <?php var_dump($post); ?> -->

        <h3 class="card-gallery__ttl">
            <?php echo get_post_meta( get_the_ID(), 'title', true ); ?>
        </h3>
        <p class="card-gallery__description">
            <?php echo get_post_meta( get_the_ID(), 'description', true ); ?>
        </p>
        <div class="card-gallery__inner">
            <p class="card-gallery__spentTime">
                所要時間：<?php echo get_post_meta( get_the_ID(), 'spentTimes', true ); ?>
            </p>
            <p class="card-gallery__usedSkills">
                使用技術：<?php echo get_post_meta( get_the_ID(), 'usedSkills', true ); ?>
            </p>
            <?php
                $url = get_post_meta( get_the_ID(), 'siteURL', true );
                if ( $url ) {
                    echo '<a class="card-gallery__link" href="' . esc_url( $url ) . '">サイトを見る</a>';
                }
            ?>
        </div>
        <!-- /.card-gallery__inner -->
    </div>
    <!-- /.card-gallery__body -->
    <div class="card-gallery__visualBox">
        <?php
            $url = get_post_meta( get_the_ID(), 'siteURL', true );
            if ( $url ) {
                echo 
                '<a class="card-gallery__link" href="' . esc_url( $url ) . '">
                    <figure class="card-gallery__thumb">';
                       
                $image_id = get_post_meta( get_the_ID(), "thumbnail", true );
                if ($image_id){
                    echo wp_get_attachment_image( $image_id, );
                }
                        
                echo 
                    '</figure>
                </a>';
            }
        ?>

    </div>
    <!-- /.card-gallery__visualBox -->

<!-- </div>ここはindex.phpでやる -->
