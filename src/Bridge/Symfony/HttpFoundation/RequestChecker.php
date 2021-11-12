<?php

namespace K911\Swoole\Bridge\Symfony\HttpFoundation;

use Symfony\Component\HttpKernel\Event\KernelEvent;

class RequestChecker
{

    /**
     * @param $event KernelEvent
     */
    public static function isMainRequest($event): bool
    {
        if(method_exists($event, 'isMainRequest')) {
            return $event->isMainRequest();
        }

        return $event->isMasterRequest();
    }
}
