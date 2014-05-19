<?php defined('SYSPATH') OR die('No direct script access.');

// Testing dependencies
if(!class_exists('Database'))
{
	throw new Exception('The user auth module requires the Database module: https://github.com/kohana/database');
}
if(!class_exists('ORM'))
{
	throw new Exception('The user auth module requires the ORM module: https://github.com/kohana/orm');
}
if(!class_exists('Auth'))
{
	throw new Exception('The user auth module requires the Auth module: https://github.com/kohana/auth');
}

// Installed?
try
{
	ORM::factory('User');
}
catch(exception $e)
{
	throw new Exception('The "users" table doesn\'t exist. Make sure to import the tables.sql file');
}

Route::set('Kohanauserauth', user::path().'(/<action>(/<id>))')
	-> defaults(array(
		'controller' => 'Kohanauserauth'
	));
