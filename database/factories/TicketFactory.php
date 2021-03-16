<?php

namespace Database\Factories;

use App\Models\Priority;
use App\Models\State;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'user_id' => User::factory(),
            'state_id' => rand(1,4),
            'priority_id' => rand(1,4)
        ];
    }
}
