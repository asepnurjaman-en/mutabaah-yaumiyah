<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\GoodActivity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		GoodActivity::insert([
			[
				'priority'	=> 'primary',
				'title'     => 'Sholat Subuh',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'primary',
				'title'     => 'Sholat Dzuhur',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'primary',
				'title'     => 'Sholat Ashar',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'primary',
				'title'     => 'Sholat Maghrib',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'primary',
				'title'     => 'Sholat Isya',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Sholat Tahajud',
				'done_as'   => 'value',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Sholat Witir',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Sholat Dhuha',
				'done_as'   => 'value',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sholat qobla Subuh',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sholat qobla Dzuhur',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sholat ba`da Dzuhur',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sholat ba`da Maghrib',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sholat ba`da Isya',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sholat Taubat',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sholat Syuruk',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Tilawah Quran',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Dzikir pagi',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Dzikir petang',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Istigfar',
				'done_as'   => 'value',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Sholawat',
				'done_as'   => 'value',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'unique',
				'title'     => 'Sedekah subuh',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Sedekah',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
			[
				'priority'	=> 'additional',
				'title'     => 'Puasa Sunnah',
				'done_as'   => 'checked',
				'user_id'	=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'=> now()
			],
		]);
	}
}
