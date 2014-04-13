<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

//echo "Test testing branch new";
// change the following paths if necessary

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUGdf',true);

require_once($yii);
Yii::createWebApplication($config)->run();
