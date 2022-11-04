<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $dataMatkul = [
        'COMP6060 - Algorithm and Programming',
        'COMP6061 - Data Structure',
        'COMP6062 - Algorithm Design and Analysis',
        'COMP6063 - Code Reengineering',
        'COMP6064 - Framework Layer Architecture'
    ];

    $dataJadwal = [
        [
            'tanggal' => '24/11/2022',
            'matkul' => 'COMP6063',
            'desc' => 'Refuse Bequest Smell',
            'ruangan' => '623',
            'jam' => '09.20'
        ],
        [
            'tanggal' => '24/11/2022',
            'matkul' => 'COMP6064',
            'desc' => 'Singleton and Factory Pattern',
            'ruangan' => '403',
            'jam' => '15.20'
        ],
        [
            'tanggal' => '25/11/2022',
            'matkul' => 'COMP6061',
            'desc' => 'Linked-list and Tree',
            'ruangan' => '321',
            'jam' => '12.20'
        ],
    ];

    return view('home')->with('name', 'Adi')->with('role', 'Mahasiswa')->with('matkul', $dataMatkul)->with('jadwal', $dataJadwal);
});
