<?php
/*
Template Name: Faq partner
*/

$questions_employee = get_field('questions_employee', 'options');
$newsletter_employee = get_field('newsletter_employee');
?>

<?php //get_header(null, ['class_nav' => 'navbar-top_blue']); ?>
<?php get_header(); ?>

<section class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ul class="breadcrumb">
                    <li><a href="/dla-szukajacych-pracy">Dla szukających pracy</a></li>
                    <li>Często zadawane pytania</li>
                </ul>

                <h1 class="pb-5 mb-4">Często zadawane pytania</h1>
            </div>
        </div>
    </div>
</section>

<section class="bg-white" id="faq-container">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col-md-6">
                <p class="font-24">
                    Znajdziesz tutaj najczęściej zadawane pytania przez tych, którzy podejmują zlecenia z Tikrow lub szukają nowych zleceń oraz odpowiedzi na każde z nich!
                </p>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="pt-5" id="faq-content"></div>
            </div>
        </div>
        <div class="row pt-4 mt-5">
            <div class="col-md-4">

                <div class="sidebar">
                    <p class="medium-text text-bold mt-3 mb-0">Co Cię interesuje?</p>

                    <?php 
                        $slug = 'faq-menu-partner'; 
                        $id = get_term_by('slug', $slug, 'category'); 
                        $categories =  get_categories([
                            'child_of' => $id->term_id,
                            'orderby' => 'term_order',
                        ]);
                        // var_dump($categories);
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
                
                    <?php $t = 1;  while ( have_rows('questions_employee','options') ) : the_row();?>
                        <?php $select_category__employee = get_sub_field('select_category__employee', 'options'); ?>
                        <?php $question_employee = get_sub_field('question_employee', 'options'); ?>
                        <?php $response_employee = get_sub_field('response_employee', 'options'); ?>
                        <?php if($select_category__employee->slug == $category->slug): ?>
                            <button class="accordion accordion_grey"><span><?php echo $t++; ?></span> <?php echo $question_employee; ?> </button>
                            <div class="accordion-content accordion-content_grey">
                                <p><?php echo $response_employee; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endwhile;?>

                <?php } ?>
                

                <h6 class="text-bold pt-5 pb-4 mt-5" id="dodaj-pytanie">Dodaj własne pytanie</h6>

                <div class="bg-gray border-radius pt-4 pb-5 ps-5 pe-5">
                    <?php get_template_part('parts/compotents/ask-question-form');?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php if($newsletter_employee) : ?>
<section id="newsletter-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <?php get_template_part('parts/compotents/newsletter', null, ['type' => 'partner', 'title' => 'Pomagamy w łapaniu dobrych zleceń', 'desc' => 'Raz w tygodniu otrzymasz od nas e-mail, a w nim? Same konkrety: nowości w Tikrow, trendy, darmowe porady. ']);?>
                
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>