<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="max-w-3xl mx-auto min-h-dvh">
  <div class="flex flex-wrap gap-2 items-center py-3 text-sm">
    <?php the_category( '&bull;' ); ?>
  </div>
        <h1 class="text-4xl font-extrabold font-nunito">
            <?php the_title(); ?>
        </h1>
    
    
    
    <!-- article content -->
    <div class="max-w-3xl mx-auto mb-10 content">      
        <?php the_content(); ?> 
    </div>
</div> 

<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
