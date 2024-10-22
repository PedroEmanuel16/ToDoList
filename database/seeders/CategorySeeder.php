<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Categoria1',
            'user_id' => 1
        ]);
        Category::create([
            'title' => 'Categoria2',
            'user_id' => 1
        ]);
        Category::create([
            'title' => 'Categoria3',
            'user_id' => 1
        ]);
    }
}
