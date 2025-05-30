<?php

namespace Database\Factories;

use App\Models\ProfessionCategory;
use App\Models\Student;
use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlumniSurvey>
 */
class AlumniSurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_nim' => Student::inRandomOrder()->first()->nim,
            'profession_id' => Profession::inRandomOrder()->first()->id,
            'profession_category_id' => ProfessionCategory::inRandomOrder()->first()->id,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'first_work_date' => $this->faker->dateTimeBetween('-4 years', 'now'),
            'waiting_period' => $this->faker->numberBetween(0, 12),
            'institution_type' => $this->faker->randomElement(['Pemerintah', 'Swasta', 'BUMN', 'Lainnya']),
            'institution_name' => $this->faker->company,
            'institution_location' => $this->faker->city,
            'first_institution_work_date' => $this->faker->dateTimeBetween('-4 years', 'now'),
            'supervisor_name' => $this->faker->name,
            'supervisor_position' => $this->faker->jobTitle,
            'supervisor_email' => $this->faker->safeEmail,
        ];
    }
}
