<?php

namespace Database\Factories;

use App\Models\riwayat_penanganan;
use Illuminate\Database\Eloquent\Factories\Factory;

class riwayat_penangananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = riwayat_penanganan::class;

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
        'gejala' => $this->faker->word,
        'jenis_penanganan' => $this->faker->word,
        'deskripsi' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
