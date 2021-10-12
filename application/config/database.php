<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;
global $db;
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'db-development.cbq3cbjddsma.us-east-1.rds.amazonaws.com',
	'username' => 'db_user',
	'password' => 'ERFJF7p7My5xXjSKRv5Njf69ea2BStS2XJRzSW9Vs',
	'database' => 'alephoo_crud',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => false, // Cuando se utiliza mysqli la persistencia se configura concatenando "p:" delante del host
	'db_debug' => (ENVIRONMENT === 'development'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => TRUE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => FALSE,
);

$active_record = TRUE;