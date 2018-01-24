<?php
//insert register file data into database
$logname= $logemail = $log_pass = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $logname = $_POST["logname"];
    $logemail = $_POST["logemail"];
    $log_pass = $_POST["log-pass"];
}

$userdata = array(
    'user_login'    =>  $logname,
    'user_email'    =>  $logemail,
    'user_pass'     =>  $log_pass
);

$user_id = wp_insert_user( $userdata ) ;

// On success.
if ( ! is_wp_error( $user_id ) ) {
//    echo "User created : ". $user_id;
    echo "User created successfully";
    wp_redirect(require_once X_SPEED_PLUGIN_DIR . '/req/login.php' );
    exit;
}

