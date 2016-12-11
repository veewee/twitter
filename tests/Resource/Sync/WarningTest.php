<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Twitter\Resource\Sync;

use ApiClients\Client\Twitter\ApiSettings;
use ApiClients\Client\Twitter\Resource\Warning;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class WarningTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return Warning::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
