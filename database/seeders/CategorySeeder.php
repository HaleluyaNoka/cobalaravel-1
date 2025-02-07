<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama_kategori'=>'Web Design',
            'slug'=>'web-design',
            'color'=>'red'
        ]);

        Category::create([
            'nama_kategori'=>'UI/UX',
            'slug'=>'ui-ux',
            'color'=>'green'
        ]);

        Category::create([
            'nama_kategori'=>'Machine Learning',
            'slug'=>'machine-learning',
            'color'=>'blue'
        ]);

        Category::create([
            'nama_kategori'=>'Data Structure',
            'slug'=>'data-structure',
            'color'=>'yellow'
        ]);

        Category::create([
            'nama_kategori'=>'Network Engineering',
            'slug'=>'network-engineering',
            'color'=>'purple'
        ]);
    }
}
