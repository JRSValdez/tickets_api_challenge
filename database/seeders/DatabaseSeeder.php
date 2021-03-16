<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Comment;
use App\Models\Priority;
use App\Models\Role;
use App\Models\State;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ROLES
        $roleList = ['Admin', 'User'];
        foreach ($roleList as $role) {
            Role::factory(1)->create(['name' => $role]);
        }

        //STATES
        $statesList = ['Nuevo', 'En Proceso', 'En Espera', 'Resuelto'];
        foreach ($statesList as $state) {
            State::factory(1)->create(['name' => $state]);
        }

        //PRIORITIES
        $priorityList = ['Baja', 'Normal', 'Alta', 'Urgente'];
        foreach ($priorityList as $priority) {
            Priority::factory(1)->create(['name' => $priority]);
        }

        //USER
//        User::factory(10)->create();
        User::factory()->has(
            Ticket::factory()->has(
                Comment::factory()->count(2)
                                    )->count(4)
                            )->create();
    }
}
