<?php

namespace JeffersonGoncalves\Gdpr\Commands;

use JeffersonGoncalves\Gdpr\Gdpr;
use JeffersonGoncalves\Privacy\Commands\KAnonymityCommand as BaseKAnonymityCommand;

class KAnonymityCommand extends BaseKAnonymityCommand
{
    protected $signature = 'gdpr:k-anonymity
        {model : Eloquent model class}
        {columns* : Quasi-identifier columns}
        {--k=5 : Minimum group size}
        {--sensitive= : Sensitive column for l-diversity}';

    protected string $privacy = Gdpr::class;
}
