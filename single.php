<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="max-w-3xl mx-auto">
    <div class="flex flex-wrap gap-2 items-center py-3 text-sm">
    <?php function_exists('rank_math_the_breadcrumbs')? rank_math_the_breadcrumbs() : the_category( '&bull;' ); ?>
    </div>

        
        <h1 class="text-4xl font-extrabold font-nunito">
            <?php the_title(); ?>
        </h1>
        <!-- excerpt -->
        <p class="block italic text-base">
            <?php echo get_the_excerpt(); ?>
        </p>
        <!-- writer bio -->
        <?php get_template_part('template-parts/author-bio',null, ['context' => 'top']); ?>
        <!-- social share -->
        <?php get_template_part('template-parts/social-icons', null, ['context' => 'top']); ?>
    </div>
    <!-- article banner -->
    <?php if ( has_post_thumbnail() ) { ?>
        <div class="aspect-video relative max-w-4xl mx-auto mb-5">
            <?php the_post_thumbnail( 'full', array( 'class' => 'rounded-lg' ) );?>
            
        </div>
   <?php } ?>
    
    <!-- article content -->
    <div class="max-w-3xl mx-auto content">      
        <?php the_content(); ?> 
        <!-- tags -->
        <?php the_tags( '<ul class="flex flex-row flex-wrap-reverse gap-2 list-none mt-7 ml-0 text-sm "><li class="py-2 px-4 bg-neutral-100 rounded-full">', '</li><li class="py-2 px-4 bg-neutral-100 rounded-full ">', '</li></ul>' ); ?>
        <!-- social Share -->
        <?php get_template_part('template-parts/social-icons'); ?>
        <!-- writer -->
        <?php get_template_part('template-parts/author-bio'); ?>    
    </div>
    <?php get_template_part('template-parts/related-post'); ?>

<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
