<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Iphone 12 pro',
            'price'=>'3200',
            'category'=>"mobiles",
            'descreption'=>"A smartphone which has 4gb ram ana wonderful features",
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71nARPST37L._AC_SX425_.jpg'

        ]);
    }
}
