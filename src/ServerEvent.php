<?php

namespace Swoft\Server;

/**
 * Class ServerEvent
 *
 * @since 2.0
 */
class ServerEvent
{
    /**
     * before set swoole settings
     */
    public const BEFORE_SETTING = 'swoft.server.beforeSetting';

    /**
     * before bind swoole events
     */
    public const BEFORE_BIND_EVENT = 'swoft.server.beforeBindEvent';

    /**
     * Swoft before start server event
     */
    public const BEFORE_START = 'swoft.server.beforeStart';

    /**
     * on task process start event
     */
    public const TASK_PROCESS_START = 'swoft.server.taskProcessStart';

    /**
     * on work process start event
     */
    public const WORK_PROCESS_START = 'swoft.server.workProcessStart';

    /**
     * on user process start event
     */
    public const USER_PROCESS_START = 'swoft.server.userProcessStart';
}