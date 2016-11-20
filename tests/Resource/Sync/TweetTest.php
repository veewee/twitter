<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Twitter\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\Twitter\ApiSettings;
use ApiClients\Client\Twitter\Resource\Tweet;

class TweetTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return Tweet::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
