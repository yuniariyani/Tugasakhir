<?php

namespace Database\Factories;

use App\Models\hasil_panen;
use Illuminate\Database\Eloquent\Factories\Factory;

class hasil_panenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = hasil_panen::class;

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
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
