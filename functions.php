<?php
/**
 * Tikrow functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Tikrow
 * @since 1.0.0
 */


 /* global setting page  */
require_once(get_template_directory() . '/includes/acf-settings-page/acf-settings-page.php');

/* activate menus */
require_once(get_template_directory() . '/includes/activate-support/activate-support.php');

/* get response */
// require_once(get_template_directory() . '/classes/GetResponseAPI3.class.php');

    // $key_ip = 'ed17c498bfe343175cd7684c5b09979f2875b25c';

    // $api = new GetResponse($key_ip);
    // $ping = $api->ping();
    // var_dump($ping);

    // $response = $getresponse->addContact(array(
    //     'name'              => $fname . " " . $lname,
    //     'email'             => $email,
    //     'dayOfCycle'        => 0,
    //     'campaign'          => array('campaignId' => '999999999')
    // ));

    // echo print_r($response);

// form
require_once get_stylesheet_directory() . '/includes/formhandler/form.php';
require_once get_stylesheet_directory() . '/includes/formhandler/ask.php';
require_once get_stylesheet_directory() . '/includes/formhandler/newsletter.php';


add_action('wp_head', 'ajaxurl');
function ajaxurl() {
    echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
        </script>';
}

add_action( 'wp_numberPhone', 'numberPhone' );
function numberPhone(int $id_page) {
    if($id_page === 11 || $id_page === 16 || $id_page === 60 || $id_page === 64 || is_front_page()) {
        return '22 100 43 15';
    } else {
        return '22 100 44 57';
    }
}