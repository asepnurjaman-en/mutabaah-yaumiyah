<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\QuranAyat;
use App\Models\QuranJuz;
use Illuminate\Database\Seeder;
use App\Models\QuranSurahPerJuz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SurahPerJuzSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
        QuranSurahPerJuz::insert([
            [
                'juz_id' => QuranJuz::where('index', '1')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '1')->first()->id,
                'end_ayat' => QuranAyat::where('index', '141')->where('surah_id', '2')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
            ],
            [
                'juz_id' => QuranJuz::where('index', '2')->first()->id,
                'start_ayat' => QuranAyat::where('index', '142')->where('surah_id', '2')->first()->id,
                'end_ayat' => QuranAyat::where('index', '252')->where('surah_id', '2')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
            ],
            [
                'juz_id' => QuranJuz::where('index', '3')->first()->id,
                'start_ayat' => QuranAyat::where('index', '253')->where('surah_id', '2')->first()->id,
                'end_ayat' => QuranAyat::where('index', '91')->where('surah_id', '3')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '4')->first()->id,
                'start_ayat' => QuranAyat::where('index', '92')->where('surah_id', '3')->first()->id,
                'end_ayat' => QuranAyat::where('index', '23')->where('surah_id', '4')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '5')->first()->id,
                'start_ayat' => QuranAyat::where('index', '24')->where('surah_id', '4')->first()->id,
                'end_ayat' => QuranAyat::where('index', '147')->where('surah_id', '4')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '6')->first()->id,
                'start_ayat' => QuranAyat::where('index', '148')->where('surah_id', '4')->first()->id,
                'end_ayat' => QuranAyat::where('index', '82')->where('surah_id', '5')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '7')->first()->id,
                'start_ayat' => QuranAyat::where('index', '83')->where('surah_id', '5')->first()->id,
                'end_ayat' => QuranAyat::where('index', '110')->where('surah_id', '6')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '8')->first()->id,
                'start_ayat' => QuranAyat::where('index', '111')->where('surah_id', '6')->first()->id,
                'end_ayat' => QuranAyat::where('index', '87')->where('surah_id', '7')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '9')->first()->id,
                'start_ayat' => QuranAyat::where('index', '88')->where('surah_id', '7')->first()->id,
                'end_ayat' => QuranAyat::where('index', '40')->where('surah_id', '8')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '10')->first()->id,
                'start_ayat' => QuranAyat::where('index', '41')->where('surah_id', '8')->first()->id,
                'end_ayat' => QuranAyat::where('index', '93')->where('surah_id', '9')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '11')->first()->id,
                'start_ayat' => QuranAyat::where('index', '94')->where('surah_id', '9')->first()->id,
                'end_ayat' => QuranAyat::where('index', '5')->where('surah_id', '11')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '12')->first()->id,
                'start_ayat' => QuranAyat::where('index', '6')->where('surah_id', '11')->first()->id,
                'end_ayat' => QuranAyat::where('index', '52')->where('surah_id', '12')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '13')->first()->id,
                'start_ayat' => QuranAyat::where('index', '53')->where('surah_id', '12')->first()->id,
                'end_ayat' => QuranAyat::where('index', '1')->where('surah_id', '15')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '14')->first()->id,
                'start_ayat' => QuranAyat::where('index', '2')->where('surah_id', '15')->first()->id,
                'end_ayat' => QuranAyat::where('index', '128')->where('surah_id', '16')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '15')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '17')->first()->id,
                'end_ayat' => QuranAyat::where('index', '74')->where('surah_id', '18')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '16')->first()->id,
                'start_ayat' => QuranAyat::where('index', '75')->where('surah_id', '18')->first()->id,
                'end_ayat' => QuranAyat::where('index', '135')->where('surah_id', '20')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '17')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '21')->first()->id,
                'end_ayat' => QuranAyat::where('index', '78')->where('surah_id', '22')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '18')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '23')->first()->id,
                'end_ayat' => QuranAyat::where('index', '20')->where('surah_id', '25')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '19')->first()->id,
                'start_ayat' => QuranAyat::where('index', '26')->where('surah_id', '25')->first()->id,
                'end_ayat' => QuranAyat::where('index', '59')->where('surah_id', '27')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '20')->first()->id,
                'start_ayat' => QuranAyat::where('index', '60')->where('surah_id', '27')->first()->id,
                'end_ayat' => QuranAyat::where('index', '44')->where('surah_id', '29')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '21')->first()->id,
                'start_ayat' => QuranAyat::where('index', '45')->where('surah_id', '29')->first()->id,
                'end_ayat' => QuranAyat::where('index', '30')->where('surah_id', '33')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '22')->first()->id,
                'start_ayat' => QuranAyat::where('index', '31')->where('surah_id', '33')->first()->id,
                'end_ayat' => QuranAyat::where('index', '21')->where('surah_id', '36')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '23')->first()->id,
                'start_ayat' => QuranAyat::where('index', '22')->where('surah_id', '36')->first()->id,
                'end_ayat' => QuranAyat::where('index', '31')->where('surah_id', '39')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '24')->first()->id,
                'start_ayat' => QuranAyat::where('index', '32')->where('surah_id', '39')->first()->id,
                'end_ayat' => QuranAyat::where('index', '46')->where('surah_id', '41')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '25')->first()->id,
                'start_ayat' => QuranAyat::where('index', '47')->where('surah_id', '41')->first()->id,
                'end_ayat' => QuranAyat::where('index', '37')->where('surah_id', '45')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
                ],
                [
                'juz_id' => QuranJuz::where('index', '26')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '46')->first()->id,
                'end_ayat' => QuranAyat::where('index', '30')->where('surah_id', '51')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
            ],
            [
                'juz_id' => QuranJuz::where('index', '27')->first()->id,
                'start_ayat' => QuranAyat::where('index', '31')->where('surah_id', '51')->first()->id,
                'end_ayat' => QuranAyat::where('index', '29')->where('surah_id', '57')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
            ],
            [
                'juz_id' => QuranJuz::where('index', '28')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '58')->first()->id,
                'end_ayat' => QuranAyat::where('index', '12')->where('surah_id', '66')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
            ],
            [
                'juz_id' => QuranJuz::where('index', '29')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '67')->first()->id,
                'end_ayat' => QuranAyat::where('index', '50')->where('surah_id', '77')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
            ],
            [
                'juz_id' => QuranJuz::where('index', '30')->first()->id,
                'start_ayat' => QuranAyat::where('index', '1')->where('surah_id', '78')->first()->id,
                'end_ayat' => QuranAyat::where('index', '6')->where('surah_id', '114')->first()->id,
                'user_id' => User::where('email', 'admin@gmail.com')->first()->id,
                'created_at' => now()
            ]
        ]);
    }
}
