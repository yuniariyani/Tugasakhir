<?php

namespace Database\Factories;

use App\Models\masalah;
use Illuminate\Database\Eloquent\Factories\Factory;

class masalahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = masalah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'komoditas' => $this->faker->word,
        'blok' => $this->faker->word,
        'tanggal' => $this->faker->word,
        'masalah_lahan' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
