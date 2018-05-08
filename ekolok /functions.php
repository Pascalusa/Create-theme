<?php

/*************************************Ajout css************************************ */
function ekolokl_styles(){
 wp_enqueue_style('style css', get_stylesheet_directory_uri().'/style.css');
 wp_enqueue_style('home css', get_stylesheet_directory_uri().'/home.css');
}

add_action('wp_enqueue_scripts','ekolokl_styles');

// function about_customize_register($wp_customize) {
//     $wp_customize->add_section('title', array(
//         'title' => __("Changer Title", "dofast"),
//         "priority" => 1
//     ));

//     $wp_customize->add_setting('title', array(
//         'default' => __("Welcome to theme customize apli"),
//         "transport" => 'refresh'
//     ));

//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'theme_customize', array(
//         'label' => __("Chagne Title", 'dofast'),
//         'section' => "title",
//         'setting' => "title"
//         )));
// }

// add_action('customize_register','about_customize_register');


function my_custom_text_settings( $wp_customize ) {

    // Register the settings
    $wp_customize->add_setting( 'my_setting', array(
        'default'        => 'some-default-value',
        'type'           => 'theme_mod',
        'capability'     => 'edit_theme_options',
    ) );

    // Add the controls
    $wp_customize->add_control( 'my_setting', array(
        'label'       => __( 'My custom control', 'translation_domain' ),
        'section'     => 'my_section',
        'settings'    => 'my_setting',
        'type'        => 'text',
        'priority'    => 10
    ) );

}
add_action( 'customize_register', 'my_custom_text_settings' );



/*/*************************************Creation d'option dans  admin************************************ */
// add_action( 'init', 'codex_location_init' );

// function codex_location_init() {
// 	$labels = array(
// 		'name'               => _x( 'locations', 'post type general name', 'your-plugin-textdomain' ),
// 		'singular_name'      => _x( 'Location', 'post type singular name', 'your-plugin-textdomain' ),
// 		'menu_name'          => _x( 'Locations', 'admin menu', 'your-plugin-textdomain' ),
// 		'name_admin_bar'     => _x( 'location', 'add new on admin bar', 'your-plugin-textdomain' ),
// 		'add_new'            => _x( 'Ajouter location', 'book', 'your-plugin-textdomain' ),
// 		'add_new_item'       => __( 'Ajouter une nouvelle location', 'your-plugin-textdomain' ),
// 		'new_item'           => __( 'Nouvelle location', 'your-plugin-textdomain' ),
// 		'edit_item'          => __( 'Editer une location', 'your-plugin-textdomain' ),
// 		'view_item'          => __( 'Voir la location', 'your-plugin-textdomain' ),
// 		'all_items'          => __( 'Toutes les locations', 'your-plugin-textdomain' ),
// 		'search_items'       => __( 'Chercher les locations', 'your-plugin-textdomain' ),
// 		'parent_item_colon'  => __( 'Parent locations:', 'your-plugin-textdomain' ),
// 		'not_found'          => __( 'Désolé aucune aucun location trouvé.', 'your-plugin-textdomain' ),
// 		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
// 	);

// 	$args = array(
// 		'labels'             => $labels,
//                 'description'        => __( 'Description.', 'your-plugin-textdomain' ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
 //         'taxonomies' => array( 'genres' ),

// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => 'location' ),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 5,
// 		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
// 	);

// 	register_post_type( 'location', $args );
// }*/



/*************************************Image à la une article************************************ */
 add_theme_support('post-thumbnails');
 add_image_size('small-thumbnails', 540, 320, true);

/*************************************Extrait Article************************************ */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 20 );

/*************************************Menus************************************ */
function register_my_menus() {
register_nav_menus(array(
	'primary' =>__('Primary Menu'),
	'footer' =>__('footer Menu'),
	));
}
add_action( 'init', 'register_my_menus' );
/*************************************tableau dans article************************************ */
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

/*************************************Widget************************************ */

function ekolok_init(){
	   register_sidebar( array(
    'name' => 'Level Up New Widget Area',
    'id' => 'level_up_new_widget_area',
    'before_widget' => '<aside>',
    'before_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
	));
}

