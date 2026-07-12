<?php
/**
 * Plugin Name: WordPress Maintenance Toolkit
 * Description: Otimização e manutenção de sites WordPress — limpeza de banco, cache, Heartbeat API e diagnóstico.
 * Version: 0.1.0
 * Author: Garion Projetos
 * License: GPL-2.0+
 * Text Domain: wordpress-maintenance-toolkit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WPMT_VERSION', '0.1.0' );
define( 'WPMT_PATH', plugin_dir_path( __FILE__ ) );
define( 'WPMT_URL', plugin_dir_url( __FILE__ ) );
