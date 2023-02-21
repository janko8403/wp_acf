<?php
/*
Template Name: Dla szukających pracy
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/compotents/mobile-get-app');?>
 
<?php get_template_part('parts/compotents/mobile-register-app', null, ['link' => '/dla-pracownikow/rejestracja', 'btn' => 'Zarejestruj się']);?>
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pb-4">Praca z dnia na dzień bez rekrutacji</h1>
            </div>
            <div class="col-md-6 mb-4">
                <div class="for-partner pt-0 pt-md-5 ps-0 ps-md-5 pe-0 pe-md-5 pb-0 pb-md-5">
                    <h2>Do dzieła. Wypłata w 24 h.</h2>
                    <h5 class="pt-4">Tikrow to baza zleceń na konkretny dzień. Rejestrujesz się online. Znajdujesz ofertę. Pracujesz. Proste? Proste. A pieniądze wypłacamy do 24 h po skończonej pracy.</h5>
                    <a class="btn btn_red mt-4" href="<?php echo site_url(); ?>/dla-pracownikow/rejestracja">Zarejestruj się</a>
                    <img class="img-fluid pt-5 d-none d-md-block" src="<?php bloginfo('template_directory') ?>/img/girl1.png"/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="pt-0 pt-md-5 ps-0 ps-md-5 pb-0 pb-md-5">
                    <h5 class="top-157">Zobacz najbliższe zlecenia</h5>
                    <p>Stawki obowiązują dla studentów poniżej 26 roku życia.</p>
                    <div class="wydarzenia">
                        <div id="jobs-wrapper" class="row-offers"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-white-light-white">
    <div class="bg-blue border-radius section-no-padding ps-4 ps-md-0 pe-4 pe-md-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-block d-md-none">
                    <h2 class="pt-5 pb-5 mb-0 mb-md-5">3 kroki do wypłaty</h2>
                    <div class="swiper three-steps">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="title-swiper">1</div>
                                <p>Rejestrujesz się i wypełniasz kwestionariusz osobowy.</p>
                            </div>
                            <div class="swiper-slide">
                                <div class="title-swiper">2</div>
                                <p>Przyjmujesz dowolne zlecenie na dowolny dzień.</p>
                            </div>
                            <div class="swiper-slide">
                                <div class="title-swiper">3</div>
                                <p>Robimy Ci przelew z wypłatą do 24 h po wykonaniu pracy.</p>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <h2 class="pt-5 pb-5 mb-0 mb-md-5">3 kroki do wypłaty</h2>
                    <h2 class="pb-3">1</h2>
                    <h5 class="pb-5">Rejestrujesz się i wypełniasz kwestionariusz osobowy.</h5>
                    <h2 class="pb-3">2</h2>
                    <h5 class="pb-5">Przyjmujesz dowolne zlecenie na dowolny dzień.</h5>
                    <h2 class="pb-3">3</h2>
                    <h5 class="pb-5">Robimy Ci przelew z wypłatą do 24 h po wykonaniu pracy.</h5>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <figure class="full-box">
                        <img src="<?php bloginfo('template_directory') ?>/img/3-kroki-do-wyplaty.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-white-light-blue">
    <div class="bg-white border-radius section-padding ps-4 ps-md-0 pe-4 pe-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Dlaczego warto z nami pracować</h2>
    
                    <div class="row pt-5 pb-5">
                        <div class="col-md-10 offset-md-1">
                            <div class="row pt-5">
                                <div class="col-6 col-md-4 text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-5.png" alt="">
                                    <p class="small-text pt-4">Prosta rejestracja w kilka minut</p>
                                </div>
                                <div class="col-6 col-md-4 text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-7.png" alt="">
                                    <p class="small-text pt-4">Dowolna praca na dowolny dzień</p>
                                </div>
                                <div class="col-6 col-md-4 text-center">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-3.png" alt="">
                                    <p class="small-text pt-4">Wypłata do 24 h po realizacji zadania</p>
                                </div>
    
                                <div class="col-6 col-md-4 text-center pt-0 pt-md-5 mt-0 mt-md-5">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-8.png" alt="">
                                    <p class="small-text pt-4">Z góry określone godziny i stawka</p>
                                </div>
                                <div class="col-6 col-md-4 text-center pt-0 pt-md-5 mt-0 mt-md-5">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-3.png" alt="">
                                    <p class="small-text pt-4">Bez rekrutacji i składania CV</p>
                                </div>
                                <div class="col-6 col-md-4 text-center pt-0 pt-md-5 mt-0 mt-md-5">
                                    <img src="<?php bloginfo('template_directory') ?>/img/Frame-6.png" alt="">
                                    <p class="small-text pt-4">Umowa, składki, ubezpieczenie</p>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position-relative">
                <h2 class="pb-5 pb-md-0">Zacznij zarabiać od zaraz– wystarczy apka</h2>

                <div class="swiper swiper-app-content-mobile d-block d-md-none">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white border-radius swiper-box">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-252.png" />
                            </div>
                            <div class="title-swiper">
                                Prosta rejestracja w 3 kliknięcia. 
                            </div>
                            <p>Na początek zarejestruj się i wypełnij kwestionariusz osobowy. Już dziś możesz mieć zlecenie.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white border-radius swiper-box">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-257.png" />
                            </div>
                            <div class="title-swiper">
                                Kwestionariusz zamiast rekrutacji.
                            </div>
                            <p>Twoje potrzeby i kompetencje są bardzo ważne. Uzupełnij dane, by móc przyjmować zlecenia.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white border-radius swiper-box">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-253.png" />
                            </div>
                            <div class="title-swiper">
                                Dowolna praca na dowolny dzień.
                            </div>
                            <p>Ty wybierasz konkretny dzień i miejsce pracy. Zlecenia już na Ciebie czekają.</p>
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
                                Prosta rejestracja w 3 kliknięcia. 
                            </div>
                            <p>Na początek zarejestruj się i wypełnij kwestionariusz osobowy. Już dziś możesz mieć zlecenie.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="title-swiper">
                                Kwestionariusz zamiast rekrutacji.
                            </div>
                            <p>Twoje potrzeby i kompetencje są bardzo ważne. Uzupełnij dane, by móc przyjmować zlecenia.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="title-swiper">
                                Dowolna praca na dowolny dzień.
                            </div>
                            <p>Ty wybierasz konkretny dzień i miejsce pracy. Zlecenia już na Ciebie czekają. </p>
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
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-252.png" />
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-257.png" />
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid d-block mx-auto" src="<?php bloginfo('template_directory') ?>/img/slider/image-253.png" />
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
                    <h3 class="text-center">Jakie firmy dodają zlecenia w Tikrow</h3>

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

<?php get_template_part('parts/compotents/industry');?>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Zastanawiasz się, czy Tikrow jest dla Ciebie?</h2>

                <p class="pt-5">Napisz, czego szukasz i jakie masz pytania.</p>
                <p class="pt-5">Lubimy pomagać i opowiadać o Tikrow. Damy też znać, jeśli pojawią się nowe zlecenia w szukanej przez Ciebie branży.</p>
                <p class="pt-5">Skorzystaj z formularza lub wyślij e-mail na adres <a class="text-granat text-decoration-none" href="mailto:kontakt@tikrow.com"><b>kontakt@tikrow.com</b></a></p>
            </div>
            <div class="col-md-6">

                <?php get_template_part('parts/compotents/contact-form');?>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(null, ['class' => 'bottom-footer_margin']); ?>