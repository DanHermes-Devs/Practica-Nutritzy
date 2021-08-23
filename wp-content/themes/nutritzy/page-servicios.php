<?php get_header() ?>
<!-- Incio de cartas -->
<div class="container-fluid" id="servicios">
    <h1 class="text-center pb-5">Servicios</h1>
    <div class="row justify-content-center">

        <?php $args = array(
                'posts_per_page' => 10,
                'post_type' => 'servicios_nutritzy',
                'orderby' => 'name',
                'order' => 'ASC'
            );

            $servicio = new WP_Query($args);

            while($servicio->have_posts()): $servicio->the_post(); ?>

            <div class="col-12 col-sm-10 col-md-7 col-lg-3 border-right border-left">
                <div class="card text-center justify-content-center align-items-center car1" >
                    <?php the_post_thumbnail(); ?>

                    <div class="card-body ">
                        <h5 class="card-title "> <?php the_title(); ?> </h5>
                        <p class="card-text "> <?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn py-2 px-4">Ver Más</a>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

            <?php // do_shortcode('[nutritzy_servicio]'); ?>
    </div>
</div>
<!-- Fin de catartas -->
<?php get_footer(); ?>