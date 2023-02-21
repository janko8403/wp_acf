<div class="navbar-left navbar-mobile">
    <div class="container-top">
        <?php get_template_part('parts/header/logo');?>
        <div class="closebtn open">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <div class="container-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile_top_menu', 'menu_class' => 'nav-mobile-top' ) ); ?>
    </div>

    <div class="footer-mobile-nav">
        <ul>
            <li><a href="/dla-firm/kontakt">Kontakt dla firm</a></li>
            <li><a href="/dla-pracownikow/kontakt">Kontakt dla pracownika</a></li>
            <li><a class="item-mobile">Moje konto</a></li>
        </ul>
    </div>

    <div class="social">
        <a href="https://www.facebook.com/tikrowpl/">
            <img src="<?php bloginfo('template_directory') ?>/img/social/facebook.png">
        </a>
        <a href="https://www.instagram.com/workit_tikrow/">
            <img src="<?php bloginfo('template_directory') ?>/img/social/instagram.png">
        </a>
        <a href="https://pl.linkedin.com/company/tikrow">
            <img src="<?php bloginfo('template_directory') ?>/img/social/linkedin.png">
        </a>
    </div>
</div>

<div class="navbar-left navbar-account">
    <div class="container-top">
        
        <div class="arrow-back arrow-back-account"></div>

        <div class="name">Moje konto</div>

        <div class="closebtn open closebtn-account">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <div class="container-menu">
        <ul>
            <li><a class="navbar-login-link">Logowanie</a></li>
            <li><a class="navbar-register-link">Rejestracja</a></li>
        </ul>
    </div>
</div>

<div class="navbar-left navbar-login">
    <div class="container-top">
        
        <div class="arrow-back arrow-back-login"></div>

        <div class="name">Logowanie</div>

        <div class="closebtn open">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <div class="container-menu">
        <ul>
            <li><a href="https://partner.tikrow.com/login?_ga=2.79104019.62605006.1667228605-2147386924.1663935391">Dla pracownika</a></li>
            <li><a href="https://klient.tikrow.com/login?_ga=2.79104019.62605006.1667228605-2147386924.1663935391">Dla firmy</a></li>
        </ul>
    </div>
</div>

<div class="navbar-left navbar-register">
    <div class="container-top">
        
        <div class="arrow-back arrow-back-register"></div>

        <div class="name">Rejestracja</div>

        <div class="closebtn open">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <div class="container-menu">
        <ul>
            <li><a href="/dla-pracownikow/rejestracja">Dla pracownika</a></li>
        </ul>
    </div>
</div>

<div class="site-overlay"></div>