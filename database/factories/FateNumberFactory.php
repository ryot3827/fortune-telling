<?php

namespace Database\Factories;

use App\Models\FateNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

class FateNumberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FateNumber::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fate_number'=>$this->faker->numberBetween(0, 11),
            'content'=>$this->faker->sentence,
        ];
    }
}
