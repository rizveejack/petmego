<?php 
if (!isset($args["context"])) {
    $args["context"]=null;
}
$cssClasses = $args["context"] !=='top'? "":"border-gray-200 border-t border-b";
?>

<div class="h-10 py-2 flex items-center justify-between my-5 <?php echo $cssClasses?>">
            <div class="flex space-x-4">
                <div class="flex items-center space-x-2">
                    <img class="clap" src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-clap.svg' ); ?>" alt="clap" id="<?php echo get_the_ID(); ?>"/>
                    <span class="italic text-sm clap-count" id="clap_data">
                        <?php 
                        if (get_post_meta( get_the_ID(), '_clap', true ) === '') {
                            echo 0;
                        } else {
                            echo get_post_meta( get_the_ID(), '_clap', true );
                        }
                        
                        ?>
                    </span>
                </div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-comment.svg' ); ?>" alt=""/>
            </div>
            <div class="flex items-center space-x-4">
                <a target="_blank" href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" >
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-bookmark.svg' ); ?>" alt=""/>
                </a>
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" id="popupLink" data-type="facebook">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-facebook.svg' ); ?>" alt=""/>
                </a>
                
                <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_excerpt(); ?>&url=<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-twitter.svg' ); ?>" alt=""/>
                </a>
                <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-linkedin.svg' ); ?>" alt=""/>
                </a>
                <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>&description=<?php echo get_the_excerpt(); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-link.svg' ); ?>" alt=""/>
                </a>
            </div>
        </div>