<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

    <title>Nutritzy</title>

</head>
<body id="top">

<!-- Incio de navegacion -->
<div class="container-fluid bg-white z-index-10" id="menu-principal">
    <nav class="navbar navbar-expand-sm mb-2 navbar-light">
        <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Nutritzy.png" alt=""   class="d-inline-block aling-top w-25" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
            $args = array(
                    'menu_class' => 'navbar-nav ml-auto',
                    'container_id' => 'navbarNav',
                    'container_class' => 'collapse navbar-collapse',
                    'theme_location' => 'menu_principal',
            );

            wp_nav_menu( $args );
        ?>
    </nav>
</div>