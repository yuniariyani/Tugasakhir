<?php

namespace Database\Factories;

use App\Models\iklim;
use Illuminate\Database\Eloquent\Factories\Factory;

class iklimFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = iklim::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->word,
        'kelompok_tani' => $this->faker->word,
        'komoditas' => $this->faker->word,
        'cuaca' => $this->faker->word,
        'suhu' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
