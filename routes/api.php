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
        $data = collect(
            [
            "Волгоградоблэлектро" => [
                "Волгоград" => [
                    "Администрация" => [
                        [
                            'id'=>1,
                            'gid'=>2,
                            'lastname'=> 'Вершков',
                            'firstname'=> 'Егор',
                            'secondname'=> 'Николаевич',
                            'profession'=> 'Администратор безопасности информационных технологий',
                            'int_phone'=> '1084',
                            'ext_phone'=> '56-20-77',
                            's_phone'=> '*163#',
                            'photo'=> '/img/avatars/1.jpg',
                            'order'=> '110'
                        ],
                        [
                            'id'=>3,
                            'gid'=>2,
                            'lastname'=> 'Вершкова',
                            'firstname'=> 'Анна',
                            'secondname'=> 'Александровна',
                            'profession'=> 'web',
                            'filial'=> 'Волгоград',
                            'group'=> 'Отдел информационных технологий',
                            'int_phone'=> '666',
                            'ext_phone'=> '56-11-77',
                            's_phone'=> '*163#',
                            'photo'=> '/img/avatars/2.jpg',
                            'order'=> '100'
                        ]
                    ],
                        "Администрация" => [
                            [
                                'id'=>1,
                                'gid'=>2,
                                'lastname'=> 'Вершков',
                                'firstname'=> 'Егор',
                                'secondname'=> 'Николаевич',
                                'profession'=> 'Администратор безопасности информационных технологий',
                                'int_phone'=> '1084',
                                'ext_phone'=> '56-20-77',
                                's_phone'=> '*163#',
                                'photo'=> '/img/avatars/1.jpg',
                                'order'=> '110'
                            ],
                            [
                                'id'=>3,
                                'gid'=>2,
                                'lastname'=> 'Вершкова',
                                'firstname'=> 'Анна',
                                'secondname'=> 'Александровна',
                                'profession'=> 'web',
                                'filial'=> 'Волгоград',
                                'group'=> 'Отдел информационных технологий',
                                'int_phone'=> '666',
                                'ext_phone'=> '56-11-77',
                                's_phone'=> '*163#',
                                'photo'=> '/img/avatars/2.jpg',
                                'order'=> '100'
                            ]
                        ]
                ],
                "Пригородные МЭС" => [
                    "Городище" => [
                        [
                            'id'=>1,
                            'gid'=>2,
                            'lastname'=> 'Писюков',
                            'firstname'=> 'Александр',
                            'secondname'=> 'Михайлович',
                            'profession'=> 'Писюкатый писюкан',
                            'int_phone'=> '1084',
                            'ext_phone'=> '56-20-77',
                            's_phone'=> '*163#',
                            'photo'=> '/img/avatars/1.jpg',
                            'order'=> '110'
                        ],
                        [
                        'id' => 2,
                        'name' => 'test2'
                        ],
                    ],
                    "Гумракский участок" =>[
                        [
                        'id' => 1,
                        'name' => 'test'
                        ],
                        [
                        'id' => 2,
                        'name' => 'test2'
                        ],
                    ], 
                ],
            ],
            "Волгоградоблэлектросбыт" => [
                "Волгоград" => [
                    "Администрация" => [
                        [
                            'id'=>1,
                            'gid'=>2,
                            'lastname'=> 'Хрюков',
                            'firstname'=> 'Николай',
                            'secondname'=> 'Валентинович',
                            'profession'=> 'Администратор поросячих дел',
                            'int_phone'=> '1084',
                            'ext_phone'=> '56-20-77',
                            's_phone'=> '*163#',
                            'photo'=> '/img/avatars/1.jpg',
                            'order'=> '110'
                        ],
                        [
                            'id'=>3,
                            'gid'=>2,
                            'lastname'=> 'Попкова',
                            'firstname'=> 'Маша',
                            'secondname'=> 'Александровна',
                            'profession'=> 'web',
                            'filial'=> 'Волгоград',
                            'group'=> 'Отдел информационных технологий',
                            'int_phone'=> '666',
                            'ext_phone'=> '56-11-77',
                            's_phone'=> '*163#',
                            'photo'=> '/img/avatars/2.jpg',
                            'order'=> '100'
                        ]
                    ]
                ]
            ]
        ]
        );
        $sorted = $data->sortBy('order');
        return  $sorted->toJson();
    });

    Route::get('groups', function(){
        $data = collect([
            [
                'id'=>1,
                'pid'=>NULL,
                'name'=> 'ЦРПБ',
                'order' => 100
            ],
            [
                'id'=>2,
                'pid'=>1,
                'name'=> 'Отдел информационных технологий',
                'order' => 400
            ],
            [
                'id'=>3,
                'pid'=>1,
                'name'=> 'Администрация',
                'order' => 90
            ],
            [
                'id'=>4,
                'pid'=>1,
                'name'=> 'Производственно техническая служба',
                'order' => 500
            ],
            [
                'id'=>5,
                'pid'=>NULL,
                'name'=> 'Пригородные МЭС',
                'order' => 500
            ],
            [
                'id'=>6,
                'pid'=>5,
                'name'=> 'Городище',
                'order' => 500
            ],
            
        ]);
        $sorted = $data->sortBy('order');
        return  $sorted->values()->all();
    });

    Route::get('user/{id}', function(){ dd($this); })->where('id', '[0-9]+');
});
