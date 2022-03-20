<?php

namespace Igniter\Frontend\Models;

use Igniter\Flame\Database\Model;

class MailchimpSettings extends Model
{
    public $implement = ['System\Actions\SettingsModel'];

    public $settingsCode = 'igniter_frontend_mailchimpsettings';

    public $settingsFieldsConfig = 'mailchimpsettings';
}
