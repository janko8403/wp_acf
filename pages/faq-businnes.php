<?php
/*
Template Name: Faq firma
*/

$questions_companies = get_field('questions_companies', 'options');
$newsletter_companies = get_field('newsletter_companies');
?>

<?php get_header(); ?>

<section class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ul class="breadcrumb">
                    <li><a href="/dla-firm">Dla firm</a></li>
                    <li>Często zadawane pytania</li>
                </ul>

                <h1 class="pb-5 mb-4">Często zadawane pytania</h1>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col-md-6">
                <p class="font-24">
                    Znajdziesz tutaj najczęściej zadawane pytania przez przedstawicieli firm, króre chcą podjąć współpracę z nami oraz odpowiedzi na każde z nich!
                </p>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="pt-5" id="faq-content"></div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4">

                <div class="sidebar">
                    <p class="medium-text text-bold mt-3 mb-0">Co Cię interesuje?</p>

                    <?php 
                        $slug = 'faq-menu-firma'; 
                        $id = get_term_by('slug', $slug, 'category'); 
                        $categories =  get_categories([
                            'child_of' => $id->term_id,
                            'order'   => 'DESC',
                        ]);
                    ?>

                    <ul class="left-menu-faq">
                        <?php $i=0; foreach($categories as $category) { $i++; ?>
                            <li class="<?php if($i==1) { echo 'active';} ?>"><a data-target="#<?php if($i==1) { echo 'first-id';} else { echo $category->slug; } ?>"><?php echo $category->name; ?></a></li>
                        <?php } ?>
                        <li><a data-target="#dodaj-pytanie">Dodaj własne pytanie</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-8">
                
                <?php $i=0; foreach($categories as $category) { $i++; ?>

                    <h6 class="text-bold <?php if($i==1) { echo 'pb-4';} else { echo 'pt-5 pb-4 mt-5'; } ?>" id="<?php if($i==1) { echo 'first-id';} else { echo $category->slug; } ?>"><?php echo $category->name; ?></h6>
                
                    <?php $t = 1;  while ( have_rows('questions_companies','options') ) : the_row();?>
                        <?php $select_category__companies = get_sub_field('select_category__companies', 'options'); ?>
                        <?php $question_companies = get_sub_field('question_companies', 'options'); ?>
                        <?php $response_companies = get_sub_field('response_companies', 'options'); ?>
                        <?php if($select_category__companies->slug == $category->slug): ?>
                            <button class="accordion accordion_grey"><span><?php echo $t++; ?></span> <?php echo $question_companies; ?> </button>
                            <div class="accordion-content accordion-content_grey">
                                <p><?php echo $response_companies; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endwhile;?>

                <?php } ?>

                <h6 class="text-bold pt-5 pb-4" id="dodaj-pytanie">Dodaj własne pytanie</h6>

                <div class="bg-gray border-radius pt-4 pb-5 ps-5 pe-5">
                    <?php get_template_part('parts/compotents/ask-question-form');?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php if($newsletter_companies) : ?>
<section id="newsletter-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <?php get_template_part('parts/compotents/newsletter', null, ['type' => 'company', 'title' => 'Nowości, trendy, porady? Mamy to i chętnie się dzielimy', 'desc' => 'Nie trać czasu na szukanie. Świeże wieści max raz w tygodniu prześlemy prosto na Twój e-mail.']);?>
                
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>