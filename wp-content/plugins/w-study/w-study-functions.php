<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function head_fun(){
	echo '
	<style>
	body {
	background-color: #e0f1e0;
	}
</style>
	';
}

function w_set_menues(): void {
	add_menu_page('DDD Params',
	'dd params',
	'manage_options',
	'params',
	'w_set_param_page',
	'dashicons-admin-collapse',
	5.5);

}

function w_set_param_page(): void {
	require_once W_STUDY_DIR . "templates/param-page.php";
}