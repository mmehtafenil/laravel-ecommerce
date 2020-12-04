<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Jumpers Men',
                "price"=>"1200",
                "description"=>"Sports winter jumpers for men in multiple colors",
                "category"=>"Clothing",
                "gallery"=>"https://www.techprevue.com/wp-content/uploads/2016/05/online-apparel-business-696x497.jpg"
            ],
            [
                'name'=>'To kill a Mockingbird',
                "price"=>"500",
                "description"=>"A best seller by Harper Lee",
                "category"=>"Books",
                "gallery"=>"https://media.glamour.com/photos/56e1f3c462b398fa64cbd304/master/w_1600%2Cc_limit/entertainment-2016-02-18-main.jpg"
            ],
            [
                'name'=>'RED Scarlet-W 5K camera',
                "price"=>"1200000",
                "description"=>"Best in class camera for videography",
                "category"=>"Camera",
                "gallery"=>"https://www.noypigeeks.com/wp-content/uploads/2017/07/red-scarlet-camera.jpg"
            ],
            [
                'name'=>'Amazon FireTv',
                "price"=>"5000",
                "description"=>"Make your tv smart",
                "category"=>"Entertainment",
                "gallery"=>"https://images.indianexpress.com/2018/12/Amazon_FireTV_BIG.jpg"
            ]
        ]);
    }
}
