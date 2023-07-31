<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'blog_id' => Blog::all()->random()->id,
            'name' => User::all()->random()->name,
            'body' =>  fake()->paragraph(),
        ];
    }
}
