<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Demographic;

class DemographicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    $demographics=[
        [
            'analysis_parameter' => 'direct reach',
            'men' => '32000',
            'women' => '96000',
            'youth' => '32000',
            'totals' => '160000',
            'area' => 'target',
        ],
        [
            'analysis_parameter' => 'direct reach',
            'men' => '24872',
            'women' => '21634',
            'youth' => '1834',
            'totals' => '53715',
            'area' => 'achieved',
            
        ],
        [
            'analysis_parameter' => 'technology adoption',
            'men' => '3200',
            'women' => '9600',
            'youth' => '3200',
            'totals' => '48000',
            'area' => 'target',
        ],
        [
            'analysis_parameter' => 'technology adoption',
            'men' => '17744',
            'women' => '22727',
            'youth' => '571',
            'totals' => '41219',
            'area' => 'achieved',
            
        ],
                ];
                foreach ($demographics as $demographic) {
                    Demographic::create($demographic);
                }
   
    }


}
