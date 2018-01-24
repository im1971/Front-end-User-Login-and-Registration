<?php
if ( is_user_logged_in() ) {

    $user = wp_get_current_user();

    echo '<p> Welcome: ' . $user->user_login . '</p>';
    ?>
    <a href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a>
    <?php

} else {
    require_once X_SPEED_PLUGIN_DIR . '/req/register.php';
}