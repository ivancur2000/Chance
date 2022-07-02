<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'life_motto' => 'Hombre prevenido vale por 2',
            'description' => 'Soy una persona autodidacta, adaptable al cambio bla bla',
            'phone' => "+59175243079",
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/feed/',
            'twitter' => 'https://twitter.com/home',
            'tiktok' => 'https://www.tiktok.com/es/',
            'web_site' => 'https://stackoverflow.com/',
            'zone' => 'Zona Chapuma',
            'street' => 'Calle 1',
            'number' => '#135',
            'date_birth' => '2000-11-17',
            'civil_status' => 'Soltero',
            'user_id' => 1
        ]);
    }
}
