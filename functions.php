<?php
//Connect scripts to our theme

add_theme_support( 'post-thumbnails', array( 'post' ) );

function StylesInitialize() {
    $theme_uri = get_template_directory_uri();


    wp_enqueue_style('animations.css', $theme_uri.'/css/animations.css');


    wp_enqueue_style('bootstrap.min.cs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');

    wp_enqueue_style('load-animation', $theme_uri.'/css/load-animation.css');

    wp_enqueue_style('font-awesome.min.css', $theme_uri.'/css/font-awesome.min.css');


    wp_enqueue_style('jquery.flickr.css', $theme_uri.'/css/jquery.flickr.css');


    wp_enqueue_style('main.css', $theme_uri.'/css/main.css', false, '0.1');


    wp_enqueue_style('owl.carousel.css', $theme_uri.'/css/owl.carousel.css');

    wp_enqueue_style('prettyPhoto.css', $theme_uri.'/css/prettyPhoto.css');

    //Скрипты
    wp_deregister_script('jquery');
    wp_enqueue_script('myjquery', get_template_directory_uri() .'/js/jquery.js');






}

add_action('wp_enqueue_scripts', 'StylesInitialize');

add_action('wp_enqueue_scripts', 'ScriptsInitialize');

function ScriptsInitialize(){
    wp_enqueue_script('jquerystellar', get_template_directory_uri() .'/js/jquery.stellar.min.js');
    wp_enqueue_script('owlcarousel', get_template_directory_uri() .'/js/owl.carousel.min.js');
    wp_enqueue_script('jqueryeasing', get_template_directory_uri() .'/js/jquery.easing-1.3.pack.js');
    wp_enqueue_script('jflickrfeed.', get_template_directory_uri() .'/js/jflickrfeed.min.js');
    wp_enqueue_script('jqueryprettyPhoto', get_template_directory_uri() .'/js/jquery.prettyPhoto.js');

    wp_enqueue_script('sweetalert2','https://unpkg.com/sweetalert/dist/sweetalert.min.js');

    wp_enqueue_script('PhoneNumberValidator',get_template_directory_uri().'/js/DataValidator.js');

    wp_enqueue_script('bootstrapscrollspy', get_template_directory_uri() .'/js/bootstrap-scrollspy.min.js');
    wp_enqueue_script('main.js', get_template_directory_uri() .'/js/main.js');

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2-respond-1.1.0.min.js');

    wp_enqueue_script('SweetalertContactForm', get_template_directory_uri().'./js/SweetalertContactForm.js');
}

//Настройки для отправки почты
function mihdan_send_smtp_email( PHPMailer $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_NAME;
}

add_action( 'phpmailer_init', 'mihdan_send_smtp_email' );

?>
