<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class guruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'name' => $faker->name(),
            'mapel_id'=>Arr::random([1,2,3,4,5,6,7,8,9,10,11,12]),
            'nik' => $faker->randomNumber(5, true),
            'alamat' => $faker->address(),
            'email' => $faker->email(),
            'pw' => $faker->password(4, 5),
            'telp' =>   $faker->phoneNumber(),
            'tgl_lahir' =>  $faker->dateTime(),
            'gender'=>Arr::random(['p','l']),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
    }
}
