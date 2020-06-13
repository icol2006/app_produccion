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
        DB::table('tipo_producto')->truncate();  
        DB::table('tipo_producto')->truncate(); 
        DB::table('tipo_producto')->truncate();       
        

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
        DB::table('tipo_producto')->insert(['nombre' => "RODILLO", 'descripcion' => "",]);
        DB::table('tipo_producto')->insert(['nombre' => "RUEDA", 'descripcion' => "",]);
        DB::table('tipo_producto')->insert(['nombre' => "FUNDA", 'descripcion' => "",]);

         //Producto
        DB::table('producto')->insert(['nombre' => "Producto 1", 'id_material' => "10",'id_tipo_producto' => "2"]);
        DB::table('producto')->insert(['nombre' => "Producto 2", 'id_material' => "2",'id_tipo_producto' => "1"]);
        DB::table('producto')->insert(['nombre' => "Producto 3", 'id_material' => "4",'id_tipo_producto' => "2"]);
        DB::table('producto')->insert(['nombre' => "Producto 4", 'id_material' => "2",'id_tipo_producto' => "3"]);
        DB::table('producto')->insert(['nombre' => "Producto 5", 'id_material' => "7",'id_tipo_producto' => "3"]);

        //Ordenes Metales
        DB::table('orden_metal')->insert(['id_cliente' => "1", 'id_tipo_servicio' => "1", 'id_producto' => "1", 'descripcion' => "Des 1",
        'piezas_fabricar' => "1", 'horas_teoricas' => "2", 'piezas_reales' => "3", 'fecha_pedido' => "20201010", 'dias_transcurridos' => "4",
        'medidas_1mm' => "3", 'medidas_2mm' => "5", 'medidas_largo' => "3", 'medidas_ancho' => "8", 'medidas_espeso' => "4",'estatus' => "Iniciado"
        ]);

        DB::table('orden_metal')->insert(['id_cliente' => "6", 'id_tipo_servicio' => "1", 'id_producto' => "2", 'descripcion' => "Des 2",
        'piezas_fabricar' => "23", 'horas_teoricas' => "23", 'piezas_reales' => "3", 'fecha_pedido' => "20201011", 'dias_transcurridos' => "4",
        'medidas_1mm' => "34", 'medidas_2mm' => "57", 'medidas_largo' => "33", 'medidas_ancho' => "08", 'medidas_espeso' => "24",'estatus' => "Terminado"
        ]);

        DB::table('orden_metal')->insert(['id_cliente' => "3", 'id_tipo_servicio' => "2", 'id_producto' => "1", 'descripcion' => "Des 3",
        'piezas_fabricar' => "1", 'horas_teoricas' => "2", 'piezas_reales' => "3", 'fecha_pedido' => "20201010", 'dias_transcurridos' => "4",
        'medidas_1mm' => "3", 'medidas_2mm' => "56", 'medidas_largo' => "43", 'medidas_ancho' => "18", 'medidas_espeso' => "4",'estatus' => "Iniciado"
        ]);

        //Ordenes Rodillos
        DB::table('orden_rodillo')->insert(['id_cliente' => "1", 'id_tipo_servicio' => "2",'id_producto' => "3",
        'descripcion' => "Desc 1", 'piezas_fabricar' => "2",'fecha_pedido' => "2020128", 
        'fecha_comprom' => "20220312", 'fecha_termino_produccion' => "20240812",'fecha_pedido' => "20201211", 
        'tiempo_respuesta' => "1", 'estatus' => "Iniciado", 
        ]);
        DB::table('orden_rodillo')->insert(['id_cliente' => "4", 'id_tipo_servicio' => "4",'id_producto' => "1",
        'descripcion' => "Desc 2", 'piezas_fabricar' => "2",'fecha_pedido' => "2020121",
        'fecha_comprom' => "20270512", 'fecha_termino_produccion' => "20211012",'fecha_pedido' => "20210802", 
        'tiempo_respuesta' => "1", 'estatus' => "Terminado", 
        ]);
        DB::table('orden_rodillo')->insert(['id_cliente' => "5", 'id_tipo_servicio' => "6",'id_producto' => "2",
        'descripcion' => "Desc 3", 'piezas_fabricar' => "2",'fecha_pedido' => "2020127",
        'fecha_comprom' => "20221012", 'fecha_termino_produccion' => "20210302",'fecha_pedido' => "20201217", 
        'tiempo_respuesta' => "1", 'estatus' => "Iniciado", 
        ]);

    }
}
