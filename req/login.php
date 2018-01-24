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
