<?php

namespace Database\Factories;

use App\Models\TaskItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskItem>
 */
class TaskItemFactory extends Factory
{
    protected $model = TaskItem::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'completed_flag' => $this->faker->boolean()
        ];
    }
}
