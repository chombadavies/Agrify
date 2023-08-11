<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Analytics;

class AnalyticsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $analytics=[
            [
                'param' => 'direct reach',
                'target' => '160000',
                'achieved' => '53634',
                'description' => 'totals',
            ],
            [
                'param' => 'direct reach',
                'target' => '96000',
                'achieved' => '21634',
                'description' => 'women',
            ],
            [
                'param' => 'direct reach',
                'target' => '32000',
                'achieved' => '24872',
                'description' => 'men',
            ],
            [
                'param' => 'direct reach',
                'target' => '32000',
                'achieved' => '1834',
                'description' => 'youth',
            ],

//tech

            [
                'param' => 'Technology adoption',
                'target' => '48000',
                'achieved' => '41219',
                'description' => 'totals',
            ],
            [
                'param' => 'Technology adoption',
                'target' => '9600',
                'achieved' => '22727',
                'description' => 'women',
            ],
            [
                'param' => 'Technology adoption',
                'target' => '3200',
                'achieved' => '17744',
                'description' => 'men',
            ],
            [
                'param' => 'Technology adoption',
                'target' => '3200',
                'achieved' => '571',
                'description' => 'youth',
            ],

            //finance
            [
                'param' => 'Finance Linkage',
                'target' => '4800',
                'achieved' => '23573',
                'description' => 'totals',
            ],
            [
                'param' => 'Finance Linkage',
                'target' => '2880',
                'achieved' => '13474',
                'description' => 'women',
            ],
            [
                'param' => 'Finance Linkage',
                'target' => '960',
                'achieved' => '6037',
                'description' => 'men',
            ],
            [
                'param' => 'Finance Linkage',
                'target' => '960',
                'achieved' => '2563',
                'description' => 'youth',
            ],
   //market
   [
    'param' => 'market_linkage',
    'target' => '48000',
    'achieved' => '23573',
    'description' => 'totals',
],
        [
            'param' => 'market_linkage',
            'target' => '28800',
            'achieved' => '13474',
            'description' => 'women',
        ],
        [
            'param' => 'market_linkage',
            'target' => '9600',
            'achieved' => '6037',
            'description' => 'men',
        ],
        [
            'param' => 'market_linkage',
            'target' => '9600',
            'achieved' => '2563',
            'description' => 'youth',
        ],

            //value chain
            [
                'valuechain' => 'Avocado',
                'income' => '249005375',
                'upscalling' => '1',
                'research' => '0',
            ],
            [
                'valuechain' => 'Bean',
                'income' => '234524900',
                'upscalling' => '5',
                'research' => '0',
            ],
            [
                'valuechain' => 'Camel Milk',
                'income' => '16250000',
                'upscalling' => '3',
                'research' => '0',
            ],
            [
                'valuechain' => 'Cashewnut',
                'income' => '630000',
                'upscalling' => '1',
                'research' => '4',
            ],

            [
                'valuechain' => 'Cowpea',
                'income' => '0',
                'upscalling' => '1',
                'research' => '2',
            ],
            [
                'valuechain' => 'Fish',
                'income' => '60000',
                'upscalling' => '4',
                'research' => '1',
            ],
          
            [
                'valuechain' => 'Galla Goat',
                'income' => '47242500',
                'upscalling' => '3',
                'research' => '1',
            ],
            [
                'valuechain' => 'Grain Amaranth',
                'income' => '13634850',
                'upscalling' => '3',
                'research' => '1',
            ],
            [
                'valuechain' => 'Green Gram',
                'income' => '26950000',
                'upscalling' => '2',
                'research' => '1',
            ],
            [
                'valuechain' => 'KIIC',
                'income' => '142955715',
                'upscalling' => '7',
                'research' => '3',
            ],
            [
                'valuechain' => 'Mango',
                'income' => '13056975',
                'upscalling' => '2',
                'research' => '1',
            ],

            [
                'valuechain' => 'Pasture Grass',
                'income' => '15057640',
                'upscalling' => '2',
                'research' => '3',
            ],
            [
                'valuechain' => 'Sorgum',
                'income' => '354270',
                'upscalling' => '4',
                'research' => '1',
            ],

                    ];
                    foreach ($analytics as $analytic) {
                        Analytics::create($analytic);
                    }
       
    }
}
