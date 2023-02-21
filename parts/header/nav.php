<nav class="navbar-top navbar-main">
    <?php wp_nav_menu( array( 'theme_location' => 'top_menu', 'menu_class' => 'nav-list-primary' ) ); ?>
</nav>
<nav class="navbar-top">
    <div class="dropdown">
        <a class="item-nav item-account">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="8" r="5"/>
                <path d="M8 14H12H16V21H8V14Z"/>
            </svg>
            <span class="item-desktop">Moje konto</span>
            <span class="item-mobile">konto</span>
        </a>
        <div class="dropdown-content">
            <div class="dropdown-account active-dropdown">
                <a class="login-link">Logowanie</a>
                <a class="register-link">Rejestracja</a>
            </div>
            <div class="dropdown-employee">
                <a class="login-link login-link_back text-bold">Logowanie</a>
                <a href="https://partner.tikrow.com/login?_ga=2.79104019.62605006.1667228605-2147386924.1663935391">Dla pracownika</a>
                <a href="https://klient.tikrow.com/login?_ga=2.79104019.62605006.1667228605-2147386924.1663935391">Dla firmy</a>
            </div>
            <div class="dropdown-company">
                <a class="register-link register-link_back text-bold">Rejestracja</a>
                <a href="/dla-pracownikow/rejestracja">Dla pracownika</a>
            </div>
        </div>
    </div>
    <a class="item-nav item-contact" href="tel:+48<?php echo str_replace(' ', '', numberPhone(get_the_ID())); ?>">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 12C4 16.4183 7.58172 20 12 20V16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8V4C7.58172 4 4 7.58172 4 12Z" fill="#172C45"/>
            <path d="M13 9L16 12L13 15V9Z" fill="#172C45"/>
            <path d="M17 9L20 12L17 15V9Z" fill="#172C45"/>
        </svg>
        <?php echo numberPhone(get_the_ID()); ?>
    </a>
</nav>