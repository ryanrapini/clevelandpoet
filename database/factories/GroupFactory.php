<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 1;
        $this->faker->addProvider(new \App\Faker\JoinCodeProvider($this->faker));

        return [
            'name' => 'Group ' . $number++,
            'join_code' => $this->faker->unique()->joinCode(),
            'is_joinable' => $this->faker->boolean(80),
        ];
    }
}
