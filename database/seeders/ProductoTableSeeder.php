<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
        
            [
                
                'producto'=> 'Agua Purificada',
                'descripcion'=> 'Agua purificada 1l',
                'precio'=> 17.5,
                'existencias'=> 100,
                'fotografia'=>'agua.jpg',
                'tasa_iva'=>16,
        
            ],
            
        ]);
}
}
