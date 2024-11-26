<?php

namespace App\Models;

use App\Traits\SlugTrait;
use Illuminate\Database\Eloquent\Model;

class SettingType extends Model
{
    use SlugTrait;

    const CONTACT_PHONE = 'contact_phone';

    const CONTACT_EMAIL = 'contact_email';

    public $table = 'setting_types';

    public $timestamps = false;
}
