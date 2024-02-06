<?php 
if (!isset($args["context"])) {
    $args["context"]=null;
}
$cssClasses = $args["context"] !=='top'? "":"border-gray-200 border-t border-b";
?>

<div class="py-2 flex items-center justify-between my-5 <?php echo $cssClasses?>">
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
                <span>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-bookmark.svg' ); ?>" alt=""/>
                </span>
                <span data-attribute="<?php the_permalink(); ?>" id="popupLink" data-type="facebook">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-facebook.svg' ); ?>" alt=""/>
                </span>
                
                <span data-attribute="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-twitter.svg' ); ?>" alt=""/>
                </span>
                <span data-attribute="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-linkedin.svg' ); ?>" alt=""/>
                </span>
                <span data-attribute="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon-link.svg' ); ?>" alt=""/>
                </span>
            </div>
        </div>