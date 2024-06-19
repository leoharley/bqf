<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Database Settings
|--------------------------------------------------------------------------
|
*/

$active_group = 'default';
$query_builder = TRUE;

if (strpos($_SERVER['REQUEST_URI'], 'homologacao') !== FALSE) {
	$db['default'] = array(
		'dsn'	=> '',
		'hostname' => 'mysql:host=localhost;port=3306;dbname=bqf_db',
		'username' => 'leoharley',
		//'password' => '',
		'dbdriver' => 'pdo',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => true,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
} else {
	
	$db['default'] = array(
		'dsn'	=> '',
		'hostname' => 'mysql:host=localhost;port=3306;dbname=bqf_db',
		'username' => 'leoharley',
		//'password' => '',
		'dbdriver' => 'pdo',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => true,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);

}