add_action('widgets_init', 'ekolok_init');

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 https://jeremyhixon.com/tool/wordpress-meta-box-generator-v2-beta/
 https://metabox.io/online-generator/
 */

function image_box_get_meta( $value ) {
    global $post;

    $field = get_post_meta( $post->ID, $value, true );
    if ( ! empty( $field ) ) {
        return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
    } else {
        return false;
    }
}

function image_box_add_meta_box() {
    add_meta_box(
        'image_box-image-box',
        __( 'Image box', 'image_box' ),
        'image_box_html',
        'post',
        'advanced',
        'default'
    );
    add_meta_box(
        'image_box-image-box',
        __( 'Image box', 'image_box' ),
        'image_box_html',
        'link',
        'advanced',
        'default'
    );
}
add_action( 'add_meta_boxes', 'image_box_add_meta_box' );

function image_box_html( $post) {
    wp_nonce_field( '_image_box_nonce', 'image_box_nonce' ); ?>

    <h2 style="text-align: center; font-size: 1.2em;">Slider images</h2>

    <p>
        <label for="image_box_image1"><?php _e( 'Image1', 'image_box' ); ?></label><br>
        <input type="text" name="image_box_image1" id="image_box_image1" value="<?php echo image_box_get_meta( 'image_box_image1' ); ?>">
        <li><img src="<?php echo image_box_get_meta( 'image_box_image1' ); ?>" style="width: 20%;"> 
    </p>    <p>
        <label for="image_box_image2"><?php _e( 'Image2', 'image_box' ); ?></label><br>
        <input type="text" name="image_box_image2" id="image_box_image2" value="<?php echo image_box_get_meta( 'image_box_image2' ); ?>">
        <li><img src="<?php echo image_box_get_meta( 'image_box_image2' ); ?>" style="width: 20%;"> 
    </p>    <p>
        <label for="image_box_image3"><?php _e( 'Image3', 'image_box' ); ?></label><br>
        <input type="text" name="image_box_image3" id="image_box_image3" value="<?php echo image_box_get_meta( 'image_box_image3' ); ?>">
        <li><img src="<?php echo image_box_get_meta( 'image_box_image3' ); ?>" style="width: 20%;"> 
    </p>    <p>
        <label for="image_box_image4"><?php _e( 'Image4', 'image_box' ); ?></label><br>
        <input type="text" name="image_box_image4" id="image_box_image4" value="<?php echo image_box_get_meta( 'image_box_image4' ); ?>">
        <li><img src="<?php echo image_box_get_meta( 'image_box_image4' ); ?>" style="width: 20%;"> 
    </p><?php
}

function image_box_save( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! isset( $_POST['image_box_nonce'] ) || ! wp_verify_nonce( $_POST['image_box_nonce'], '_image_box_nonce' ) ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['image_box_image1'] ) )
        update_post_meta( $post_id, 'image_box_image1', esc_attr( $_POST['image_box_image1'] ) );
    if ( isset( $_POST['image_box_image2'] ) )
        update_post_meta( $post_id, 'image_box_image2', esc_attr( $_POST['image_box_image2'] ) );
    if ( isset( $_POST['image_box_image3'] ) )
        update_post_meta( $post_id, 'image_box_image3', esc_attr( $_POST['image_box_image3'] ) );
    if ( isset( $_POST['image_box_image4'] ) )
        update_post_meta( $post_id, 'image_box_image4', esc_attr( $_POST['image_box_image4'] ) );
}
add_action( 'save_post', 'image_box_save' );

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
      https://metabox.io/online-generator/
      http://hasinhayder.github.io/cmb2-metabox-generator/
 */

function infos_principales_get_meta( $value ) {
    global $post;

    $field = get_post_meta( $post->ID, $value, true );
    if ( ! empty( $field ) ) {
        return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
    } else {
        return false;
    }
}

function infos_principales_add_meta_box() {
    add_meta_box(
        'infos_principales-infos-principales',
        __( 'Infos principales', 'infos_principales' ),
        'infos_principales_html',
        'post',
        'advanced',
        'default'
    );
}
add_action( 'add_meta_boxes', 'infos_principales_add_meta_box' );

