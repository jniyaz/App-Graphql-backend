<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Marketing'
        ]);
        Category::create([
            'title' => 'Business'
        ]);
        Category::create([
            'title' => 'Finance'
        ]);
        Category::create([
            'title' => 'Entrepreneurship'
        ]);
        Category::create([
            'title' => 'Science'
        ]);
        Category::create([
            'title' => 'Biography'
        ]);
    }
}
