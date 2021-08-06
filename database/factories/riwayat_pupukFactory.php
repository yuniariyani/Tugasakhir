<?php

namespace Database\Factories;

use App\Models\riwayat_pupuk;
use Illuminate\Database\Eloquent\Factories\Factory;

class riwayat_pupukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = riwayat_pupuk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_kelompok' => $this->faker->word,
        'blok_lahan' => $this->faker->word,
        'komoditas' => $this->faker->word,
        'tanggal_pupuk' => $this->faker->word,
        'jenis_pupuk' => $this->faker->word,
        'dosis_pupuk' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
