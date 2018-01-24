<?php

function reg_shortcode() {
    require_once X_SPEED_PLUGIN_DIR . '/req/markup.php';
}
add_shortcode( 'x-speed-reg', 'reg_shortcode' );