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
        $data = collect([
            [
                "name" => "Волгоградоблэлекто",
                [
                    "name" => "Волгоград",
                    [
                        "id" => 1
                    ],
                    [
                        "id" => 2
                    ]
                ],
                [
                    "name" => "Городище",
                    [
                        "id" => 3
                    ],
                    [
                        "id" => 4
                    ]
                ]
            ],
            [
                "name" => "Волгоградоблэлектросбыт"
            ]
        ]);
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
