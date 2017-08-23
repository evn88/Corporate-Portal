<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['prefix'=>'/phone'],function(){
    Route::get('all', function(){
        $data = [
            [
                'id'=>1,
                'gid'=>3,
                'lastname'=> 'Вершков',
                'firstname'=> 'Егор',
                'secondname'=> 'Николаевич',
                'profession'=> 'Администратор безопасности информационных технологий',
                'filial'=> 'Волгоград',
                'group'=> '***',
                'int_phone'=> '1084',
                'ext_phone'=> '56-20-77',
                's_phone'=> '*163#',
                'photo'=> '/img/avatars/1.jpg',
                'sort'=> '500'
            ],
            [
                'id'=>2,
                'gid'=>3,
                'lastname'=> 'Кравченко',
                'firstname'=> 'Андрей',
                'secondname'=> 'Викторович',
                'profession'=> 'Начальник',
                'filial'=> 'Волгоград',
                'group'=> 'Отдел информационных технологий',
                'int_phone'=> '1084',
                'ext_phone'=> '56-20-77',
                's_phone'=> '*163#',
                'photo'=> '/img/avatars/user.png',
                'sort'=> '500'
            ],
            [
                'id'=>3,
                'gid'=>3,
                'lastname'=> 'Вершкова',
                'firstname'=> 'Анна',
                'secondname'=> 'Александровна',
                'profession'=> 'Лучший в мире верстак',
                'filial'=> 'Волгоград',
                'group'=> 'Отдел информационных технологий',
                'int_phone'=> '666',
                'ext_phone'=> '56-11-77',
                's_phone'=> '*163#',
                'photo'=> '/img/avatars/2.jpg',
                'sort'=> '500'
            ],
            [
                'id'=>3,
                'gid'=>4,
                'lastname'=> 'Якуненко',
                'firstname'=> 'Денис',
                'secondname'=> 'Викторович',
                'profession'=> 'Инженер-программист',
                'filial'=> 'Пригородные МЭС',
                'group'=> 'Отдел информационных технологий',
                'int_phone'=> '2013',
                'ext_phone'=> '',
                's_phone'=> '*163#',
                'photo'=> '/img/avatars/user.png',
                'sort'=> '500'
            ],
            [
                'id'=>4,
                'gid'=>1,
                'lastname'=> 'Воцко',
                'firstname'=> 'Александр',
                'secondname'=> 'Владимирович',
                'profession'=> 'Генеральный директор',
                'filial'=> 'Волгоград',
                'group'=> '',
                'int_phone'=> '1001',
                'ext_phone'=> '48-14-21',
                's_phone'=> '',
                'photo'=> '/img/avatars/user.png',
                'sort'=> '500'
            ],
            [
                'id'=>5,
                'gid'=>1,
                'lastname'=> 'Башмаков',
                'firstname'=> 'Владимир',
                'secondname'=> 'Александрович',
                'profession'=> 'Помощник генерального директора',
                'filial'=> 'Волгоград',
                'group'=> '',
                'int_phone'=> '1017',
                'ext_phone'=> '48-14-32',
                's_phone'=> '',
                'photo'=> '/img/avatars/user.png',
                'sort'=> '500'
            ],
            [
                'id'=>6,
                'gid'=>1,
                'lastname'=> 'Стадник',
                'firstname'=> 'Александр',
                'secondname'=> 'Николаевич',
                'profession'=> 'Заместитель генерального директора по капитальному строительству и общим вопросам',
                'filial'=> 'Волгоград',
                'group'=> '',
                'int_phone'=> '1007',
                'ext_phone'=> '48-14-32',
                's_phone'=> '',
                'photo'=> '/img/avatars/user.png',
                'sort'=> '500'
            ],
            [
                'id'=>7,
                'gid'=>3,
                'lastname'=> 'Филатов',
                'firstname'=> 'Сергей',
                'secondname'=> 'Васильевич',
                'profession'=> 'Ведущий инженер-программист',
                'filial'=> 'Волгоград',
                'group'=> 'Отдел информационных технологий',
                'int_phone'=> '1082',
                'ext_phone'=> '48-14-32',
                's_phone'=> '',
                'photo'=> '/img/avatars/user.png',
                'sort'=> '500'
            ]
        ]
        ;
        return $data;
    });

    Route::get('groups', function(){
        $data = [
            [
                'id'=>0,
                'pid'=>0,
                'name'=> 'ЦРПБ',
            ],
            [
                'id'=>1,
                'pid'=>0,
                'name'=> 'Отдел информационных технологий',
            ],
            [
                'id'=>2,
                'pid'=>0,
                'name'=> 'Администрация',
            ],
            [
                'id'=>3,
                'pid'=>0,
                'name'=> 'Производственно техническая служба',
            ],
            [
                'id'=>4,
                'pid'=>4,
                'name'=> 'Пригородные МЭС',
            ],
            [
                'id'=>5,
                'pid'=>4,
                'name'=> 'Городище',
            ],
            
        ]
        ;
        return $data;
    });

    Route::get('user/{id}', function(){ dd($this); })->where('id', '[0-9]+');
});
