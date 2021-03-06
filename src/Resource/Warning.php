<?php declare(strict_types=1);

namespace ApiClients\Client\Twitter\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyWarning")
 */
abstract class Warning extends AbstractResource implements WarningInterface
{
    /**
     * @var array
     */
    protected $status;

    /**
     * @var string
     */
    protected $timestamp_ms;

    /**
     * @return array
     */
    public function status() : array
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function timestampMs() : string
    {
        return $this->timestamp_ms;
    }
}
