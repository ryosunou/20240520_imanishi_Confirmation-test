<?php

namespace Database\Factories;

use App\Models\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->random(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['1', '2']),
            'email' => $this->faker->safeEmail,
            'tell' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'building' => $this->faker->streetAddress(),
            'detail' => $this->faker->realText(),

            //
        ];
    }
}
