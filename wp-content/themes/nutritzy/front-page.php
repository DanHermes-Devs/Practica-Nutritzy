<?php get_header(); ?>
<!-- inicion -->
<div class="container-fluid p-0 m-0 " id="inicio">
    <div class="row p-0 m-0">
        <div class="col-lg-6 col-xl-6 image-font">
            <div class="d-flex flex-column justify-content-center vh-100 w-75 p">
                <div class="text-white">
                    <?php the_content(); ?>
                </div>
                <a href="#" class="btn py-2 px-4">Leer más</a>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6 d-none d-sm-none d-md-none d-lg-block p-0 m-0 image-font2"></div>
    </div>
</div>
<!-- Fin de inicio -->

<?php get_footer(); ?>

