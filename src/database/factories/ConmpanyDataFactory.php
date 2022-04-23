<?php

namespace Database\Factories;

use App\Models\ConmpanyData;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConmpanyDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ConmpanyData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'postlcode' => $this->faker->word,
        'streetaddress' => $this->faker->word,
        'phonenumber' => $this->faker->word,
        'faxnumber' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
