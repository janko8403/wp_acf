<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php
add_action( 'wp_ajax_tk_newsletter', 'tk_newsletter' );
add_action( 'wp_ajax_nopriv_tk_newsletter', 'tk_newsletter' );

function tk_newsletter() {
		
    $email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
    $agree = 1;

    // echo $email . 'zapis newsletter';

    // $key_ip = 'PUT_YOUR_KEY_HERE';

    $api = new GetResponse($key_ip);
    $ping = $api->ping();
    var_dump($ping);
    
    $page = get_bloginfo('url');
    $msg = <<<EOF
    Formularz: Zapisanie na newsletter

    E-mail: {$email}

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