<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Category::create(['name' => '食費']);   
        Category::create(['name' => '日用品']);
        Category::create(['name' => '交通費']);
        Category::create(['name' => '水道代']);
        Category::create(['name' => '電気代']);
        Category::create(['name' => '光熱費']);
        Category::create(['name' => '通信費']);
        Category::create(['name' => '固定費']);
    }
}