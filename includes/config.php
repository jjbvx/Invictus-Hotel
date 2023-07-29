<?php
/**
* Description: The main class for Database.
* Author: Joken Villanueva
* Date Created: October 27, 2013
* Revised By:
*/

// Database Constants
defined('DB_SERVER') ? null : define("DB_SERVER", "invictushotel-do-user-14427850-0.b.db.ondigitalocean.com");
defined('DB_USER') ? null : define("DB_USER", "doadmin");
defined('DB_PASS') ? null : define("DB_PASS", "AVNS_ViPXmREt-Xs7ejiwXv8 hide");
defined('DB_NAME') ? null : define("DB_NAME", "defaultdb");
defined('DB_PORT') ? null : define("DB_PORT", "25060");
defined('DB_SSLMODE') ? null : define("DB_SSLMODE", "REQUIRED");

$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot = str_replace(array($docRoot, 'includes/config.php'), '', $thisFile);
$srvRoot = str_replace('config/config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
?>
