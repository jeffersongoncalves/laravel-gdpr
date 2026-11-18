<?php

namespace JeffersonGoncalves\Gdpr\Commands;

use JeffersonGoncalves\Gdpr\Gdpr;
use JeffersonGoncalves\Privacy\Commands\InventoryCommand as BaseInventoryCommand;

class InventoryCommand extends BaseInventoryCommand
{
    protected $signature = 'gdpr:inventory {--json : Output as JSON}';

    protected string $privacy = Gdpr::class;
}
