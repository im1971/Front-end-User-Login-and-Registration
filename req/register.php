<?php

if(!empty($_POST['logname']) && !empty($_POST['logemail']) && !empty($_POST['log-pass']) && $_POST['action'] && $_POST['action'] == 'submit-register')
{
    require_once X_SPEED_PLUGIN_DIR . '/req/insert-register.php';
}else{
    $nameErr = $emailErr = $log_passErr = "";

    if (empty($_POST["logname"])) {
        $nameErr = "* Name is required";
    } else {
        $logname = $_POST["logname"];
    }

    if (empty($_POST["logemail"])) {
        $emailErr = "* Email is required";
    } else {
        $logemail = $_POST["logemail"];
    }

    if (empty($_POST["log-pass"])) {
        $log_passErr = "* password is required";
    } else {
        $log_pass = $_POST["log-pass"];
    }

}
?>

<div class="wrap-register">
    <div class="row">
        <div class="col-md-6 ">
            <h2 class="text-center h2-design"> Register</h2>
            <form method="post" action="<?php echo $_SERVER['REQUEST_URI']?>" class="col-design">

                <input type="text" placeholder="User Name" name="logname">
                <span class="error"><?php echo $nameErr;?></span><br>

                <input type="text" placeholder="User Email" name="logemail">
                <span class="error"><?php echo $emailErr;?></span><br>

                <input type="password" placeholder="User Password" name="log-pass">
                <span class="error"><?php echo $log_passErr;?></span><br>

                <input type="hidden" name="action" value="submit-register">
                <input class="button-design" type="submit" value="Register"> OR <br>
                <input class="show-login button-design" type="button" value="Log In">
            </form>
        </div>
    </div>
</div>

<div id="login">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center h2-design"> Login </h2>
            <?php
            $args = array(
                'echo'           => true,
                'remember'       => true,
                'redirect'       => admin_url(),
                'form_id'        => 'loginform',
                'id_username'    => 'user_login',
                'id_password'    => 'user_pass',
                'id_remember'    => 'rememberme',
                'id_submit'      => 'wp-submit',
                'label_username' => __( 'Username or Email Address' ),
                'label_password' => __( 'Password' ),
                'label_remember' => __( 'Remember Me' ),
                'label_log_in'   => __( 'Log In' ),
                'value_username' => '',
                'value_remember' => false
            );
            wp_login_form($args);?>
            <input class="button-design show-register" type="submit" value="Create a new account">
        </div>
    </div>
</div>