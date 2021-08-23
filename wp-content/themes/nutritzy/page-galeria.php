<?php get_header() ?>
<!--  galeria -->
<div class="container-fluid" id="galeria">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 bg p-0 m-0">

            <div class="d-flex flex-column justify-content-center align-items-center vh-100 p-4 vh">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>


        <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 m-0">
            <?php do_shortcode('[nutritzy_galeria]'); ?>
        </div>
    </div>
</div>
<!-- Fin -->
<?php get_footer(); ?>