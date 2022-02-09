<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\factory as Faker;

class postExam extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,100) as $index){
            DB::table('make_post')->insert([
                'title_post' => $faker->sentence(5),
                'body_post' => $faker->paragraph(1)
            ]);
        }
        
    }
}
