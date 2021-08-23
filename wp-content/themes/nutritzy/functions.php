<?php

function nutritzy_setup(){
    // Registro de menu
    register_nav_menus( array(
        'menu_principal'      => esc_html('Menú Principal', 'nutritzy'),
        'menu_footer'         => esc_html('Menú Footer', 'nutritzy'),
		'menu_redes_sociales' => esc_html('Menú Redes Sociales', 'nutritzy'),
    ));

    // Soporte para imagenes
    add_theme_support('post-thumbnails'); // Se añadio como extra el soporte para imagenes destacadas en los posttypes y paginas
}

add_action( 'after_setup_theme', 'nutritzy_setup');


// Register Style & JS
function nutritzy_styles_js() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '4.6' );
    wp_enqueue_style( 'leaflet', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', false, '1.7.1' );
	wp_enqueue_style( 'paceCSS', get_template_directory_uri() . '/assets/css/pace.min.css', false, '1.0' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap'));

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, '3.5.1', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.6', true);
    wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', false, '1.7.1', true);
	wp_enqueue_script('paceJS', get_template_directory_uri() . '/assets/js/pace.min.js', false, '1.0', true);
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'nutritzy_styles_js' );

// Añadir clase nav-link a la navegacion
function nutritzy_nav_class($atts, $items, $args){
    if($args->theme_location == 'menu_principal'){
        $class = 'class';
        $atts['class'] = 'nav-link';
    }

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'nutritzy_nav_class', 10, 3 ); // Explicar el viernes el 10 y 3

// Añadir clase nav-link a la navegacion
function nutritzy_navFooter_class($atts, $items, $args){
    if($args->theme_location == 'menu_footer'){
        $class = 'class';
        $atts['class'] = 'nav-link';
    }

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'nutritzy_navFooter_class', 10, 3 ); // Explicar el viernes el 10 y 3

// Registramos un Post type para mostrar la galeria de las imagenes
function nutritzy_posttype_galeria() {

	$labels = array(
		'name'                  => _x( 'Galerías', 'Post Type General Name', 'nutritzy' ),
		'singular_name'         => _x( 'Galería', 'Post Type Singular Name', 'nutritzy' ),
		'menu_name'             => __( 'Galerías', 'nutritzy' ),
		'name_admin_bar'        => __( 'Galería', 'nutritzy' ),
		'archives'              => __( 'Archivos de galería', 'nutritzy' ),
		'attributes'            => __( 'Atributos de galería', 'nutritzy' ),
		'parent_item_colon'     => __( 'Galería padre', 'nutritzy' ),
		'all_items'             => __( 'Todas las imágenes', 'nutritzy' ),
		'add_new_item'          => __( 'Añadir nueva imagen', 'nutritzy' ),
		'add_new'               => __( 'Añadir nueva', 'nutritzy' ),
		'new_item'              => __( 'Nueva gmagen', 'nutritzy' ),
		'edit_item'             => __( 'Editar galería', 'nutritzy' ),
		'update_item'           => __( 'Actualizar galería', 'nutritzy' ),
		'view_item'             => __( 'Ver galería', 'nutritzy' ),
		'view_items'            => __( 'Ver galerías', 'nutritzy' ),
		'search_items'          => __( 'Buscar en galería', 'nutritzy' ),
		'not_found'             => __( 'No encontrado', 'nutritzy' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'nutritzy' ),
		'featured_image'        => __( 'Imagen destacada', 'nutritzy' ),
		'set_featured_image'    => __( 'Agregar imagen destacada', 'nutritzy' ),
		'remove_featured_image' => __( 'Quitar imagen destacada', 'nutritzy' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nutritzy' ),
		'insert_into_item'      => __( 'Insertar en galería', 'nutritzy' ),
		'uploaded_to_this_item' => __( 'Actualizar galería', 'nutritzy' ),
		'items_list'            => __( 'Lista de galería', 'nutritzy' ),
		'items_list_navigation' => __( 'Navegación de galería', 'nutritzy' ),
		'filter_items_list'     => __( 'Filtrar imágenes de galería', 'nutritzy' ),
	);
	$args = array(
		'label'                 => __( 'Galería', 'nutritzy' ),
		'description'           => __( 'Galería de Nutritzy', 'nutritzy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type( 'galeria_nutritzy', $args );

}
add_action( 'init', 'nutritzy_posttype_galeria', 0 );

// Registramos un shortcode que sera el que muestre la galeria de las imagenes.
// Shortcode [nutritzy_galeria]
function nutritzy_galeria_shortcode(){
    $args = array(
        'post_type' => 'galeria_nutritzy',
    );

    $galeria = new WP_Query($args);

    while($galeria->have_posts()): $galeria->the_post(); ?>
        <div class="row r m-0">
            <div class="col-6 col-md-6 m-0 p-0"><img class="w-100" src="<?php the_field('imagen_1'); ?> "></div>
            <div class="col-6 col-md-6 m-0 p-0"><img class="w-100" src="<?php the_field('imagen_2'); ?> "></div>
            <div class="col-6 col-md-6 m-0 p-0"><img class="w-100" src="<?php the_field('imagen_3'); ?> "></div>
            <div class="col-6 col-md-6 m-0 p-0"><img class="w-100" src="<?php the_field('imagen_4'); ?> "></div>
        </div>
     <?php endwhile; wp_reset_postdata();
}

add_shortcode( 'nutritzy_galeria', 'nutritzy_galeria_shortcode' );

// Registramos un Post type para mostrar la galeria de las imagenes
function nutritzy_posttype_servicios() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'nutritzy' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'nutritzy' ),
		'menu_name'             => __( 'Servicios', 'nutritzy' ),
		'name_admin_bar'        => __( 'Servicio', 'nutritzy' ),
		'archives'              => __( 'Archivos de servicio', 'nutritzy' ),
		'attributes'            => __( 'Atributos de servicio', 'nutritzy' ),
		'parent_item_colon'     => __( 'Servicio padre', 'nutritzy' ),
		'all_items'             => __( 'Todos los servicios', 'nutritzy' ),
		'add_new_item'          => __( 'Añadir nuevo servicio', 'nutritzy' ),
		'add_new'               => __( 'Añadir nuevo', 'nutritzy' ),
		'new_item'              => __( 'Nuevo servicio', 'nutritzy' ),
		'edit_item'             => __( 'Editar servicio', 'nutritzy' ),
		'update_item'           => __( 'Actualizar servicio', 'nutritzy' ),
		'view_item'             => __( 'Ver servicio', 'nutritzy' ),
		'view_items'            => __( 'Ver servicios', 'nutritzy' ),
		'search_items'          => __( 'Buscar en servicio', 'nutritzy' ),
		'not_found'             => __( 'No encontrado', 'nutritzy' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'nutritzy' ),
		'featured_image'        => __( 'Imagen destacada', 'nutritzy' ),
		'set_featured_image'    => __( 'Agregar imagen destacada', 'nutritzy' ),
		'remove_featured_image' => __( 'Quitar imagen destacada', 'nutritzy' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nutritzy' ),
		'insert_into_item'      => __( 'Insertar en servicio', 'nutritzy' ),
		'uploaded_to_this_item' => __( 'Actualizar servicio', 'nutritzy' ),
		'items_list'            => __( 'Lista de servicio', 'nutritzy' ),
		'items_list_navigation' => __( 'Navegación de servicios', 'nutritzy' ),
		'filter_items_list'     => __( 'Filtrar imágenes de servicio', 'nutritzy' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'nutritzy' ),
		'description'           => __( 'Servicio de Nutritzy', 'nutritzy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-text-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type( 'servicios_nutritzy', $args );

}
add_action( 'init', 'nutritzy_posttype_servicios', 0 );

// Registramos un shortcode que sera el que muestren los servicios.
// Shortcode [nutritzy_servicio]
function nutritzy_servicios_shortcode(){
    $args = array(
        'post_per_page' => 3,
        'post_type' => 'servicios_nutritzy',
        'orderby' => 'name',
        'order' => 'ASC'
    );

    $galeria = new WP_Query($args);

    while($galeria->have_posts()): $galeria->the_post(); ?>
    <div class="col-12 col-sm-10 col-md-7 col-lg-3 border-right border-left">
        <div class="card text-center justify-content-center align-items-center car1" >
            <?php the_post_thumbnail(); ?>
            <div class="card-body ">
                <h5 class="card-title "> <?php the_title(); ?> </h5>
                <p class="card-text "> <?php the_excerpt(); ?></p>
                <a href="#" class="btn py-2 px-4">Ver Más</a>
            </div>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata();
}

add_shortcode( 'nutritzy_servicio', 'nutritzy_servicios_shortcode' );


// Registramos un shortcode que sera el que muestre el mapa.
// Shortcode [nutritzy_mapa]
function nutritzy_mapa_shortcode(){
    $lat = get_field('latitud');
    $lng = get_field('longitud'); 
    $direccion = get_field('direccion');
	$ubicacion = get_field('ubicacion');
	
	?>

    <input type="hidden" id="lat" value="<?php echo $lat; ?>">
    <input type="hidden" id="lng" value="<?php echo $lng; ?>">
    <input type="hidden" id="direccion" value="<?php echo $direccion; ?>">
	<input type="hidden" id="ubi" value="<?php echo $ubicacion; ?>">

    <div id="mapa"></div>

    <?php
}

add_shortcode( 'nutritzy_mapa', 'nutritzy_mapa_shortcode' );