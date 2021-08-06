<?php

namespace Database\Factories;

use App\Models\monitoring_lahan;
use Illuminate\Database\Eloquent\Factories\Factory;

class monitoring_lahanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = monitoring_lahan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'poktan' => $this->faker->word,
        'komoditas' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
