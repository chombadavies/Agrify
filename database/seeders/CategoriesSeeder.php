<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $category=Category::create(
            [
                'title' => 'crops',
            ]);
            $category=Category::create(
                [
                    'title' => 'livestock',
                ]);
                $category=Category::create(
                    [
                        'title' => 'aquaculture',
                    ]);
                    $category=Category::create(
                        [
                            'title' => 'apiculture',
                        ]);
    }
}
