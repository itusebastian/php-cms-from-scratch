<?php

// Assign file paths to PHP constants
// _FILE_ returns the current file path
// dirname() returns the parent directory path
define('PRIVATE_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(PRIVATE_PATH));
define('PUBLIC_PATH', PRIVATE_PATH . '/public');
define('SHARED_PATH', PRIVATE_PATH . '/shared');

require_once("functions.php");
