<?php
/**
 * 服务端守护进程
 * @package Vortex Server
 * @author Panghe<hepang@meilishuo.com>
 */

define('DEBUG', 'on');
define("WEBPATH", str_replace("\\","/", __DIR__ . '/../'));
define("FRAMEPATH", WEBPATH . '../framework/');
require FRAMEPATH . '/libs/lib_config.php';

Swoole\Config::$debug = true;
Swoole\Error::$echo_html = false;

$AppSvr = new Swoole\Protocol\AppServer();
$AppSvr->loadSetting('./swoole.ini');
$AppSvr->setAppPath(WEBPATH . '/apps/');                                 //设置应用所在的目录
$AppSvr->setLogger(new \Swoole\Log\EchoLog(WEBPATH . 'logs/server.log')); //Logger

$server = new \Swoole\Network\Server('0.0.0.0', 9555);
$server->setProtocol($AppSvr);

$server->daemonize();                                                  //作为守护进程
$server-->run(array(
			'worker_num' => 4, 
			'max_request' => 1000, 
			'log_file' => '/tmp/swoole.log',
			));


