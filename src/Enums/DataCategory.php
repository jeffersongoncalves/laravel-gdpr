<?php

namespace JeffersonGoncalves\Gdpr\Enums;

enum DataCategory: string
{
    /** GDPR Art. 4(1). */
    case Personal = 'personal';

    /** GDPR Art. 9(1): racial or ethnic origin, political opinions, religion, trade union membership, genetic, biometric, health, sex life or sexual orientation. */
    case Special = 'special';

    /** GDPR Art. 10: criminal convictions and offences. */
    case Criminal = 'criminal';
}
