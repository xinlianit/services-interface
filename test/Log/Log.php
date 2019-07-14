<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/14
 * Time: 14:28
 */

require_once __DIR__ . '/LogService.php';

use Log\LogService;

$LogService = new LogService();

// 日志推送
$logContent = ['content'=>'test'];
$LogService->push(json_encode($logContent));