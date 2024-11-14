<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class dumalag_semis extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=>'school_admin']);
        Role::create(['name'=>'registrar']);
        Role::create(['name'=>'faculty']);
    }
}
