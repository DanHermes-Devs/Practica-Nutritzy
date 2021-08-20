<?php get_header(); ?>
<!-- Inicio contacto -->
<div class="container-fluid image-Cont" id="contacto">
    <div class="row opacidad">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="d-flex flex-column text-center justify-content-center align-items-center vh-100">
                <h1> <?php the_title(); ?> </h1>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100 vh w-100">
                <h1 class="text-center mb-3 pt-3">Formulario</h1>
                <?php echo do_shortcode('[contact-form-7 id="32" title="Formulario de contacto 1"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Fin  -->

<?php get_footer(); ?>

