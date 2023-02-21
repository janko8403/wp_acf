<?php
/*
Template Name: Kontakt partner
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
            <div class="col-md-6 mb-4">
                <div class="contact-box pt-5 ps-4 ps-md-5 pe-4 pe-md-5 pb-5">
                    <h2>Jesteśmy dla Ciebie!</h2>
                    <h5 class="pt-4">Jesteśmy tu, żeby ułatwić Ci zarabianie. Od jutro, codziennie, jak długo chcesz.</h5>
                    
                    <h5 class="text-bold pt-5">Pytaj, o co chcesz</h5>

                    <?php get_template_part('parts/compotents/contact-form', null, ['class' => ' ', 'button' => 'Prześlij pytanie']);?>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="contact-box">
                    <div class="pt-5 ps-4 ps-md-5 pe-4 pe-md-5 pb-5">
                        <p class="address address_list pb-4">Pracujemy w godzinach 9:00-17:00</p>
                        <p class="address address_phone">Zadzwoń</p>
                        <p class="pb-4"><a href="tel:+48221004457">+48 22 100 43 15</a></p>

                        <p class="address address_mail">Napisz do nas</p>
                        <p class="pb-4"><a href="mailto:kontakt@tikrow.com">kontakt@tikrow.com</a></p>

                        <p class="address address_facebook">Złapmy się na chacie</p>
                        <p class="pb-4"><a target="_blank" href="https://www.facebook.com/tikrowpl/">Facebook</a></p>

                        <p class="address address_list">Wyślij list</p>
                        <p class="pb-4">ul. Kraszewskiego 32/4 <br>
                        05-803 Pruszków, Polska</p>
                    </div>

                    <div id="map" class="contact-partner"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>