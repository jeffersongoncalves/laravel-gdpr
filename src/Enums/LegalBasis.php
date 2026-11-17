<?php

namespace JeffersonGoncalves\Gdpr\Enums;

/**
 * Lawful bases for processing (GDPR Art. 6(1)). Special categories also need an Art. 9(2) condition.
 */
enum LegalBasis: string
{
    case Consent = 'consent';                          // Art. 6(1)(a)
    case Contract = 'contract';                        // Art. 6(1)(b)
    case LegalObligation = 'legal_obligation';         // Art. 6(1)(c)
    case VitalInterests = 'vital_interests';           // Art. 6(1)(d)
    case PublicTask = 'public_task';                   // Art. 6(1)(e)
    case LegitimateInterests = 'legitimate_interests'; // Art. 6(1)(f)
}
