<?php

/**
 * Enabled providers. Order does matter.
 */

use Canvas\Providers\AppProvider;
use Canvas\Providers\CacheDataProvider;
use Canvas\Providers\DatabaseProvider as KanvasDatabaseProvider;
use Canvas\Providers\LoggerProvider;
use Canvas\Providers\MapperProvider;
use Canvas\Providers\ModelsCacheProvider;
use Canvas\Providers\RegistryProvider;
use Canvas\Providers\UserProvider;
use Kanvas\Packages\Payments\Providers\PlaidProvider;
use Kanvas\Packages\Social\Providers\DatabaseProvider;
use Kanvas\Packages\Social\Providers\QueueProvider;
use Kanvas\Packages\Social\Providers\RedisProvider;
use Kanvas\Packages\Test\Support\Providers\ConfigProvider;
use Kanvas\Packages\WorkflowsRules\Providers\DatabaseProvider as WorkflowDatabaseProvider;

return [
    ConfigProvider::class,
    KanvasDatabaseProvider::class,
    DatabaseProvider::class,
    RegistryProvider::class,
    LoggerProvider::class,
    QueueProvider::class,
    RedisProvider::class,
    PlaidProvider::class,
    AppProvider::class,
    UserProvider::class,
    WorkflowDatabaseProvider::class,
    CacheDataProvider::class,
    ModelsCacheProvider::class,
    MapperProvider::class
];
