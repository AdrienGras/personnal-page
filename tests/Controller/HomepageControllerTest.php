<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageControllerTest extends WebTestCase {
    public function testShowPost() {
        $client = static::createClient();
        $client->request('GET', '/');

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertStringContainsString('Hello, world!',$client->getResponse()->getContent());
    }
}