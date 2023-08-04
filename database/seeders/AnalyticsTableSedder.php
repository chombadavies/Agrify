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
                'param' => 'Technology adoption',
                'target' => '960',
                'achieved' => '6037',
                'description' => 'men',
            ],
            [
                'param' => 'Technology adoption',
                'target' => '960',
                'achieved' => '2563',
                'description' => 'youth',
            ],

            //value chain
            [
                'param' => 'Avocado',
                'target' => '0',
                'achieved' => '249005375',
                'description' => 'income',
            ],
            [
                'param' => 'Bean',
                'target' => '0',
                'achieved' => '234524900',
                'description' => 'income',
            ],
            [
                'param' => 'Camel Milk',
                'target' => '0',
                'achieved' => '16250000',
                'description' => 'income',
            ],
            [
                'param' => 'Cashewnut',
                'target' => '0',
                'achieved' => '630000',
                'description' => 'income',
            ],

            [
                'param' => 'Cowpea',
                'target' => '0',
                'achieved' => '0',
                'description' => 'income',
            ],
            [
                'param' => '0',
                'target' => '3200',
                'achieved' => '17744',
                'description' => 'men',
            ],
            [
                'param' => 'Galla Goat',
                'target' => '0',
                'achieved' => '47242500',
                'description' => 'income',
            ],
            [
                'param' => 'Grain Amaranth',
                'target' => '0',
                'achieved' => '13634850',
                'description' => 'income',
            ],
            [
                'param' => 'Green Gram',
                'target' => '0',
                'achieved' => '26950000',
                'description' => 'income',
            ],
            [
                'param' => 'KIIC',
                'target' => '0',
                'achieved' => '142955715',
                'description' => 'income',
            ],
            [
                'param' => 'Mango',
                'target' => '0',
                'achieved' => '13056975',
                'description' => 'income',
            ],

            [
                'param' => 'Pasture Grass',
                'target' => '0',
                'achieved' => '15057640',
                'description' => 'income',
            ],
            [
                'param' => 'Sorgum',
                'target' => '0',
                'achieved' => '15057640',
                'description' => 'income',
            ],

                    ];
                    foreach ($analytics as $analytic) {
                        Analytics::create($analytic);
                    }
       
    }
}
