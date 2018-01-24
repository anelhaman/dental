<?php
session_start();
define('StTime', microtime(true));
date_default_timezone_set('Asia/Bangkok');
// error_reporting(E_ALL ^ E_NOTICE);
// error_reporting(0);
define("VERSION" 	,'1.0.1');

require_once 'class/database.class.php';
require_once 'class/patient.class.php';
require_once 'config/config.php';
$wpdb = new Database;
$patient = new Patient;