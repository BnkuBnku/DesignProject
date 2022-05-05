<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class adminFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender=['Male','Female'];
        return [
            'Admin_Email' => $this->faker->safeEmail,
            'Admin_Username' => $this->faker->userName,
            'Admin_Lastname' => $this->faker->lastName,
            'Admin_Firstname' => $this->faker->firstName,
            'Admin_Pass' => Hash::make('kakoi'),
            'Admin_Birthday' => $this->faker->date,
            'Admin_Gender' => $gender[random_int(0,1)],
            'Admin_PhoneNum' => $this->faker->phoneNumber,

        ];
    }
}
