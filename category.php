<?php get_header(); ?>
<div class="max-w-3xl mx-auto min-h-dvh">
<div class="grid lg:grid-cols-3 gap-5 grid-flow-row mt-10">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div>
            <div class="flex flex-col space-y-2">
            <a class="aspect-video" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('full',array( 'class' => 'rounded-lg' )); ?></a>
            <a class="heading text-xl line-clamp-2 font-nunito" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            <p class="text-base line-clamp-2 mt-2"><?php echo get_the_excerpt(); ?></p>
            </div>
            <p class="text-sm mt-2"> by <strong class="italic"><?php the_author(); ?></strong></p>
        </div>




<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

?>
</div>
</div>
    

<?php get_footer(); ?>
