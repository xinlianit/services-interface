<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/15
 * Time: 23:16
 */

namespace Jirry\Rpc\Services\Interfaces;

/**
 * 日志服务接口
 * Interface LogInterface
 *
 * @package App\Rpc\Lib
 */
interface LogInterface
{
    /**
     * 日志推送
     *
     * @param string|null $logContent
     *
     * @return bool
     */
    public function push(string $logContent = null): bool;

    /**
     * 日志列表
     *
     * @return array
     */
    public function listLogs(): array;

    /**
     * 获取日志
     *
     * @return array
     */
    public function getLog(): array;
}