<?php 

function innovate_supports() {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' ); 
    register_nav_menu( 'header', 'Header Menu | Main Navigation' ); 
    register_nav_menu( 'footer-navigation', 'Footer Menu | Second Navigation' ); 
    register_nav_menu( 'footer-liens-utiles', 'Footer Liens | Second Liens Navigation' ); 
 }

 function innovate_register_assets() {
   
    wp_register_style('bundleSwiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',[], false);
    wp_register_style('style',get_theme_file_uri('assets/css/style.css'), ['bundleSwiper'],false);

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false);

    wp_register_script('bundleSwiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',[], false);
    wp_register_script('tailwindcss', 'https://cdn.tailwindcss.com',['jquery', 'bundleSwiper', 'script','IoniconEm', 'Ionicon', 'animationCompteur'], false);
    wp_register_script('IoniconEm', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', [], false);
    wp_register_script('Ionicon', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', [], false);
    wp_register_script('script',get_theme_file_uri('assets/js/script.js'), [],false);
    wp_register_script('animationCompteur', get_theme_file_uri('assets/js/animation-compteur.js'), [],false);

    wp_enqueue_style('style');
    wp_enqueue_script('tailwindcss');
}

function innovate_title_separator() {
    return '|';
}

function innovate_primary_menu_class( $classes, $items, $args ) {
    // Only affect the menu placed in the 'secondary' wp_nav_bar() theme location
    if ( 'header' === $args->theme_location ) {
        // Make these items 3-columns wide in Bootstrap
        $classes[] = 'nav-item';
    }
    
    return $classes;
}

    // function pour ajouter une ou des classes aux liens a des li du menu ul
    function innovate_menu_link_class( $attrs ) {
        
        $attrs['class'] = 'nav-link';
        return $attrs;
    }

    function innovate_init(){
        $labels_session = [
            //         Le nom au pluriel
                    'name'                => _x( 'Sessions', 'Post Type General Name'),
            //         Le nom au singulier
                    'singular_name'       => _x( 'Session', 'Post Type Singular Name'),
            //         Le libellé affiché dans le menu
                    'menu_name'           => __( 'Session'),
            //         Les différents libellés de l'administration
                    'all_items'           => __( 'Toutes les Sessions'),
                    'view_item'           => __( 'Voir les Sessions'),
                    'add_new_item'        => __( 'Ajouter une nouvelle Session'),
                    'add_new'             => __( 'Ajouter'),
                    'edit_item'           => __( 'Editer Session'),
                    'update_item'         => __( 'Modifier Session'),
                    'search_items'        => __( 'Rechercher une Session'),
                    'not_found'           => __( 'Non trouvée'),
                    'not_found_in_trash'  => __( 'Non trouvée'),
                ];
                $args_session= [
                    'label' => 'Session',
                    'labels' => $labels_session,
                    'public' => true,
                    'menu_position' => 4,
                    'menu_icon' => 'dashicons-buddicons-activity',
                    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
                    'show_in_rest' => true,
                    'has_archive' => true,
                ];
                register_post_type('sessions', $args_session);

                $labels_intervenant = [
                    //         Le nom au pluriel
                            'name'                => _x( 'Intervenants', 'Post Type General Name'),
                    //         Le nom au singulier
                            'singular_name'       => _x( 'Intervenant', 'Post Type Singular Name'),
                    //         Le libellé affiché dans le menu
                            'menu_name'           => __( 'Intervenant'),
                    //         Les différents libellés de l'administration
                            'all_items'           => __( 'Tous les Intervenants'),
                            'view_item'           => __( 'Voir les Intervenants'),
                            'add_new_item'        => __( 'Ajouter une nouvelle Intervenant'),
                            'add_new'             => __( 'Ajouter'),
                            'edit_item'           => __( 'Editer Intervenant'),
                            'update_item'         => __( 'Modifier Intervenant'),
                            'search_items'        => __( 'Rechercher une Intervenant'),
                            'not_found'           => __( 'Non trouvée'),
                            'not_found_in_trash'  => __( 'Non trouvée'),
                        ];
                        $args_intervenant= [
                            'label' => 'Intervenant',
                            'labels' => $labels_intervenant,
                            'public' => true,
                            'menu_position' => 5,
                            'menu_icon' => 'dashicons-buddicons-activity',
                            'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
                            'show_in_rest' => true,
                            'has_archive' => true,
                        ];
                        register_post_type('intervenants', $args_intervenant);


    }



    function custom_excerpt( $text, $length ) {
        $excerpt  = preg_replace( " ([.*?])", '', $text );
        $excerpt  = strip_shortcodes( $text );
        $excerpt  = strip_tags( $excerpt );
        $ellipsis = strlen( $excerpt ) > $length ? '...' : '';
        $excerpt  = mb_strimwidth( $excerpt, 0, $length, $ellipsis );

        return $excerpt;
    }

     add_action('after_setup_theme', 'innovate_supports');
     add_action('wp_enqueue_scripts', 'innovate_register_assets'); 
     add_filter('nav_menu_css_class', 'innovate_primary_menu_class', 10, 3 ); 
     add_filter('nav_menu_link_attributes', 'innovate_menu_link_class' );
     add_action('document_title_separator', 'innovate_title_separator');
     add_action('init', 'innovate_init'); 




?>