<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        DB::table('cliente')->truncate();
        DB::table('tipo_servicio')->truncate();
        DB::table('material')->truncate();
        DB::table('estatus')->truncate();
        DB::table('tipo_material')->truncate();        
        

        // $this->call(UserSeeder::class);

        //Clientes
        DB::table('cliente')->insert(['nombre' => "PRINTPACK", 'email' => "PRINTPACK@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "SERGIO MARTINEZ", 'email' => "SERGIO@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "PADI", 'email' => "PADI@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "ETIQUETAS JALISCO", 'email' => "JALISCO@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "PLASTICOL", 'email' => "PLASTICOL@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "POLIFLEX", 'email' => "POLIFLEX@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "CRISTINA MARTINEZ", 'email' => "CRISTINAMARTINEZ@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "EMPAQUES THERMOFORMADOS", 'email' => "EMPAQUESTHERMOFORMADOSemail"]);
        DB::table('cliente')->insert(['nombre' => "SOLUCIONES SUSTENTABLES", 'email' => "SOLUCIONESSUSTENTABLES@gmail.com"]);
        DB::table('cliente')->insert(['nombre' => "POLIPACK", 'email' => "POLIPACK@gmail.com"]);

        //Tipo servicio
        DB::table('tipo_servicio')->insert(['nombre' => "REVISIÓN", 'descripcion' => "",]);
        DB::table('tipo_servicio')->insert(['nombre' => "REBAJAR METAL", 'descripcion' => "",]);
        DB::table('tipo_servicio')->insert(['nombre' => "FABRICACION Y RECUBRIMIENTO", 'descripcion' => "",]);
        DB::table('tipo_servicio')->insert(['nombre' => "INJERTO ESPIGA", 'descripcion' => "",]);
        DB::table('tipo_servicio')->insert(['nombre' => "REPARACION ESPIGA", 'descripcion' => "",]);
        DB::table('tipo_servicio')->insert(['nombre' => "AJUSTE DE BALERO", 'descripcion' => "",]);

        //Material
        DB::table('material')->insert(['nombre' => "BARNIZ UV", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "IMPRESIÓN", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "HEXH", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "LAMINACION", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "NITRILO", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "JALADOR", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "HRURMOL", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "HRSIL", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "SILICON", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "YPMOJ", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "HRHYP", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "HRPOLVAC", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "EPDM", 'descripcion' => "",]);
        DB::table('material')->insert(['nombre' => "APLICACIÓN UV", 'descripcion' => "",]);

        //Tipo Material
        DB::table('tipo_material')->insert(['nombre' => "RODILLO", 'descripcion' => "",]);
        DB::table('tipo_material')->insert(['nombre' => "RUEDA", 'descripcion' => "",]);
        DB::table('tipo_material')->insert(['nombre' => "FUNDA", 'descripcion' => "",]);

        //Estatus
        DB::table('estatus')->insert(['nombre' => "NO INICIADO", 'descripcion' => "",]);
        DB::table('estatus')->insert(['nombre' => "TERMINADO", 'descripcion' => "",]);
        DB::table('estatus')->insert(['nombre' => "CANCELADO", 'descripcion' => "",]);
    }
}
