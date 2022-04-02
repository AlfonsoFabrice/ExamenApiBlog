<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LLenar base de datos
        $marca = ['Harley Davidson', 'Yamaha', 'Honda', 'Ducati', 'Kawasaki', 'BMW', 'Susuki'];
        $año = [1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007];
        $modelo = ['VR10', 'JS2A', 'SR GT', 'Scout Rouge', 'V85', 'Vitpilen', '300 Really'];

        for($i = 0; $i < 50; $i++){
            DB::table('motos')->insert([
                'marca' => $marca[rand(0,6)],
                'año' => $año[rand(0,8)],
                'modelo' => $modelo[rand(0,6)],
                'imagen' => '',
                'slug' => ''
            ]);
        }
    }
}
