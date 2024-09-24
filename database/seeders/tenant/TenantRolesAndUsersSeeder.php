<?php

namespace Database\Seeders\tenant;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TenantRolesAndUsersSeeder extends Seeder
{
    public function run()
    {
        // Crear los roles para el tenant
        $roles = ['admin', 'usuario', 'validador'];

        foreach ($roles as $roleName) {
            // Crear el rol si no existe
            $role = Role::firstOrCreate(['name' => $roleName]);

            // Crear un usuario para cada rol
            $user = User::create([
                'name' => ucfirst($roleName) . ' Tenant', // Asigna un nombre basado en el rol
                'email' => $roleName . '@tenant.com',    // Email único para cada rol
                'password' => bcrypt('123456789'),     // Contraseña genérica, puedes cambiarla
            ]);

            // Asignar el rol al usuario
            $user->assignRole($role);
        }
    }
}
