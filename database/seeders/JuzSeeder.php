<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\QuranJuz;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JuzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuranJuz::insert([
            [
                'name'		=> 'Juz 1',
                'index'     => 1,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 2',
                'index'     => 2,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 3',
                'index'     => 3,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 4',
                'index'     => 4,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 5',
                'index'     => 5,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 6',
                'index'     => 6,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 7',
                'index'     => 7,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 8',
                'index'     => 8,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 9',
                'index'     => 9,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 10',
                'index'     => 10,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 11',
                'index'     => 11,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 12',
                'index'     => 12,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 13',
                'index'     => 13,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 14',
                'index'     => 14,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 15',
                'index'     => 15,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 16',
                'index'     => 16,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 17',
                'index'     => 17,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 18',
                'index'     => 18,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 19',
                'index'     => 19,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 20',
                'index'     => 20,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 21',
                'index'     => 21,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 22',
                'index'     => 22,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 23',
                'index'     => 23,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 24',
                'index'     => 24,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 25',
                'index'     => 25,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 26',
                'index'     => 26,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 27',
                'index'     => 27,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 28',
                'index'     => 28,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 29',
                'index'     => 29,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ],
            [
                'name'		=> 'Juz 30',
                'index'     => 30,
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
                'created_at'=> now()
            ]
        ]);
    }
}
