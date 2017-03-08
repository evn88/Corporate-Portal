<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Вершков Егор',
                'email' => 'e.vershkov@voel.ru',
                'password' => '$2y$10$pNUwGfpGH780tje6AjMNxeLbWyEKv/v9FBdV/YYYOk/SvzkJKo6fW',
                'isAdmin' => '1'
            ],
            [
                'name' => 'Попова Екатерина',
                'email' => 'evn88@ya.ru',
                'password' => '$10$3F0Gi32Q1vEddm/11e5KW.q3XyB5V50yJC1JJX2Y7rYZA2uPijFwS',
                'isAdmin' => '0'
            ],
            [
                'name' => 'Попов Павел',
                'email' => 'popov@voel.ru',
                'password' => '$2y$10$pNUwGfpGH780tje6AjMNxeLbWyEKv/v9FBdV/YYYOk/SvzkJKo6fW',
                'isAdmin' => '0'
            ],
        ];

        foreach ($users as $key => $value) {
            \App\User::create($value);
        }
    }
}
