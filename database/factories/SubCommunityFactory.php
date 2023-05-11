<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCommunity>
 */
class SubCommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $topics = ['Technology', 'Art', 'Sports', 'Health', 'Science', 'Travel', 'Food', 'Fashion', 'Education', 'Music', 'Film', 'Business', 'Politics', 'Environment', 'Culture', 'History', 'Social', 'Entertainment', 'Media', 'Design', 'Gaming', 'Literature', 'Beauty', 'Fitness', 'Photography', 'Comedy', 'Parenting', 'Pets', 'Spirituality', 'Relationships', 'Self-Improvement', 'DIY', 'Crafts', 'Cars', 'Finance', 'Real Estate', 'Home', 'Outdoors', 'Gardening', 'Charity', 'Volunteering', 'Adventure', 'Investing', 'Marketing', 'Law', 'Education', 'Fashion', 'Fitness', 'Travel', 'Business'];
        
        $name = $this->faker->unique()->randomElements($topics, 10);
        
        return [
            'name' => implode(', ', $name),
            'people_with_common_interests' => $this->faker->numberBetween(1, 10000),
        ];
    }
}
