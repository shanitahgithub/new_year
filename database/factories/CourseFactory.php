<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->word,
        'programme_type' => $this->faker->word,
        'duration' => $this->faker->randomDigitNotNull,
        'core_courses' => $this->faker->word,
        'course_units' => $this->faker->word,
        'admission_requirements' => $this->faker->word,
        'fees' => $this->faker->randomDigitNotNull,
        'category' => $this->faker->word,
        'credit_units' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
