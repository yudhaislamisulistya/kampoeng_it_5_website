<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::group(['prefix' => 'kompetisi'], function () {
    Route::get('/uiuxcompetition', function () {
        return view('uiuxcompetition');
    })->name('uiuxcompetition');

    Route::get('/networkcompetition', function () {
        return view('networkcompetition');
    })->name('networkcompetition');

    Route::get('/iotcompetition', function () {
        return view('iotcompetition');
    })->name('iotcompetition');

    Route::get('/competitiveprogramming', function () {
        return view('competitiveprogramming');
    })->name('competitiveprogramming');

    Route::get('/desaingrafis', function () {
        return view('desaingrafis');
    })->name('desaingrafis');

    Route::get('/linefollowers', function () {
        return view('linefollowers');
    })->name('linefollowers');

    Route::get('/lkti', function () {
        return view('lkti');
    })->name('lkti');

    Route::get('/sinematografi', function () {
        return view('sinematografi');
    })->name('sinematografi');
});

Route::get('/informasi', function () {
    $informasi = \App\Post::orderBy('id', 'desc')
        ->get();
    $informasiterbaru = \App\Post::orderBy('id', 'desc')
        ->take(5)
        ->get();
    return view('informasi', compact('informasi', 'informasiterbaru'));
})->name('informasi');

Route::get('/informasi/{id}', function ($id) {
    $data = \App\Post::where('id', $id)->first();
    $informasiterbaru = \App\Post::orderBy('id', 'desc')
        ->take(5)
        ->get();
    return view('isi-artikel', compact('data', 'informasiterbaru'));
})->name('detail_informasi');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/pedoman', function () {
    return view('pedoman');
})->name('pedoman');

Auth::routes();




Route::group(['prefix' => 'panel'], function () {
    Route::group(['prefix' => 'member'], function () {
        Route::get('/dashboard', 'MemberController@index')->name('member_dashboard');


        Route::group(['prefix' => 'lomba'], function () {
            Route::get('/', 'LombaController@index')->name('member_lomba_utama');
            Route::get('/buat/{id}', 'LombaController@create')->name('member_lomba_buat');
            Route::post('/buat', 'LombaController@store')->name('member_lomba_buat_post');
            Route::post('/gabung', 'LombaController@storeGabung')->name('member_lomba_gabung_post');
            Route::post('/konfirmasi/{code_undangan}', 'LombaController@storeKonfirmasi')->name('member_lomba_konfirmasi');
        });

        Route::group(['prefix' => 'tim'], function () {
            Route::get('/', 'TeamController@index')->name('member_team_utama');
            Route::post('/show/{codeundangan}', 'TeamController@show')->name('member_team_show');
            Route::get('/hapus/{id}', 'TeamController@destroy')->name('member_team_hapus');
            Route::get('/users/{id}/kode_undangan/{code_undangan}', 'TeamController@deleteanggota')->name('member_team_hapus_anggota');
        });
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', 'AdminController@index')->name('admin_dashboard');
        Route::group(['prefix' => 'peserta'], function () {
            Route::get('/', 'AdminController@indexpeserta')->name('admin_peserta_utama');
            Route::get('hapus/{id}', function ($id) {
                $data = \App\User::where('id', $id)->first();
                $data->delete();
                return redirect()->route('admin_peserta_utama');
            })->name('admin_peserta_hapus');
        });

        Route::group(['prefix' => 'post'], function () {
            Route::get('/', 'PostController@index')->name('admin_post_utama');
            Route::get('/buat', 'PostController@create')->name('admin_post_buat');
            Route::post('/buat', 'PostController@store')->name('admin_post_buat_post');;
            Route::get('/hapus/{id}', 'PostController@destroy')->name('admin_post_hapus');
        });
    });
});