function infos_principales_html( $post) {
    wp_nonce_field( '_infos_principales_nonce', 'infos_principales_nonce' ); ?>

    <p>
        <label for="infos_principales_ville"><?php _e( 'Ville', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_ville" id="infos_principales_ville" value="<?php echo infos_principales_get_meta( 'infos_principales_ville' ); ?>">
    </p>    <p>
        <label for="infos_principales_loyer_mensuel_"><?php _e( 'Loyer mensuel ', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_loyer_mensuel_" id="infos_principales_loyer_mensuel_" value="<?php echo infos_principales_get_meta( 'infos_principales_loyer_mensuel_' ); ?>">
    </p>    <p>
        <label for="infos_principales_disponible_"><?php _e( 'Disponible ', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_disponible_" id="infos_principales_disponible_" value="<?php echo infos_principales_get_meta( 'infos_principales_disponible_' ); ?>">
    </p>    <p>
        <label for="infos_principales_dure_"><?php _e( 'Durée ', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_dure_" id="infos_principales_dure_" value="<?php echo infos_principales_get_meta( 'infos_principales_dure_' ); ?>">
    </p>
    <p>
        <label for="infos_principales_auteur_de_lannonce_"><?php _e( 'Prénom ', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_auteur_de_lannonce_" id="infos_principales_auteur_de_lannonce_" value="<?php echo infos_principales_get_meta( 'infos_principales_auteur_de_lannonce_' ); ?>">
    </p>    
    <p>
        <label for="infos_principales_profession_"><?php _e( 'Profession', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_profession_" id="infos_principales_profession_" value="<?php echo infos_principales_get_meta( 'infos_principales_profession_' ); ?>">
    </p>   
    <label for="infos_principales_image_"><?php _e( 'Photo Profile (Si il n'."'".'y a pas <br> de photo laisser copier/coller <br> ce lien par défault <br> http://www.cams-it.com/wp-content/uploads/2015/05/default-placeholder-300x200.png)', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_image_" id="infos_principales_image_" value="<?php echo infos_principales_get_meta( 'infos_principales_image_' ); ?>">
    </p>  
    </p>   
    <label for="infos_principales_type_"><?php _e( 'Type de Logement', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_type_" id="infos_principales_type__" value="<?php echo infos_principales_get_meta( 'infos_principales_type_' ); ?>">
    </p>
    <label for="infos_principales_occupants_"><?php _e( 'Occupants Actuels', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_occupants_" id="infos_principales_occupants_" value="<?php echo infos_principales_get_meta( 'infos_principales_occupants_' ); ?>">
    </p>
    <label for="infos_principales_superficie_"><?php _e( 'Superficie', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_superficie_" id="infos_principales_superficie_" value="<?php echo infos_principales_get_meta( 'infos_principales_superficie_' ); ?>">
    </p>
    <p>
    <label for="infos_principales_chambre_"><?php _e( 'Nbre de Chambre', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_chambre_" id="infos_principales_chambre_" value="<?php echo infos_principales_get_meta( 'infos_principales_chambre_' ); ?>">
    </p>
    <p>
    <label for="infos_principales_chambre-meuble_"><?php _e( 'Chambre meublé?', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_chambre-meuble_" id="infos_principales_chambre-meuble_" value="<?php echo infos_principales_get_meta( 'infos_principales_chambre-meuble_' ); ?>">
    </p>
    <label for="infos_principales_type_etudiant_"><?php _e( 'Colocataire recherché', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_type_etudiant_" id="infos_principales_type_etudiant_" value="<?php echo infos_principales_get_meta( 'infos_principales_type_etudiant_' ); ?>">
    </p>
    <label for="infos_principales_avantage_"><?php _e( 'Les + de cette location', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_avantage_" id="infos_principales_avantage_" value="<?php echo infos_principales_get_meta( 'infos_principales_avantage_' ); ?>">
    </p>
    <label for="infos_principales_equipement_int_"><?php _e( 'Equipement intérieur (Cuisine équipée, Internet...)', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_equipement_int_" id="infos_principales_equipement_int_" value="<?php echo infos_principales_get_meta( 'infos_principales_equipement_int_' ); ?>">
    </p>
    <label for="infos_principales_inclus_dans_loyer_"><?php _e( 'Inclus dans le loyer', 'infos_principales' ); ?></label><br>
        <input type="text" name="infos_principales_inclus_dans_loyer_" id="infos_principales_inclus_dans_loyer_" value="<?php echo infos_principales_get_meta( 'infos_principales_inclus_dans_loyer_' ); ?>">
    </p><?php
}

function infos_principales_save( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! isset( $_POST['infos_principales_nonce'] ) || ! wp_verify_nonce( $_POST['infos_principales_nonce'], '_infos_principales_nonce' ) ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['infos_principales_ville'] ) )
        update_post_meta( $post_id, 'infos_principales_ville', esc_attr( $_POST['infos_principales_ville'] ) );
    if ( isset( $_POST['infos_principales_loyer_mensuel_'] ) )
        update_post_meta( $post_id, 'infos_principales_loyer_mensuel_', esc_attr( $_POST['infos_principales_loyer_mensuel_'] ) );
    if ( isset( $_POST['infos_principales_disponible_'] ) )
        update_post_meta( $post_id, 'infos_principales_disponible_', esc_attr( $_POST['infos_principales_disponible_'] ) );
    if ( isset( $_POST['infos_principales_dure_'] ) )
        update_post_meta( $post_id, 'infos_principales_dure_', esc_attr( $_POST['infos_principales_dure_'] ) );
    if ( isset( $_POST['infos_principales_dure_'] ) )
        update_post_meta( $post_id, 'infos_principales_auteur_de_lannonce_', esc_attr( $_POST['infos_principales_auteur_de_lannonce_'] ) );
    if ( isset( $_POST['infos_principales_profession_'] ) )
        update_post_meta( $post_id, 'infos_principales_profession_', esc_attr( $_POST['infos_principales_profession_'] ) );
    if ( isset( $_POST['infos_principales_image_'] ) )
        update_post_meta( $post_id, 'infos_principales_image_', esc_attr( $_POST['infos_principales_image_'] ) );
    if ( isset( $_POST['infos_principales_type_'] ) )
        update_post_meta( $post_id, 'infos_principales_type_', esc_attr( $_POST['infos_principales_type_'] ) );
    if ( isset( $_POST['infos_principales_occupants_'] ) )
        update_post_meta( $post_id, 'infos_principales_occupants_', esc_attr( $_POST['infos_principales_occupants_'] ) );
    if ( isset( $_POST['infos_principales_superficie_'] ) )
        update_post_meta( $post_id, 'infos_principales_superficie_', esc_attr( $_POST['infos_principales_superficie_'] ) );
    if ( isset( $_POST['infos_principales_chambre_'] ) )
        update_post_meta( $post_id, 'infos_principales_chambre_', esc_attr( $_POST['infos_principales_chambre_'] ) );
    if ( isset( $_POST['infos_principales_chambre-meuble_'] ) )
        update_post_meta( $post_id, 'infos_principales_chambre-meuble_', esc_attr( $_POST['infos_principales_chambre-meuble_'] ) );
    if ( isset( $_POST['infos_principales_type_etudiant_'] ) )
        update_post_meta( $post_id, 'infos_principales_type_etudiant_', esc_attr( $_POST['infos_principales_type_etudiant_'] ) );
    if ( isset( $_POST['infos_principales_avantage_'] ) )
        update_post_meta( $post_id, 'infos_principales_avantage_', esc_attr( $_POST['infos_principales_avantage_'] ) );
    if ( isset( $_POST['infos_principales_equipement_int_'] ) )
        update_post_meta( $post_id, 'infos_principales_equipement_int_', esc_attr( $_POST['infos_principales_equipement_int_'] ) );
    if ( isset( $_POST['infos_principales_inclus_dans_loyer_'] ) )
        update_post_meta( $post_id, 'infos_principales_inclus_dans_loyer_', esc_attr( $_POST['infos_principales_inclus_dans_loyer_'] ) );
}
add_action( 'save_post', 'infos_principales_save' );
// http://thankbob.com/meta-box-generator/
// http://jeremyhixon.com/tool/wordpress-meta-box-generator/
// https://metabox.io/online-generator/
// http://hasinhayder.github.io/cmb2-metabox-generator/

