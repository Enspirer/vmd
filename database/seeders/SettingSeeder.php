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

        $config = \App\Models\Config::where('key','=','contact_text')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'contact_text';
           $config->value = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores quod earum voluptates consequatur. Aspernatur perspiciatis.';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','contact_address')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'contact_address';
           $config->value = '<p><strong>VMD Consultant</strong></p><p><strong>518/ B C Avenue,&nbsp;</strong></p><p><strong>London.</strong></p>';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','contact_number')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'contact_number';
           $config->value = '+94 777000000 / 11 5022832';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','contact_fax')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'contact_fax';
           $config->value = '0094 11 5526575';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','contact_email')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'contact_email';
           $config->value = 'info@eduknow.com';
           $config->save();
        }

    }
}
