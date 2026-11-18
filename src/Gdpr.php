<?php

namespace JeffersonGoncalves\Gdpr;

use JeffersonGoncalves\Gdpr\Contracts\HasPersonalData;
use JeffersonGoncalves\Privacy\Privacy;

class Gdpr extends Privacy
{
    protected string $config = 'gdpr';

    protected string $contract = HasPersonalData::class;
}
