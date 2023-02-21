<?php
/*
Template Name: Regulamin Firma
*/

$wersja_company = get_field('wersja_company', 'options');
$waznosc__company = get_field('waznosc_company', 'options');
$paragraf_company = get_field('paragraf_company', 'options');
?>

<?php get_header(); ?>
    
<section class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pb-4">Regulamin</h1>
            </div>
            <div class="col-12 d-block d-md-flex justify-content-between">
                <?php if ($wersja_company) : ?>
                    <p class="text-bold semi-text"><?php echo $wersja_company; ?></p>
                <?php endif; ?>
                <?php if ($waznosc__company) : ?>
                    <p><?php echo $waznosc__company; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-12">

        <?php $i = 1; while ( have_rows('paragraf_company','options') ) : the_row();?>
            <?php $number_company = get_sub_field('number_company', 'options'); ?>
            <?php $name_parag = get_sub_field('name_parag_company', 'options'); ?>
            <?php $desc_parag = get_sub_field('desc_parag_company', 'options'); ?>
            <button class="accordion accordion_white"><span>§<?php echo $number_company; ?></span> <?php echo $name_parag; ?> </button>
            <div class="accordion-content accordion-content_white">
                <p><?php echo $desc_parag; ?></p>
            </div>
        <?php endwhile;?>

        </div>
    </div>
</section>

<?php get_footer(); ?>