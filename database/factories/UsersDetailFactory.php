<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UsersDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    // make:factory UsersDetailFactory
    // make:model UsersDetail
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'alamat' => $this->faker->address,
            'telepon' => $this->faker->phoneNumber,
            'jenis_kelamin' => 'L'
        ];
    }
    // php artisan db:seed
}
