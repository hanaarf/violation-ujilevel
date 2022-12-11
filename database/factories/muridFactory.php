<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as faker;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\murid>
 */
class muridFactory extends Factory
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
            'kelas_id'=>Arr::random([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32]),
            'nisn' => $faker->randomNumber(5, true),
            'alamat' => $faker->address(),
            'email' => $faker->email(),
            'pw' => $faker->password(4, 5),
            'telp' =>   $faker->phoneNumber(),
            'tgl_lahir' =>  $faker->dateTime(),
            'gender'=>Arr::random(['p','l']),
            'point'=>Arr::random([0]),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
    }
}
