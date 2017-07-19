<?php
/**
 * Filename: config.inc.php
 * Created by:zhendong
 * 
 * Configuration files does the following things
 * - Has site settings in one location
 * - Store URLs and URIs as constants
 */

# ********* SETTINGS ********* #

//Errors are emailed here;

$contact_email = 'address@example.com';

//local server or real server

$host = substr($_SERVER['HTTP_HOST'], 0, 5);

if(in_array($host, array('local','127.0','192.1'))) {
	$local = ture;
} else {
	$local = false;
}

//local server for development and debug
if($local) {
	//show debug info on html
	$debug = true;

	//define the constants
	define('BASE_URI','/path/to/html/folder/');
	define('BASE_URL','http://localhost/directory/');
	define('DB','/path/to/mysql.inc.php');
} else {
	define('BASE_URI','/path/to/live/html/folder');
	define('BASE_URL','http://www.example.com');
	define('DB','/path/to/live/mysql.inc.php');
}

//