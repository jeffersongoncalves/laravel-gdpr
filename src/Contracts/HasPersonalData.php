<?php

namespace JeffersonGoncalves\Gdpr\Contracts;

use JeffersonGoncalves\Gdpr\Attributes\PersonalData;

interface HasPersonalData
{
    /**
     * @return list<PersonalData>
     */
    public static function personalDataFields(): array;

    /**
     * Declared personal data of this record, keyed by column (GDPR Arts. 15 and 20).
     *
     * @return array<string, mixed>
     */
    public function exportPersonalData(): array;

    /**
     * Apply each column's anonymize strategy and persist (GDPR Art. 17).
     */
    public function anonymizePersonalData(): void;
}
