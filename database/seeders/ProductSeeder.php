<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>"i Phone Mobile",
            'price'=>'50000',
            'description'=>'High performance and 28GB RAM and more features',
            'category'=>'Mobile',
            'gallery'=>'https://cdn.pixabay.com/photo/2015/01/29/11/36/mobile-616012__340.jpg'
            ],
            ['name'=>"Nokia Mobile",
            'price'=>'18000',
            'description'=>'High performance and 4GB RAM',
            'category'=>'Mobile',
            'gallery'=>'https://cdn.pixabay.com/photo/2017/06/19/07/37/agenda-2418401__340.jpg'
            ],
            ['name'=>"Sumsung Mobile",
            'price'=>'27000',
            'description'=>'Best processor 16GB RAM',
            'category'=>'Mobile',
            'gallery'=>'https://cdn.pixabay.com/photo/2014/10/02/16/31/media-470346__340.png'
            ],
            ['name'=>"Oppo Mobile",
            'price'=>'25000',
            'description'=>'Very new and offers the best',
            'category'=>'Mobile',
            'gallery'=>'https://cdn.pixabay.com/photo/2015/03/19/22/31/phone-681482__340.png'
            ],
            ['name'=>"i Phone6 Mobile",
            'price'=>'35000',
            'description'=>'Best service ever and 16GB RAM',
            'category'=>'Mobile',
            'gallery'=>'https://cdn.pixabay.com/photo/2015/05/11/07/10/iphone-762044__340.jpg'
            ]
        ]);   
    }
}
