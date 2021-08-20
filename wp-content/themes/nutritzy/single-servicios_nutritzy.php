<?php get_header() ?>
<!--  ubicacion -->
<div class="container-fluid pt-3" id="ubicacion">
    <div class="row">
        <div class="col-12">
            <?php
            if(get_post_type() === 'servicios_nutritzy'){ ?>
                <div class="m-auto text-center"><?php the_post_thumbnail(); ?></div>
                <h1 class="text-center"><?php the_title(); ?></h1>
                <div class="container">
                    <div class="text-justify">
                    <?php 
                        the_content();
                    ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Fin  -->
<?php get_footer(); ?>