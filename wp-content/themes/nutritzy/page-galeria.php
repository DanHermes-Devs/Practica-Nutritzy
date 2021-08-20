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
            <?php $args = array(
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
            <?php endwhile; wp_reset_postdata(); ?>

            <?php /* do_shortcode('[nutritzy_galeria]'); */ ?>
        </div>
    </div>
</div>
<!-- Fin -->
<?php get_footer(); ?>