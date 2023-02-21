<?php
/*
Template Name: Kontakt firma
*/
?>

<?php get_header(); ?>
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pb-4">Kontakt</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="contact-box pt-5 ps-4 ps-md-5 pe-4 pe-md-5 pb-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Zacznijmy działać</h2>
                            <h5 class="pt-4">Jeżeli szukasz pracowników, porozmawiaj z nami. Podziel się swoimi potrzebami, żebyśmy mogli się lepiej przygotować się do naszego spotkania.</h5>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-bold">Umów rozmowę</h5>
                            <?php get_template_part('parts/compotents/contact-form-business', null, ['button' => 'Wyślij']);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">    
            <div class="col-12 col-md-6 pe-md-0">
                <div class="contact-box contact-box_none-radius">
                    <div class="pt-5 ps-4 ps-md-5 pe-4 pe-md-5 pb-5">
                        <p class="address address_list pb-4">Pracujemy w godzinach 9:00-17:00</p>
                        <p class="address address_phone">Zadzwoń</p>
                        <p class="pb-4">+48 22 100 44 57</p>

                        <p class="address address_mail">Napisz do nas</p>
                        <p class="pb-4"><a href="mailto:">kontakt@tikrow.com</a></p>

                        <p class="address address_facebook">Złapmy się na chacie</p>
                        <p class="pb-4"><a target="_blank" href="https://www.facebook.com/tikrowpl/">Facebook</a></p>

                        <p class="address address_list">Wyślij list</p>
                        <p class="pb-4">ul. Kraszewskiego 32/4 <br>
                        05-803 Pruszków, Polska</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 ps-md-0">
                <div id="map" class="contact-business"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>