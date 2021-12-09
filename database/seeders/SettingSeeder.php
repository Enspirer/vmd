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



        $config = \App\Models\Config::where('key','=','about_us_image')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'about_us_image';
           $config->value = 'about.png';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','about_us_description')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'about_us_description';
           $config->value = '<p>Our main aim is to provide the right position to the right person. We believe, if you meet the required standards we will be able to provide you the role no matter what background or what country you come from.</p><p>&nbsp;</p><h4><strong>Start your desired life in the UK :</strong></h4><p>&nbsp;</p><p>Our promise to you is to provide a superior employment experience whether you are a candidate or we are engaging with your organization. While our competitors think recruiting is a business, we believe it is one of the most important services in the world. We believe we can make people’s lives better with correct recruitment.</p><p>For Candidates(Applicants) : If you have the right Qualifications, experience, talent and more than anything else, you have the commitment and drive to pursue your dreams, we are at your service to provide you with the opportunity to achieve your goals. Nothing else matters to us. We will lead you to the career life you deserve.</p><p>For Clients (Employers) : We understand the importance of recruiting the suitable candidate to a company. We dedicate much time, and energy to provide best suitable &amp; most importantly the candidates which we think have the utter commitment and dedication to work for you. We want our candidates to be a part of the organisation family and make a positive different.</p>';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','our_mision')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'our_mision';
           $config->value = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, illum. Delectus inventore ad ex recusandae velit explicabo sint fuga. Maxime qui, unde doloribus itaque dolores nemo laborum temporibus ducimus. Adipisci!';
           $config->save();
        }

        $config = \App\Models\Config::where('key','=','our_vision')->first();
        if($config == null){
           $config = new \App\Models\Config();
           $config->key = 'our_vision';
           $config->value = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, illum. Delectus inventore ad ex recusandae velit explicabo sint fuga. Maxime qui, unde doloribus itaque dolores nemo laborum temporibus ducimus. Adipisci!';
           $config->save();
        }

    }
}
