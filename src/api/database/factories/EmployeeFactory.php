<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(Employee::class, function (Faker $faker) {
            return [
                'name' => $faker->name,
                'email' => $faker->unique->companyEmail,
                'start_date' => $faker->date,
                'due_date' => $faker->date 
            ];
        });
    }
}
