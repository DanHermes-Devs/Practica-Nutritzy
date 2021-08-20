<?php get_header() ?>
<!--  ubicacion -->
<div class="container-fluid" id="ubicacion">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 bg-light">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100 ">
                <h1 class="text-black text-center"> <?php the_title(); ?> </h1>

                <div class="d-flex align-items-center mt-4">
                    <img src="<?php the_field('direccion_imagen'); ?>" alt="" >
                    <p class="mb-0 pl-2"> <?php the_field('direccion'); ?> </p>
                </div>
                <div class="d-flex align-items-center pt-2">
                    <img src="<?php the_field('telefono_imagen'); ?>" alt="" >
                    <p class="mb-0 pl-2"> <?php the_field('telefono'); ?> </p>
                </div>
                <div class="d-flex align-items-center pt-2">
                    <img src="<?php the_field('ubicacion_imagen'); ?>" alt="" >
                    <p class="mb-0 pl-2"> <?php the_field('ubicacion'); ?> </p>
                </div>

                <a href="#" class="btn text-center w-50 mt-4">¿Como llegar?</a>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 m-0">
            <?php do_shortcode('[nutritzy_mapa]'); ?>
        </div>
    </div>
</div>
<!-- Fin  -->
<?php get_footer(); ?>