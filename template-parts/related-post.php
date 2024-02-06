<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );

?>

<?php if ($related) {?>
    <div class="max-w-3xl mx-auto mt-10">
        <strong class="font-nunito text-3xl">You May also like</strong>
    

<div class="grid lg:grid-cols-3 gap-5 grid-flow-row mt-10">
<?php if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>

        <div>
            <div class="flex flex-col space-y-2">
            <a class="aspect-video" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('full',array( 'class' => 'rounded-lg' )); ?></a>
            <a class="heading text-xl line-clamp-2 font-nunito" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <p class="text-base line-clamp-2"><?php echo get_the_excerpt(); ?></p>
            </div>
            <p class="text-sm mt-2"> by <strong class="italic"><?php the_author(); ?></strong></p>
        </div>
      
<?php } ?>
</div>
</div>
<?php } ?>
<?php wp_reset_postdata(); ?>