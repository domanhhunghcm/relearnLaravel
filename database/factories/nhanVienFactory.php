<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\nhanVien;

class nhanVienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = nhanVien::class;
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "email"=>$this->faker->email,
            "phone"=>$this->faker->phoneNumber,
            "salary"=>$this->faker->numberBetween(3000, 5000),
            "department"=>$this->faker->randomElement(array("shachou","kachou","kakarichou","kouhai","senpai")),
        ];
    }
}
