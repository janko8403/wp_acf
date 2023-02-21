</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-2 d-none d-md-block">
                <div class="footer-name">O tikrow</div>
                <?php wp_nav_menu( array( 'theme_location' => 'footer_1', 'menu_class' => 'nav-footer' ) ); ?>
            </div>
            <div class="col-md-12 col-lg-3 d-none d-md-block">
                <div class="footer-name">Dla pracowników</div>
                <?php wp_nav_menu( array( 'theme_location' => 'footer_2', 'menu_class' => 'nav-footer' ) ); ?>

                <a class="btn btn_red mt-4 d-none d-md-table" target="_blank" href="https://partner.tikrow.com/login?_ga=2.221121051.2066856408.1666803976-2147386924.1663935391">Logowanie dla pracowników</a>
            </div>
            <div class="col-md-12 col-lg-3 d-none d-md-block">
                <div class="footer-name">Dla firm</div>
                <?php wp_nav_menu( array( 'theme_location' => 'footer_3', 'menu_class' => 'nav-footer' ) ); ?>

                <a class="btn btn_red mt-4 d-none d-md-table" target="_blank" href="https://klient.tikrow.com/login?_ga=2.258942473.2066856408.1666803976-2147386924.1663935391">Logowanie dla firm</a>
            </div>

            <div class="col-md-12 d-block d-md-none">
                <button class="accordion">O tikrow</button>
                <div class="accordion-content">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_1', 'menu_class' => 'nav-footer' ) ); ?>
                </div>

                <button class="accordion">Dla pracowników</button>
                <div class="accordion-content">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_2', 'menu_class' => 'nav-footer' ) ); ?>
                </div>

                <button class="accordion">Dla firm</button>
                <div class="accordion-content">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_3', 'menu_class' => 'nav-footer' ) ); ?>
                </div>
            </div>

            <div class="col-md-12 d-block d-md-none pt-4 pb-4">
                <a class="btn btn_red mt-4" target="_blank" href="https://partner.tikrow.com/login?_ga=2.221121051.2066856408.1666803976-2147386924.1663935391">Logowanie dla pracowników</a>
                <a class="btn btn_red mt-4" target="_blank" href="https://klient.tikrow.com/login?_ga=2.258942473.2066856408.1666803976-2147386924.1663935391">Logowanie dla firm</a>
            </div>

            <?php 
                $group_logo = get_field('group_logo', 'options');
                $awards = get_field('awards', 'options');
            ?>

            <div class="col-md-12 col-lg-4">
                <div class="row">
                    <?php if($group_logo) : ?>
                        <div class="col">
                            <p class="small">Należymy do grona firm członkowskich:</p>
                            <img class="mt-4" src="<?php echo $group_logo['url'];?>" alt="<?php echo $group_logo['title'];?>">
                        </div>
                    <?php endif; ?>
                    <?php if($awards) : ?>
                        <div class="col">
                            <p class="small">Nagrody:</p>
                            <img class="mt-4" src="<?php echo $awards['url'];?>" alt="<?php echo $awards['title'];?>">
                        </div>
                    <?php endif; ?>
                </div>
                
            </div>
            
        </div>
    </div>
</footer>
<?php 
    $site_map = get_field('site_map', 'options');
    $policy = get_field('policy', 'options');
    $information = get_field('information', 'options');
    $social_icons = get_field('social_icons', 'options');
?>
<div class="bottom-footer <?php if (!empty($args['class'] )) { echo $args['class']; } ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul class="mb-0">
                    <?php if($site_map) : ?>
                        <li><a target="_blank" href="<?php echo $site_map; ?>">Mapa strony</a></li>
                    <?php endif; ?>
                    <?php if($policy) : ?>
                        <li><a target="_blank" href="<?php echo $policy; ?>">Politka prywatności</a></li>
                    <?php endif; ?>
                     <?php if($information) : ?>
                        <li><a target="_blank" href="<?php echo $information; ?>">Obowiązek informacyjny</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-2 text-start text-md-center pt-4 pt-md-0 pb-4 pb-md-0">
                <?php while ( have_rows('social_icons','options') ) : the_row();?>
                    <?php 
                        $image_icon_social = get_sub_field('icon_social', 'options'); 
                        $link_social = get_sub_field('link_social', 'options'); 
                    ?>
                    <a 
                        target="_blank" 
                        class="text-decoration-none ps-3 pe-3" 
                        href="<?php echo $link_social; ?>"
                    >
                        <img src=" <?php echo $image_icon_social;?>">
                    </a>
                <?php endwhile;?>
            </div>
            <div class="col-md-5">
                <p class="test-start text-md-end pt-3 mb-0">
                    Copyright by Tikrow
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    .  
                    Created by Redkroft.
                </p>
            </div>
        </div>
    </div>
</div>


<script src="<?php bloginfo('template_directory') ?>/js/vendors/jquery-3.6.1.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/vendors/swiper.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/vendors/jquery.sticky-kit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/vendors/lottie.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/app.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJhUXvarx3yOLTNspJzs7LXz8ELidalm8&callback=initMap"></script>

</body>
</html>     