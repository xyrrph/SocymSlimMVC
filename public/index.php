<?php
use Slim\Factory\AppFactory;

$TOPDIR = dirname(__FILE__, 2);
require_once($TOPDIR . '/vendor/autoload.php');
require_once($TOPDIR . '/containerSetups.php');
$app = AppFactory::create();
require_once($TOPDIR . '/routes.php');
$app->run();
