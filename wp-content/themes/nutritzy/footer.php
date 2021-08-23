<!-- Inicio de footer  -->
<footer class="pt-6">
    <div class="container-fluid text-center">
        <div class="row">
            <?php
                $args = array(
                        'menu_class' => 'd-flex list-style-none mb-0 text-dark justify-content-center',
                        'container_id' => 'menu_footer',
                        'container_class' => 'col-12 col-sm-12 col-md-12 col-lg-11 bf p-3 text-dark',
                        'theme_location' => 'menu_footer',
                );

                wp_nav_menu( $args );
            ?>

            <div class="col-12 col-sm-12 col-md-12 col-lg-1 d-flex flex-column align-items-center justify-content-center bf1 p-3 text-center">
                <a href="#top"><img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/footer/flecha-arriba-footer.svg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="container-fluid bf2">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10  p-2 ">
                <p class="mb-0 text-white pl-4 footz">@ Nutritzy 2021</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2  p-2 text-right d-flex justify-content-around align-items-center pr-4">

                <img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/Iconos Redes Sociales Footer/icon-instagram.svg" alt="">
                <img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/Iconos Redes Sociales Footer/icon-facebook.svg" alt="">
                <img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/Iconos Redes Sociales Footer/icon-twitter.svg" alt="">

            </div>
        </div>

    </div>
</footer>
<!-- Fin de footer  -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<?php wp_footer(); ?>
<script src="js/bootstrap.min.js"></script>

</body>
</html>