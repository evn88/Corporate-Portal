<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'root',
                'display_name' => 'ROOT',
                'description' => 'Суперпользователь'
            ],
            [
                'name' => 'programmer',
                'display_name' => 'Программист',
                'description' => 'Роль для программистов'
            ],
            [
                'name' => 'telephonist',
                'display_name' => 'Телефонист',
                'description' => 'Роль для телефонистов'
            ],
            [
                'name' => 'dispatcher',
                'display_name' => 'Диспетчер',
                'description' => 'Роль для диспетчеров'
            ],
            [
                'name' => 'news',
                'display_name' => 'Новости',
                'description' => 'Для пользователей которые могут публиковать новости'
            ]
        ];

        foreach ($roles as $key => $value) {
            \App\Role::create($value);
        }
/*
        $admin = new \App\Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();
*/
        $user = \App\User::where('id', '=', '1')->first();

        // role attach alias
        //$user->attachRole('1'); // parameter can be an Role object, array, or id

        // or eloquent's original technique
        $user->roles()->attach('1'); // id only
    }
}