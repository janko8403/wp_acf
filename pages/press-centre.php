<?php
/*
Template Name: Centrum prasowe
*/

$contact_persons = get_field('contact_persons');
$about_us_press = get_field('about_us_press');
$newsletter_press = get_field('newsletter_press');
?>

<?php get_header(); ?>

<section class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ul class="breadcrumb">
                    <li><a href="/o-nas">O tikrow</a></li>
                    <li>Centrum prasowe</li>
                </ul>

                <h1 class="pb-5 mb-4">Centrum prasowe</h1>
            </div>
        </div>
    </div>
</section>

<section class="bg-white" id="press-container">
    <div class="container">
        <div class="row pt-4 pb-4">
            <?php
                $content_main = get_field('content_main');
                $desc_main = get_field('desc_main');
                $adress_press = get_field('adress_press');
                ?>
            <div class="col-md-6">
                <?php if($content_main): ?>
                    <h3><?php echo $content_main; ?></h3>
                <?php endif; ?>

                <?php if($desc_main): ?>
                    <p class="medium-text pt-4"><?php echo $desc_main; ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-5 offset-md-1 d-none d-md-block">
                <div class="img-fluid float-end" style="width:32%;" id="press-content"></div>
            </div>
        </div>
        <div class="row pt-5 mt-5">
            <div class="col-md-12">
                <h6 class="text-center text-bold pb-5 mb-5">Zapraszamy do kontaktu</h6>
            </div>

            <?php $i=0;  while ( have_rows('contact_persons') ) : the_row();?>
                <?php
                    $i++; 
                    $picture_contact = get_sub_field('picture_contact'); 
                    $name_contact = get_sub_field('name_contact'); 
                    $position_contact = get_sub_field('position_contact'); 
                    $email_contact = get_sub_field('email_contact'); 
                    $phone_contact = get_sub_field('phone_contact'); 
                    $linkedin_contact = get_sub_field('linkedin_contact'); 
                ?>


                <div class="col-md-12 col-lg-4 <?php if($i == 1) { echo 'offset-md-2'; } ?>">
                    <div class="contact-col mt-4 mt-md-0">
                        <img class="img-fluid d-block mx-auto" src="<?php echo $picture_contact; ?>" alt="<?php echo $name_contact; ?>">
                        <div class="contact-col_content">
                            <p class="name"><?php echo $name_contact; ?></p>
                            <p class="position"><?php echo $position_contact; ?></p>
                            <p class="contact"> <a href="mailto:<?php echo $email_contact; ?>"><?php echo $email_contact; ?></a></p>
                            <p class="contact"><a href="tel:<?php echo $phone_contact; ?>"><?php echo $phone_contact; ?></a></p>
                            <p class="linkedin"><a href="<?php echo $linkedin_contact; ?>"><img src="<?php bloginfo('template_directory') ?>/img/linkedin.svg"></a></p>

                        </div>
                    </div>
                    </div>
                
            <?php endwhile;?>
           
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <?php
            $args_press = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'materialy-dla-prasy',
                'posts_per_page' => 9,
            );
            $arr_posts_press = new WP_Query( $args_press ); 
            ?>

            <div class="col-md-12">
                <div class="row">

                    <?php 
                        if ( $arr_posts_press->have_posts() ) :
                    ?>
                        <div class="col-md-12">
                            <h6 class="text-center text-bold pb-5 mb-5">Materiały dla prasy</h6>
                        </div>
                                
                    <?php 
                            while ( $arr_posts_press->have_posts() ) :
                                $arr_posts_press->the_post();
                                $background_color = get_field('background_color'); 
                                $post_file = get_field('post_file'); 
                    ?>
                                <div class="col-md-4 mb-4" id="post-<?php the_ID(); ?>">
                                    <div class="posts-col <?php echo $background_color; ?>">
                                        <h1 class="entry-title pb-4"><?php the_title(); ?></h1>
                                        
                                        <div class="entry-content">
                                            <?php the_excerpt(); ?>
                                            <?php if($post_file): ?>
                                            <a href="<?php echo $post_file; ?>" download>Pobierz</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if($about_us_press): ?>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6 class="text-center text-bold pb-5">Pisali o nas</h6>

                <div class="row pt-4 d-none d-md-flex">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <?php foreach($about_us_press as $img):?>
                                <div class="col-md-4 pb-5">
                                    <img class="img-fluid" src="<?php echo $img['about_us_press_picture']; ?>" alt="<?php echo $img['about_us_press_picture']; ?>">
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>

                <div class="row pt-5 d-flex d-md-none">
                    <div class="col">
                        <div class="swiper logotype-swiper">
                            <div class="swiper-wrapper">
                                <?php foreach($about_us_press as $img):?>
                                    <div class="swiper-slide">
                                        <img class="img-fluid d-block mx-auto" src="<?php echo $img['about_us_press_picture']; ?>">
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <?php
            $args_experts = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'eksperci-tikrow',
                'posts_per_page' => 3,
            );
            $arr_posts_experts = new WP_Query( $args_experts ); 
            ?>

            <div class="col-md-12">
                <div class="row">

                    <?php if ( $arr_posts_experts->have_posts() ) : ?>
                        <div class="col-md-12">
                            <h6 class="text-center text-bold pb-5">Eksperci Tikrow</h6>
                        </div>

                        <div class="row pt-4">

                            <div class="col-md-10 offset-md-1">
                                <div class="row">
                                
                                    <?php while ( $arr_posts_experts->have_posts() ) :
                                        $arr_posts_experts->the_post();
                                        $position_experts = get_field('position_experts'); 
                                        $desc_experts = get_field('desc_experts'); 
                                        $linkedin_experts = get_field('linkedin_experts'); 
                                    ?>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="contact-col mt-4 mt-md-0">
                                                <?php
                                                if ( has_post_thumbnail() ) :
                                                    the_post_thumbnail('full', ['class' => 'img-fluid d-block mx-auto']);
                                                endif;
                                                ?>
                                                <div class="contact-col_content">
                                                    <p class="name"><?php the_title(); ?></p>
                                                    <p class="position-expert"><?php echo $position_experts; ?></p>
                                                    <p class="position-expert"><?php echo $desc_experts; ?></p>
                                                    <p class="linkedin"><a href="<?php echo $linkedin_experts; ?>"><img src="<?php bloginfo('template_directory') ?>/img/linkedin.svg"></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <?php
            $args_pub = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'nasze-publikacje'
            );
            $arr_posts_pub = new WP_Query( $args_pub ); 
            ?>

            <div class="col-md-12">
                <div class="row">

                    <?php 
                        if ( $arr_posts_pub->have_posts() ) :
                    ?>
                        <div class="col-md-12">
                            <h6 class="text-center text-bold pb-5 mb-5">Nasze publikacje</h6>
                        </div>

                        <div class="col-md-12">
                            <div class="swiper connect-people our-publications">
                                <div class="swiper-wrapper">

                                    
                                    <?php while ( $arr_posts_pub->have_posts() ) :
                                        $arr_posts_pub->the_post();
                                        $post_file_publication = get_field('post_file_publication'); 
                                    ?>
                                        <div class="swiper-slide">
                                            <?php
                                            if ( has_post_thumbnail() ) :
                                                the_post_thumbnail('full', ['class' => 'img-fluid mt-4 mt-md-1 mb-5 mb-md-4']);
                                            endif;
                                            ?>
                                            <div class="title-swiper pt-4"><?php the_title(); ?></div>
                                            <?php the_excerpt(); ?>
                                            <?php if($post_file_publication): ?>
                                                <a href="<?php echo $post_file_publication; ?>" download>Pobierz raport</a>
                                            <?php endif; ?>
                                        </div>
                                <?php endwhile; ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    <?php
                        endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php if($adress_press): ?>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="text-center font-normal pt-5 pb-5">
                    <?php echo $adress_press; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($newsletter_press) : ?>
<section id="newsletter-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <?php get_template_part('parts/compotents/newsletter', null, ['title' => 'Co nowego? Dowiedz się szybciej niż inni', 'desc' => 'Max raz na tydzień dostaniesz newsy i darmowe porady. </br> Wybierz wiadomość:']);?>
                
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>