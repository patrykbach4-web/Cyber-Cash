<?php
function trx_faucet_assets(){
    wp_enqueue_style('trx-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'trx_faucet_assets');
?>
