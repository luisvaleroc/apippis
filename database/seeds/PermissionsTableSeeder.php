<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);
        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);


         //locales
        Permission::create([
            'name'          => 'Navegar local',
            'slug'          => 'stores.index',
            'description'   => 'Lista y navega todos los locales del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de un local',
            'slug'          => 'stores.show',
            'description'   => 'Ve en detalle cada local del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de local',
            'slug'          => 'stores.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de local',
            'slug'          => 'stores.edit',
            'description'   => 'Podría editar cualquier dato de un local del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar local',
            'slug'          => 'stores.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

        
         //brands
         Permission::create([
            'name'          => 'Navegar Emoresa',
            'slug'          => 'brands.index',
            'description'   => 'Lista y navega todos las empresas del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de una empresa',
            'slug'          => 'brands.show',
            'description'   => 'Ve en detalle cada local del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de una empresa',
            'slug'          => 'brands.create',
            'description'   => 'Podría crear nuevas empresas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de empresa',
            'slug'          => 'brands.edit',
            'description'   => 'Podría editar cualquier dato de una empresa del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar empresa',
            'slug'          => 'brands.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

            // //brands
            // Permission::create([
            //     'name'          => 'Navegar Emoresa',
            //     'slug'          => 'brands.index',
            //     'description'   => 'Lista y navega todos las empresas del sistema',
            // ]);
            // Permission::create([
            //     'name'          => 'Ver detalle de una empresa',
            //     'slug'          => 'brands.show',
            //     'description'   => 'Ve en detalle cada local del sistema',            
            // ]);
            
            // Permission::create([
            //     'name'          => 'Creación de una empresa',
            //     'slug'          => 'brands.create',
            //     'description'   => 'Podría crear nuevas empresas en el sistema',
            // ]);
            
            // Permission::create([
            //     'name'          => 'Edición de empresa',
            //     'slug'          => 'brands.edit',
            //     'description'   => 'Podría editar cualquier dato de una empresa del sistema',
            // ]);
            
            // Permission::create([
            //     'name'          => 'Eliminar roles',
            //     'slug'          => 'brands.destroy',
            //     'description'   => 'Podría eliminar cualquier rol del sistema',      
            // ]);

             //rooms
             Permission::create([
                'name'          => 'Navegar Salas',
                'slug'          => 'rooms.index',
                'description'   => 'Lista y navega todas las salas del sistema',
            ]);
            Permission::create([
                'name'          => 'Ver detalle de una sala',
                'slug'          => 'rooms.show',
                'description'   => 'Ve en detalle cada sala del sistema',            
            ]);
            
            Permission::create([
                'name'          => 'Creación de una sala',
                'slug'          => 'rooms.create',
                'description'   => 'Podría crear nuevas salas en el sistema',
            ]);
            
            Permission::create([
                'name'          => 'Edición de sala',
                'slug'          => 'rooms.edit',
                'description'   => 'Podría editar cualquier dato de una sala del sistema',
            ]);
            
            Permission::create([
                'name'          => 'Eliminar sala',
                'slug'          => 'rooms.destroy',
                'description'   => 'Podría eliminar cualquier sala del sistema',      
            ]);

            
             //employees
             Permission::create([
                'name'          => 'Navegar empleados',
                'slug'          => 'employees.index',
                'description'   => 'Lista y navega todos los empleados del sistema',
            ]);
            Permission::create([
                'name'          => 'Ver detalle de un empleado',
                'slug'          => 'employees.show',
                'description'   => 'Ve en detalle cada empleado del sistema',            
            ]);
            
            Permission::create([
                'name'          => 'Creación de un empleado',
                'slug'          => 'employees.create',
                'description'   => 'Podría crear nuevos empleados en el sistema',
            ]);
            
            Permission::create([
                'name'          => 'Edición de un empleado',
                'slug'          => 'employees.edit',
                'description'   => 'Podría editar cualquier dato de un empleado del sistema',
            ]);
            
            Permission::create([
                'name'          => 'Actualizar empleado',
                'slug'          => 'employees.update',
                'description'   => 'Podría eliminar cualquier empleado del sistema',      
            ]);

             //solidwastes
             Permission::create([
                'name'          => 'Navegar desechos solidos',
                'slug'          => 'solidwastes.index',
                'description'   => 'Lista y navega todos los desechos solidos del sistema',
            ]);
            Permission::create([
                'name'          => 'Ver detalle de un desecho solido',
                'slug'          => 'solidwastes.show',
                'description'   => 'Ve en detalle cada desecho solido del sistema',            
            ]);
            
            Permission::create([
                'name'          => 'Creación de un desecho solido',
                'slug'          => 'solidwastes.create',
                'description'   => 'Podría crear nuevos desechos solidos en el sistema',
            ]);
            
            Permission::create([
                'name'          => 'Edición de un desecho solido',
                'slug'          => 'solidwastes.edit',
                'description'   => 'Podría editar cualquier dato de un desecho solido del sistema',
            ]);
            
            Permission::create([
                'name'          => 'Eliminar desecho solido',
                'slug'          => 'solidwastes.destroy',
                'description'   => 'Podría eliminar cualquier desecho solido del sistema',      
            ]);

                 //cleanings
                 Permission::create([
                    'name'          => 'Navegar salud e higiene personal',
                    'slug'          => 'cleanings.index',
                    'description'   => 'Lista y navega todas las planillas de salud e higiene personal del sistema',
                ]);
                Permission::create([
                    'name'          => 'Ver detalle de una planilla de salud e higiene personal',
                    'slug'          => 'cleanings.show',
                    'description'   => 'Ve en detalle cada planilla de salud e hiene personal del sistema',            
                ]);
                
                Permission::create([
                    'name'          => 'Creación de una planilla de salud e higiene personal',
                    'slug'          => 'cleanings.create',
                    'description'   => 'Podría crear nuevas planillas de salud e higiene personal en el sistema',
                ]);
                
                Permission::create([
                    'name'          => 'Edición de salud e higiene personal',
                    'slug'          => 'cleanings.edit',
                    'description'   => 'Podría editar cualquier dato de una planilla de salud e higiene del sistema',
                ]);
                
                Permission::create([
                    'name'          => 'Eliminar salud e higiene personal',
                    'slug'          => 'cleanings.destroy',
                    'description'   => 'Podría eliminar cualquier planilla de salud e higiene personal del sistema',      
                ]);


                      //plants
                      Permission::create([
                        'name'          => 'Navegar limpieza y sanitización',
                        'slug'          => 'plants.index',
                        'description'   => 'Lista y navega todas las planillas de limpieza y sanitizacion del sistema',
                    ]);
                    Permission::create([
                        'name'          => 'Ver detalle limpieza y sanitización',
                        'slug'          => 'plants.show',
                        'description'   => 'Ve en detalle cada planilla limpieza y sanitización del sistema',            
                    ]);
                    
                    Permission::create([
                        'name'          => 'Creación de limpieza y sanitización',
                        'slug'          => 'plants.create',
                        'description'   => 'Podría crear nuevas planillas de limpieza y sanitización en el sistema',
                    ]);
                    
                    Permission::create([
                        'name'          => 'Edición de limpieza y sanitizacón',
                        'slug'          => 'plants.edit',
                        'description'   => 'Podría editar cualquier dato de una planilla de limpieza y sanitizacion del sistema',
                    ]);
                    
                    Permission::create([
                        'name'          => 'Eliminar limpieza y sanitizacón',
                        'slug'          => 'plants.destroy',
                        'description'   => 'Podría eliminar cualquier planilla de limpieza y sanitizacón del sistema',      
                    ]);

//brandusers
Permission::create([
    'name'          => 'Navegar usuarios empresas',
    'slug'          => 'brandusers.index',
    'description'   => 'Lista y navega todos los usuarios dentro de una empresa',
]);
Permission::create([
    'name'          => 'Ver detalle usuarios empresas',
    'slug'          => 'brandusers.show',
    'description'   => 'Ve en detalle cada usuario dentro de una empresa',            
]);

Permission::create([
    'name'          => 'Creación de usuarios empresas',
    'slug'          => 'brandusers.create',
    'description'   => 'Podría crear nuevos usuarios dentro de una empresa',
]);

Permission::create([
    'name'          => 'Edición de usuarios empresas',
    'slug'          => 'brandusers.edit',
    'description'   => 'Podría editar cualquier dato de un empleado dentro de una empresa',
]);

Permission::create([
    'name'          => 'Eliminar usuarios empresas',
    'slug'          => 'brandusers.destroy',
    'description'   => 'Podría eliminar cualquier usuario dentro de una empresa',      
]);

    }
}



