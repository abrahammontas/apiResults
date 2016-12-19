<?php   // tests/Functional/UserApiTest.php

namespace MiW16\Results\Tests\Functional;

/**
 * Class UserApiTest
 * @package MiW16\Results\Tests\Functional
 */
class UserApiTest extends BaseTestCase
{

    public function testGetAllResults()
    {
        $response = $this->runApp('GET', '/results');

        self::assertEquals(200, $response->getStatusCode());
        self::assertJson((string) $response->getBody());
        self::assertContains('results', (string)$response->getBody());
    }

    public function testGetResult200()
    {
        $response = $this->runApp('GET', '/result/1');

        self::assertEquals(200, $response->getStatusCode());
        self::assertJson((string) $response->getBody());
        $result = json_decode((string) $response->getBody(), true);
        self::assertEquals(1, $result['id']);
        self::assertNotEmpty($result['user_id']);
    }

    public function testGetResult404()
    {
        $response = $this->runApp('GET', '/results/9999999999999');

        self::assertEquals(404, $response->getStatusCode());
    }
}