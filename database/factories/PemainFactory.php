<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pemain;

class PemainFactory extends Factory
{
    protected $model = Pemain::class;

    public function definition()
    {
        return [
            'nama_pemain' => $this->faker->name,
            'no_punggung' => $this->faker->numberBetween(1, 99),
            'posisi' => $this->faker->randomElement(['Penyerang', 'Gelandang', 'Bertahan', 'Penjaga Gawang']),
        ];
    }
}
