<?php

// set default timezone
date_default_timezone_set('UTC');

$APP_NAME = 'earthquake-rtgm-calculator';

# Set some defaults
$CONFIG = array(
  'APP_DIR' => dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR,
  'CONF_DIR' => dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'conf',
  'MOUNT_PATH' => '/app'
);


# Inherit from server environment
if (isset($_SERVER['APP_DIR'])) {
  $CONFIG['APP_DIR'] = $_SERVER['APP_DIR'] . DIRECTORY_SEPARATOR . $APP_NAME;
}

if (isset($_SERVER['CONF_DIR'])) {
  $CONFIG['CONF_DIR'] = $_SERVER['CONF_DIR'];
}


# Load configuration file if exists
$CONFIG_FILE = $CONFIG['CONF_DIR'] . DIRECTORY_SEPARATOR . "${APP_NAME}.ini";

if (file_exists($CONFIG_FILE)) {
  $CONFIG = array_merge($CONFIG, parse_ini_file($CONFIG_FILE));
}


# Finally set necessary values
$APP_DIR = $CONFIG['APP_DIR'];
$MOUNT_PATH = $CONFIG['MOUNT_PATH'];

include_once $APP_DIR . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR .
		'lib.inc.php';
