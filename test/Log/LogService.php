<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/14
 * Time: 14:15
 */
namespace Log;

require_once __DIR__ . '/../../vendor/autoload.php';

use Jirry\Rpc\Services\Interfaces\LogInterface;

class LogService implements LogInterface
{
    public function push(string $logContent = null): bool
    {
        // TODO: Implement push() method.
        print_r($logContent);
        return true;
    }

    public function listLogs(): array
    {
        // TODO: Implement listLogs() method.
        print_r("listLogs");
        return [];
    }

    public function getLog(): array
    {
        // TODO: Implement getLog() method.
        print_r("getLog");
        return [];
    }

}