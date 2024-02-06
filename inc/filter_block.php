<?PHP


add_filter( 'allowed_block_types_all', 'CTG_allowed_block_types', 10, 2 );

function CTG_allowed_block_types() {

    return [
        "core/paragraph",
        "core/spacer",
        "core/heading",
        "core/list",
        "core/quote",
        "core/image",
        "core/embed",
        "core/separator",
        "core/media-text",
        "rank-math/toc-block",
        "rank-math/faq-block",
        "rank-math/howto-block",
        "rank-math/rich-snippet",
    ];
    
}




function remove_default_categories($categories, $post) {
    return array();
}
add_filter('block_categories_all', 'remove_default_categories', 10, 2);


// admin filter
function restrict_editor_access_to_headless_settings() {
    // Check if the current user is an editor
    if (current_user_can('editor')) {
        remove_menu_page( 'edit-comments.php' ); //Comments
        remove_menu_page( 'tools.php' ); //
        remove_menu_page('headless-settings');
        remove_menu_page('rank-math');
        remove_menu_page('upload.php');
    }
}

add_action('admin_init', 'restrict_editor_access_to_headless_settings');