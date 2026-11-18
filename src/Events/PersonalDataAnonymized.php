<?php

namespace JeffersonGoncalves\Gdpr\Events;

use JeffersonGoncalves\Privacy\Events\PersonalDataAnonymized as BasePersonalDataAnonymized;

/**
 * Fired by anonymizePersonalData() after saving. $columns lists the columns changed (Keep columns excluded).
 */
class PersonalDataAnonymized extends BasePersonalDataAnonymized {}
