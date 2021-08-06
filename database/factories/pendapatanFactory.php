<?php

namespace Database\Factories;

use App\Models\pendapatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class pendapatanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pendapatan::class;

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
        'jumlah_berhasil' => $this->faker->randomDigitNotNull,
        'jumlah_gagal' => $this->faker->randomDigitNotNull,
        'satuan' => $this->faker->word,
        'tanggal_panen' => $this->faker->word,
        'pendapatan' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
