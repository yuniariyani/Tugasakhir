<?php

namespace Database\Factories;

use App\Models\monitoring;
use Illuminate\Database\Eloquent\Factories\Factory;

class monitoringFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = monitoring::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->word,
        'Poktan' => $this->faker->word,
        'komoditas' => $this->faker->word,
        'kadar_air' => $this->faker->randomDigitNotNull,
        'suhu_tanah' => $this->faker->randomDigitNotNull,
        'ph' => $this->faker->word,
        'subur' => $this->faker->word,
        'kelembaban' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
