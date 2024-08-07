<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $arFaker = \Faker\Factory::create('ar_SA');
        $title = [
            'ar' => $arFaker->realText(50),
            'en' => $this->faker->sentence(),
        ];
        $body = [
            'ar' =>$arFaker->realText(500) . '<br><br>' .$arFaker->realText(500) . '<br><br>' .$arFaker->realText(500),
            'en' => $this->faker->realText(500) . '<br><br>' . $this->faker->realText(500) . '<br><br>' . $this->faker->realText(500),
        ];
        $day = rand(1, 28);
        $month = rand(1, 8);
        $year = rand(2000, 2024);
        $date = \Carbon\Carbon::create($year, $month, $day);

        return [
            'title'             => $title,
            'slug'              => Str::slug($title['en']),
            'body'              => $body,
            'status'            => 'published',
            'published_at'      => $date,
            'scheduled_for'     => null,
            'featured_image_id' => rand(1, 9),
            'is_featured'       => $this->faker->boolean(),
            'category_id'       => rand(1, 3),

            'admin_id' => 1,
        ];
    }
}
