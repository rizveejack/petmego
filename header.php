<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://github.com/rizveejack">

    <?php wp_head() ?>
</head>
<body class="text-lg text-neutral-800 leading-relaxed">
    <header class="text-center pb-10 pt-5">
    <a href="<?php echo get_site_url(); ?>">
    
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
        $site_title = get_bloginfo( 'name' );
        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="'.$site_title.'" class="mx-auto w-64">';?>
    </a>
    <?php 
      wp_nav_menu(
          array(
            'container_class' => 'mt-5 py-1 max-w-3xl mx-auto hidden lg:block ',
            'menu' => 'primary',
            'container' => 'nav',
            'menu_class' => 'primary flex items-center justify-center space-x-3 list-none ml-0 mb-0 font-bold border-t border-b border-neutral-700',
          )
        );
    ?>
    </header>
    <div class="p-4 lg:p-0">
    