<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{

    protected $categories = ['PHP', 'Javascript', 'Linux'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->categories as $category)
        {
            Category::create([
                'name' => $category,
            ]);
        }

    }
}
