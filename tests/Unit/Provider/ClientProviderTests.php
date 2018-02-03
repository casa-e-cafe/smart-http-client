<?php
/**
 * Created by Rafael Girolineto
 * User: Rafael
 * Date: 03/02/18
 */

namespace CasaCafe\Library\Client\Unit\Provider;

use PHPUnit\Framework\TestCase;
use Silex\Application;
use CasaCafe\Library\Client\Provider\ClientProvider;

class ClientProviderTests extends TestCase
{
    static private $silexApplication;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        self::registerServices();
    }

    private static function registerServices()
    {
        require_once __DIR__ . '/../../../vendor/autoload.php';
        $silexApplication = new Application();
        $silexApplication->register(new ClientProvider());

        self::$silexApplication = $silexApplication;
    }

}
