<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('clientes')->insert([
        
        [
            
            'razon_social'=> 'nike',
            'rfc'=> 'NI1204376SN',
            'representante'=> 'Pablo Luis Mendez',
            'numero_celular'=> '7221345332',
            'estatus'=>'activo',
    
        ],
        
        [
            
            'razon_social'=> 'adidas',
            'rfc'=> 'AD1204377SS',
            'representante'=> 'Jose Luis Castañeda',
            'numero_celular'=> '7221345327',
            'estatus'=>'activo',
    
        ],
    ]);
    
        
    }
}
