<?php

namespace JeffersonGoncalves\Gdpr\Commands;

use Illuminate\Console\Command;
use JeffersonGoncalves\Gdpr\Gdpr;

class InventoryCommand extends Command
{
    protected $signature = 'gdpr:inventory {--json : Output as JSON}';

    protected $description = 'List every personal data column declared with #[PersonalData]';

    public function handle(Gdpr $gdpr): int
    {
        $rows = $gdpr->inventory();

        if ($this->option('json')) {
            $this->line((string) json_encode($rows, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));

            return self::SUCCESS;
        }

        if ($rows === []) {
            $this->warn('No personal data declared. Add models to config gdpr.models.');

            return self::SUCCESS;
        }

        $this->table(array_keys($rows[0]), $rows);

        return self::SUCCESS;
    }
}
