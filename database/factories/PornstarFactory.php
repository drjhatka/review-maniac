<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Models\Pornstar;
use Faker\Generator as Faker;


class PornstarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pornstar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = new Faker();
        return [
            'firstname'=> $faker->firstName('female'),
            'middlename'=> $faker->middleName('female'),
            'lastname'=>$faker->lastName('female'),
            'gender'=>$faker->gender
        ];
    }
}
