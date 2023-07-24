<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id'=> Team::factory(),
            'user_id'=> User::factory(),
            'driver_id'=> Driver::factory(),
            'nama' => fake()->name(),
            'tgl_buat' => now(),
            'tgl_temu' => now(),
            'jam' => now(),
            


        ];
    }
}
