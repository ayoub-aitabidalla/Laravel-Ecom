<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    
    
    public function definition()
    {
        $categoryNames = [
            'Electronics',
            'Books',
            'Clothing',
            'Home & Kitchen',
            'Sports & Outdoors',
            'Health & Beauty',
            'Toys & Games',
            'Automotive',
            'Grocery',
            'Movies & TV',
        ];
        return [
            'name' => $this->faker->unique()->randomElement($categoryNames),
        ];
    }
}
