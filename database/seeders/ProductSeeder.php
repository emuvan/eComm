<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>'Wonder Woman lynda',
            "price"=>"£10.00",
            "description"=>"70s wonder woman tv show",
            "Category"=>"Action",
            "gallery"=>"https://m.media-amazon.com/images/I/51KD8UOAKuL.jpg"    
            ],
            [
            'name'=>'Batman the animated series',
            "price"=>"£30.00",
            "description"=>"90s classic tv cartton of the dark knight",
            "Category"=>"animated",
            "gallery"=>"https://cdn.hmv.com/r/w-1280/hmv/files/1e/1e21f39e-20b6-470a-8fdd-28ad65e8887a.jpg"     
            ],
            [
            'name'=>'arrow complete series',
            "price"=>"£50.00",
            "description"=>"the complete collection of the arrowverse series arrow",
            "Category"=>"Action",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/A16HuooO3IL._AC_SL1500_.jpg"
            ],
            [
            'name'=>'stargirl season 1',
            "price"=>"£10.00",
            "description"=>"2020 new tv show stargirl in cw",
            "Category"=>"Action",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/A1wK6cXQnLL._AC_SL1500_.jpg"
            ],
            [
            'name'=>'supergirl season 5',
            "price"=>"£10.00",
            "description"=>"arrowverse tv series supergirl season 5",
            "Category"=>"Action",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/91ivboyFXoL._AC_SL1500_.jpg"
            ],
            [
            'name'=>'dc legends of tomorrow season 4',
            "price"=>"£10.00",
            "description"=>"arrowverse tv series dc legends of tomorrow season 4",
            "Category"=>"Action",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/91tf%2Bh4PT4L._AC_SL1500_.jpg"
            ],
            [
            'name'=>'the flash season 1-5',
            "price"=>"£40.00",
            "description"=>"Arrowverse tv show the flash season 1-5",
            "Category"=>"Action",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/81BKreW7BLL._AC_SL1500_.jpg"
            ]
        ]);
    }
}
