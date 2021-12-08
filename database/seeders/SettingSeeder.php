<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = \App\Models\Config::where('key','=','employee_banner')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'employee_banner';
           $config->value = 'banner.png';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','home_banner')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'home_banner';
           $config->value = 'home_banner.png';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','candidate_banner')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'candidate_banner';
           $config->value = 'candidate_banner.png';
           $config->save();
        }

    }
}
