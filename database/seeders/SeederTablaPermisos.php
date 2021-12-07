<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregar spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [

            //usuarios
            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuarios',
            //rol
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla de prueba
            'ver-crud',
            'crear-crud',
            'editar-crud',
            'borrar-crud',
            //tipo producto
            'ver-tipoProducto',
            'crear-tipoProducto',
            'editar-tipoProducto',
            'borrar-tipoProducto',
            //color producto
            'ver-colorProducto',
            'crear-colorProducto',
            'editar-colorProducto',
            'borrar-colorProducto',
            //materiales
            'ver-material',
            'crear-material',
            'editar-material',
            'borrar-material',
            //empleados
            'ver-empleado',
            'crear-empleado',
            'editar-empleado',
            'borrar-empleado',
            //catalogo
            'ver-catalogo',
            'crear-catalogo',
            'editar-catalogo',
            'borrar-catalogo',
            //producto
            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',
            //imagen
            'ver-imagen',
            'crear-imagen',
            'editar-imagen',
            'borrar-imagen'


        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
