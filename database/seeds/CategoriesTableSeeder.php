<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('discipline');

        $categories_list = $data['categories'];

        foreach ($categories_list as $category) {
            $new_category = new Category();
            $new_category->name = $category['name'];
            $new_category->disciplina = $category['discipline'];
            $new_category->genere = $category['genre'];
            $new_category->save();
        }
    }
}
