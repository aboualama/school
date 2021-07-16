<?php

namespace Database\Factories;

use App\Models\OtherSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class OtherSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OtherSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'agents' => $this->faker->randomDigit,
            'administrators' => $this->faker->randomDigit,
            'teachers' => $this->faker->randomDigit,
            'users' => $this->faker->randomDigit,
            'guards' => $this->faker->randomDigit,
            'primary_no' => $this->faker->randomDigit,
            'middle_no' => $this->faker->randomDigit,
            'secondary_no' => $this->faker->randomDigit,
            'year_id' => $this->faker->randomElement(['1' ,'2', '3']), 
        ];
    }
}  