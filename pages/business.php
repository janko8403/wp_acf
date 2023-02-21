<?php
/*
Template Name: Dla firm
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/compotents/mobile-get-app');?>
 
<?php get_template_part('parts/compotents/mobile-register-app', null, ['link' => '/dla-firm/kontakt', 'btn' => 'Zacznij współpracę']);?>
     
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pb-4">Konkretna załoga na konkretny dzień</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 for-business">
                <div class="pt-5 ps-2 ps-md-5 pe-2 pe-md-5 pb-5">
                    <h2>Obsługa w 3 kliknięciach.</h2>
                    <h5 class="pt-4">Tikrow to baza osób chętnych do pracy „na już”. Wystawiasz zlecenie. Wybierasz pracownika. Płacisz tylko za przepracowane godziny. Proste? Proste. A formalności zostawiasz nam.</h5>
                    <a class="btn btn_red mt-4" href="">Zacznij współpracę</a>
                    <img class="img-fluid pt-5 d-none d-md-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/mask3.png"/>
                </div>
            </div>
            <div class="col-md-6 mb-4 d-none d-md-block">
                <div class="pt-0 pt-md-5 ps-0 ps-md-5 pb-0 pb-md-5">
                    <h5 class="pt-5 pt-md-0">Umów rozmowę z przedstawicielem Tikrow </h5>

                    <?php get_template_part('parts/compotents/contact-form-business', null, ['button' => 'Zamów pracownika']);?>
                
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-white-light-white no-padding-bottom">
    <div class="bg-blue border-radius section-no-padding ps-4 ps-md-0 pe-4 pe-md-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-block d-md-none">
                    <h2 class="pt-5 pb-5 mb-0 mb-md-5">3 kroki i masz pełny grafik</h2>
                    <div class="swiper three-steps">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="title-swiper">1</div>
                                <p>Dodajesz zlecenie z ustaloną stawką. Na konkretny dzień i godziny.</p>
                            </div>
                            <div class="swiper-slide">
                                <div class="title-swiper">2</div>
                                <p>Masz odpowiednich pracowników na czas. Bez czasochłonnej rekrutacji.</p>
                            </div>
                            <div class="swiper-slide">
                                <div class="title-swiper">3</div>
                                <p>Płacisz za przepracowane godziny. I w pełni kontrolujesz wydatki. </p>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <h2 class="pt-5 pb-5 mb-0 mb-md-5">3 kroki i masz pełny grafik</h2>
                    <h2 class="pb-3">1</h2>
                    <h5 class="pb-5">Dodajesz zlecenie z ustaloną stawką. Na konkretny dzień i godziny.</h5>
                    <h2 class="pb-3">2</h2>
                    <h5 class="pb-5">Masz odpowiednich pracowników na czas. Bez czasochłonnej rekrutacji.</h5>
                    <h2 class="pb-3">3</h2>
                    <h5 class="pb-5">Płacisz za przepracowane godziny. I w pełni kontrolujesz wydatki. </h5>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <figure class="full-box">
                        <img src="<?php bloginfo('template_directory') ?>/img/image_258.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white no-padding-bottom">
    <div class="bg-white border-radius section-padding ps-4 ps-md-0 pe-4 pe-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Dlaczego warto z nami zatrudniać</h2>
    
                    <div class="row pt-5 pb-5">
                        <div class="col-md-12">
                            <div class="row pt-5">
                                <div class="col-6 col-md-3 text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-9.png" alt="">
                                    <p class="small-text pt-4">Ponad 35 tys. osób do pracy</p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-3.png" alt="">
                                    <p class="small-text pt-4">Bez procesu rekrutacji</p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-5.png" alt="">
                                    <p class="small-text pt-4">3 kliknięcia i wystawiasz zlecenia</p>
                                </div>
                                <div class="col-6 col-md-3 text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-2.png" alt="">
                                    <p class="small-text pt-4">Pracownicy nawet w 48 h</p>
                                </div>
    
                                <div class="col-6 col-md-3 text-center pt-0 pt-md-5 mt-0 mt-md-5">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-6.png" alt="">
                                    <p class="small-text pt-4">Minimum formalności</p>
                                </div>
                                <div class="col-6 col-md-3 text-center pt-0 pt-md-5 mt-0 mt-md-5">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-10.png" alt="">
                                    <p class="small-text pt-4">Stale badana jakość pracy</p>
                                </div>
                                <div class="col-6 col-md-3 text-center pt-0 pt-md-5 mt-0 mt-md-5">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-11.png" alt="">
                                    <p class="small-text pt-4">Transparentne koszty</p>
                                </div>
                                <div class="col-6 col-md-3 text-center pt-0 pt-md-5 mt-0 mt-md-5">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-4.png" alt="">
                                    <p class="small-text pt-4">Dostęp 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white no-padding-bottom">
    <div class="bg-granat border-radius pb-5 ps-4 ps-md-0 pe-4 pe-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-white big-text pt-5 pb-0 pb-md-4 mb-0 mb-md-3">Jakość popieramy liczbami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="number-business">
                        <div class="number">>35 tysięcy</div>
                        <p class="text-bold">osób chętnych do pracy</p>
                        <p>Co miesiąc ta liczba rośnie o średnio 8%.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="number-business">
                        <div class="number">4,8/5</div>
                        <p class="text-bold">średnia ocena pracownika</p>
                        <p>Oceny wystawiają pracodawcy po zleceniu.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="number-business">
                        <div class="number">92%</div>
                        <p class="text-bold">zrealizowanych zadań</p>
                        <p>Wysoka skuteczność badana na bieżąco.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/compotents/industry');?>

<section class="bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position-relative">
                <h2 class="pb-5 pb-md-0">Zobacz, jak Twój grafik pracy zapełnia się dzięki aplikacji</h2>

                <div class="swiper swiper-app-content-mobile d-block d-md-none">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white border-radius swiper-box">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-254.png" />
                            </div>
                            <div class="title-swiper">
                                Dodawanie zleceń – szybko i bez formalności.
                            </div>
                            <p>Ilu osób potrzebujesz? Na jak długo? Do jakiego zadania? Tyle wystarczy, by dodać zlecenie.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white border-radius swiper-box">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-273.png" />
                            </div>
                            <div class="title-swiper">
                                Kontrola nad grafikiem pracy.
                            </div>
                            <p>Sprawdzaj przyjęte zlecenia w wygodnej liście połączonej z kalendarzem.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white border-radius swiper-box">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-272.png" />
                            </div>
                            <div class="title-swiper">
                                Prosta ocena zleconej pracy.
                            </div>
                            <p>Ty dodajesz gwiazdki, my wiemy, jak zostało wykonane Twoje zlecenie. Monitorujemy to na bieżąco.</p>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper swiper-app-content d-none d-md-block">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="title-swiper">
                                Dodawanie zleceń – szybko i bez formalności.
                            </div>
                            <p>Ilu osób potrzebujesz? Na jak długo? Do jakiego zadania? Tyle wystarczy, by dodać zlecenie.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="title-swiper">
                                Kontrola nad grafikiem pracy.
                            </div>
                            <p>Sprawdzaj przyjęte zlecenia w wygodnej liście połączonej z kalendarzem.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="title-swiper">
                                Prosta ocena zleconej pracy.
                            </div>
                            <p>Ty dodajesz gwiazdki, my wiemy, jak zostało wykonane Twoje zlecenie. Monitorujemy to na bieżąco. </p>
                        </div>
                    </div>
                </div>

                <?php
                $link_app_ios = get_field('link_app_ios', 'options');
                $link_app_android = get_field('link_app_android', 'options');
                ?>

                <div class="bottom-app">
                    <p>Pobierz aplikację mobilną</p>
                    <?php if($link_app_ios): ?>
                        <a target="_blank" href="<?php echo $link_app_ios; ?>">
                            <img src="<?php bloginfo('template_directory') ?>/img/appstore.png" alt="appstrore app">
                        </a>
                    <?php endif; ?>
                    <?php if($link_app_android): ?>
                        <a target="_blank" href="<?php echo $link_app_android; ?>">
                            <img src="<?php bloginfo('template_directory') ?>/img/googleplay.png" alt="google play app">
                        </a>
                    <?php endif; ?>
                </div>

            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="bg-white border-radius swiper-box">

                    <div class="swiper swiper-app">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-254.png" />
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-273.png" />
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-272.png" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-blue-white no-padding-bottom">
    <div class="bg-white border-radius section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 p-top-50 p-bottom-50">
                    <h3 class="text-center">Dla jakich firm już realizujemy zlecenia</h3>

                    <div class="row mt-5 pt-5 d-none d-md-flex">

                        <?php $n=0; while ( have_rows('client_logo','options') ) : the_row();?>
                            <?php 
                                $n++;
                                $logo_client = get_sub_field('logo_client', 'options'); 
                            ?>
                            <div class="col-md-2 pt-5 pb-5 <?php if($n == 1 || $n == 6): { echo 'offset-md-1'; } endif;?> <?php if($n == 11): { echo 'offset-md-4'; } endif;?>">
                                <div class="filter-gray">  
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $logo_client; ?>">
                                </div>  
                            </div>
                        <?php endwhile;?>

                    </div>

                    <div class="row pt-5 d-flex d-md-none">
                        <div class="col">
                            <div class="swiper logotype-swiper">
                                <div class="swiper-wrapper">
                                    <?php while ( have_rows('client_logo','options') ) : the_row();?>
                                        <?php 
                                            $logo_client = get_sub_field('logo_client', 'options'); 
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="filter-gray"> 
                                                <img class="img-fluid d-block mx-auto" src="<?php echo $logo_client; ?>">
                                            </div>  
                                        </div>
                                    <?php endwhile;?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(null, ['class' => 'bottom-footer_margin']); ?>