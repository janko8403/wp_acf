<?php
/*
Template Name: Rejestracja pracownik
*/
?>

<?php get_header(); ?>
    
<section class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Rejestracja dla Pracowników</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-8 offset-md-2">
               <div class="bg-white border-radius padding-form-register">
                    <p class="semi-text text-bold pt-4">Dziś konto, jutro wypłata</p>
                    <p class="medium-text text-bold pt-5">Załóż konto</p>
                    <p class="text-regular pt-4">Na Twój numer telefonu wyślemy hasło do logowania. Twój kod pocztowy pomoże nam wyświetlać oferty pracy blisko Ciebie.</p>

                    <?php get_template_part('parts/compotents/register-form');?>
               </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>