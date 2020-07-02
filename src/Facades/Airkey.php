<?php

namespace Coucounco\Airkey\Swagger\Client\Facades;

use Coucounco\Airkey\Swagger\Client\AirKeyApi;
use Coucounco\Airkey\Swagger\Client\Api\AreasApi;
use Coucounco\Airkey\Swagger\Client\Api\LocksApi;
use Coucounco\Airkey\Swagger\Client\Api\MediaApi;
use Coucounco\Airkey\Swagger\Client\Api\PersonsApi;
use Coucounco\Airkey\Swagger\Client\Api\PublicMgmtApi;
use Coucounco\Airkey\Swagger\Client\Api\SendAKeyApi;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static PersonsApi personsApi()
 * @method static MediaApi mediaApi()
 * @method static AreasApi areasApi()
 * @method static LocksApi locksApi()
 * @method static SendAKeyApi sendKeyApi()
 * @method static PublicMgmtApi publicMgmtApi()
 * @method static void mockClient(ClientInterface $client)

 *
 * @see AirKeyApi
 */
class Airkey extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'airkey:facade';
    }
}