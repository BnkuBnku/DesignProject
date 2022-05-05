<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\receptionist>
 */
class receptionistFactory extends Factory
{

    protected $model = receptionist::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender=['Male','Female'];
        return [
            'Rec_Email' => $this->faker->safeEmail,
            'Rec_Username' => $this->faker->userName,
            'Rec_Lastname' => $this->faker->lastName,
            'Rec_Firstname' => $this->faker->firstName,
            'Rec_Pass' => Hash::make('kakoi'),
            'Rec_Birthday' => $this->faker->date,
            'Rec_Gender' => $gender[random_int(0,1)],
            'Rec_PhoneNum' => $this->faker->phoneNumber,
        ];
    }
}
