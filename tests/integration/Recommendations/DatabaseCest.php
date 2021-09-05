<?php
declare(strict_types=1);

namespace Kanvas\Packages\Tests\Integration\Payments\Plaid;

use IntegrationTester;
use Kanvas\Packages\Recommendations\Drivers\Recombee\Engine;
use Kanvas\Packages\Test\Support\Recommendations\Database\Topics;
use Recombee\RecommApi\Client;
use Recombee\RecommApi\Requests as Reqs;

class DatabaseCest
{
    public function create(IntegrationTester $I) : void
    {
        $topics = new Topics();
        $engine = Engine::getInstance($topics);

        $createTable = $topics->create(
            $engine,
            function (Client $client) : Client {
                $client->send(new Reqs\AddItemProperty('created_at', 'timestamp'));
                $client->send(new Reqs\AddItemProperty('name', 'string'));
                $client->send(new Reqs\AddItemProperty('slug', 'string'));
                $client->send(new Reqs\AddItemProperty('users_id', 'int'));

                return $client;
            }
        );

        $I->assertTrue($createTable);
    }

    public function delete(IntegrationTester $I) : void
    {
        $topics = new Topics();
        $engine = Engine::getInstance($topics);

        $delete = $topics->create(
            $engine,
            function (Client $client) : Client {
                $client->send(new Reqs\DeleteItemProperty('created_at', 'timestamp'));
                $client->send(new Reqs\DeleteItemProperty('name', 'string'));
                $client->send(new Reqs\DeleteItemProperty('slug', 'string'));
                $client->send(new Reqs\DeleteItemProperty('users_id', 'int'));

                return $client;
            }
        );

        $I->assertTrue($delete);
    }
}