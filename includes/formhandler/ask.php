<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php
add_action( 'wp_ajax_tk_ask', 'tk_ask' );
add_action( 'wp_ajax_nopriv_tk_ask', 'tk_ask' );

function tk_ask() {
		
    $email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
    $txt = isset($_POST['txt']) ? trim(strip_tags($_POST['txt'])) : '';
    $agree = 1;
    
    $page = get_bloginfo('url');
    $msg = <<<EOF
Formularz: Zadaj pytanie

E-mail: {$email}
Wiadomość: {$txt}

Zgoda: Tak
EOF;

    if (!empty($email)) {
        // $to = '';
        $subject = "Wiadomość ze strony: {$page}";
		$m = $msg;
		
		$mailStatus = wp_mail($to, $subject, $m);
		
		if ($mailStatus) {
            return true;
        } else {
            return false;
        }
		
    }
}