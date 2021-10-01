<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($message), //Generates a fake sentence
            'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
            'id' => UserFactory::factory() //Generates a User from factory and extracts id
            //
        ];
    }
}
