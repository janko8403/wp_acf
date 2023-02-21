<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php
add_action( 'wp_ajax_tk_form', 'tk_form' );
add_action( 'wp_ajax_nopriv_tk_form', 'tk_form' );

function tk_form() {
		
	global $wpdb;

	$table = "tk_form_send";

    
    $email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
    $txt = isset($_POST['txt']) ? trim(strip_tags($_POST['txt'])) : '';
    $name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $phone = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
    $company = isset($_POST['company']) ? trim(strip_tags($_POST['company'])) : '';
    $target = isset($_POST['target']) ? trim(strip_tags($_POST['target'])) : '';
    $agree = 1;
    
    // if (strlen($email) < 3 || filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //     $validation['email'] = 'Podaj prawidłowy adres e-mail';
    // }

    if(!empty($name)) {
        $form = 'Firma';
    } else {
        $form = 'Pracownik';
    }

    $page = get_bloginfo('url');
    $msg = <<<EOF
Formularz: {$form}

Imię i Nazwisko: {$name}
E-mail: {$email}
Wiadomość: {$txt}

Tel.: {$phone}
Firma: {$company}
Zgoda: Tak
EOF;

    if (!empty($email)) {
        $to = $target;
        $subject = "Wiadomość ze strony: {$page}";
		$m = $msg;
		
		$wpdb->insert($table, 
            array( 
                'name' => $name,
                'phone' => $phone,
                'company' => $company,
				'email' => $email,
                'txt' => $txt,
                'agree' => $agree,
                'date' => date('Y-m-d h:m:s'),
            )
        );  
		
		$mailStatus = wp_mail($to, $subject, $m);
		
		if ($mailStatus) {
            return true;
        } else {
            return false;
        }
		
    }
}