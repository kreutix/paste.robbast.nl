<?php declare(strict_types=1);

/*
 * (c) Rob Bast <rob.bast@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Paste\Controller;

use Paste\IntegrationTest;

/**
 * @group integration
 */
class IndexControllerTest extends IntegrationTest
{
    public function test_it_should_return_a_200_response(): void
    {
        $client = static::createClient();
        $client->request('GET', '/', [], [], ['HTTP_Accept' => 'text/html']);

        $this->assertTrue($client->getResponse()->isOk());

        $client->request('GET', '/', [], [], ['HTTP_Accept' => 'text/plain']);

        $this->assertTrue($client->getResponse()->isOk());
    }
}
