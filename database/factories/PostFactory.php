<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = str_slug($title);
        return [
            'judul' => $title,
            'slug' => $slug,
            'gambar' => $this->faker->imageUrl(640, 480, 'animals', true),
            'konten' => $this->faker->realText(),
            'draft' => random_int(0, 1),
        ];
    }
}
