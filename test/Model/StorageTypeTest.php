<?php
/**
 * StorageTypeTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Upcloud\ApiClient
 */

/**
 * Upcloud api
 *
 * The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.
 *
 * OpenAPI spec version: 1.2.0
 * 
 */


namespace Upcloud\ApiClient;

/**
 * StorageTypeTest Class Doc Comment
 *
 * @category    Class */
// * @description There are four different storage types: * &#x60;disk&#x60; (*Normal storages*) - Normal storage resources are used to store operating system and application data. This is the only user writeable storage type. * &#x60;cdrom&#x60; (*CD-ROMs*) - CD-ROM resources are used as a read-only media, typically for server installations or crash recovery. * &#x60;template&#x60; (*Templates*) - Templates are special storage resources which are used to create new servers with a preconfigured operating system. * &#x60;backup&#x60; (*Backups*) - Backups are storages containing a point-in-time backup of a normal storage. Data on a normal storage can be restored from one of its backups. Backups can also be cloned to create a new normal storage resource. Backups can be created manually or automatically using backup rules.
/**
 * @package     Upcloud\ApiClient
 */
class StorageTypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "StorageType"
     */
    public function testStorageType()
    {
    }
}
