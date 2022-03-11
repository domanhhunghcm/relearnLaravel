<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     postExam::class
        // ]);
        // $faker=Faker::create();
        // foreach(range(1,1000) as $index){
        //     DB::table("users")->insert([
        //         "name"=>$faker->name,
        //         "email"=>$faker->unique()->safeEmail,
        //         "password"=>bcrypt("secret")
        //     ]);    
        // }
        $faker=Faker::create();
        foreach(range(1,1000) as $index){
            DB::table("users")->insert([
                "name"=>$faker->name,
                "email"=>$faker->email,
                "password"=>$faker->phoneNumber,
            ]);
        }
        
    }
}
