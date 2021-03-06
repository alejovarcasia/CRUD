<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'errors/page_missing';
$route['translate_uri_dashes'] = FALSE;
$route['/'] = 'welcome/index';
$route['fetch'] = 'welcome/fetch';
$route['insert'] = 'welcome/insert';
$route['delete'] = 'welcome/delete';
$route['edit'] = 'welcome/edit';
$route['update'] = 'welcome/update';
$route['search'] = 'welcome/search';
