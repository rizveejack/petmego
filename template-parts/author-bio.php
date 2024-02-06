<?php 
if (!isset($args["context"])) {
    $args["context"]=null;
    $cssClass = "w-24 h-24";
    $mobileCssClass = "flex-col lg:flex-row";
}else{
    $cssClass = "w-12 h-12";
    $mobileCssClass = "flex-row";
}
?>

<div class="flex items-center space-x-2 mb-5 <?php echo $mobileCssClass?>">
            <div class="aspect-square rounded-full relative <?php echo $cssClass?>">
                <image
                    src="<?php
                    $author_id = get_the_author_meta( 'ID' );
                    echo get_avatar_url($author_id); ?>"
                    alt="avater"
                    class="rounded-full"
                    
                />
            </div>
            <div class="py-4">
                <strong class="font-nunito text-lg">
                    <?php the_author(); ?>
                </strong>
                <?php if ($args["context"]==="top"){?>
                    <div class="flex space-x-1">
                        <span class="text-sm font-medium">Updated</span>
                        <span class="text-sm font-light">on</span>
                        <span class="text-sm font-medium"><?php echo get_the_modified_date( 'F jS, Y' ); ?></span>
                    </div>
                <?php } else { ?>
                    <div class="text-base">
                        <?php echo get_the_author_meta("description")?>
                    </div>
                <?php } ?>
                
            </div>
        </div>