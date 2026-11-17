<?php

namespace JeffersonGoncalves\Gdpr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static list<class-string> models()
 * @method static list<array<string, mixed>> inventory()
 * @method static array{rows: int, groups: int, k: int, rows_below_k: int, l: int|null} kAnonymity(string|\Illuminate\Database\Eloquent\Builder<\Illuminate\Database\Eloquent\Model> $source, array<int|string, string|\Closure> $quasiIdentifiers, int $k = 5, ?string $sensitive = null)
 *
 * @see \JeffersonGoncalves\Gdpr\Gdpr
 */
class Gdpr extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JeffersonGoncalves\Gdpr\Gdpr::class;
    }
}
