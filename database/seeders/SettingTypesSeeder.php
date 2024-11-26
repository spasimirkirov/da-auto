<?php

namespace Database\Seeders;

use App\Models\SettingType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setting_types')->upsert([
            [
                'id' => 1,
                'name' => 'Contact Phone',
                'slug' => SettingType::CONTACT_PHONE,
            ],
            [
                'id' => 2,
                'name' => 'Contact Email',
                'slug' => SettingType::CONTACT_EMAIL,
            ],
        ], ['id']);
    }
}
