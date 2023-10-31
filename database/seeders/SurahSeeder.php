<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\QuranSurah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SurahSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		QuranSurah::insert([
			[
				'name'			=> 'Al - Fatihah',
				'translation'	=> 'Pembuka',
				'index'			=> 1,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Baqarah',
				'translation'	=> 'Sapi betina',
				'index'			=> 2,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ali - `Imran',
				'translation'	=> 'Keluarga Imron',
				'index'			=> 3,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Nisa',
				'translation'	=> 'Wanita',
				'index'			=> 4,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Ma-idah',
				'translation'	=> 'Hidangan',
				'index'			=> 5,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - An`am',
				'translation'	=> 'Hewan ternak',
				'index'			=> 6,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - A`raf',
				'translation'	=> 'Tempat yang tertinggi',
				'index'			=> 7,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Anfal',
				'translation'	=> 'Harta rampasan perang',
				'index'			=> 8,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Taubah',
				'translation'	=> 'Pengampunan',
				'index'			=> 9,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Yunus',
				'translation'	=> 'Yunus',
				'index'			=> 10,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Hud',
				'translation'	=> 'Hud',
				'index'			=> 11,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Yusuf',
				'translation'	=> 'Yusuf',
				'index'			=> 12,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ar - Ra`d',
				'translation'	=> 'Guruh',
				'index'			=> 13,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ibrahim',
				'translation'	=> 'Ibrahim',
				'index'			=> 14,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Hijr',
				'translation'	=> '-',
				'index'			=> 15,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Nahl',
				'translation'	=> 'Lebah',
				'index'			=> 16,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Isra',
				'translation'	=> 'Perjalanan malam',
				'index'			=> 17,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Kahf',
				'translation'	=> 'Penghuni goa',
				'index'			=> 18,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Maryam',
				'translation'	=> 'Maryam',
				'index'			=> 19,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Thaha',
				'translation'	=> 'Tha ha',
				'index'			=> 20,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Anbiya',
				'translation'	=> 'Para nabi',
				'index'			=> 21,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Hajj',
				'translation'	=> 'Haji',
				'index'			=> 22,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Mu-minun',
				'translation'	=> 'Orang-orang mukmin',
				'index'			=> 23,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Nur',
				'translation'	=> 'Cahaya',
				'index'			=> 24,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Furqan',
				'translation'	=> 'Pembeda',
				'index'			=> 25,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Asy - Syu`ara',
				'translation'	=> 'Penyair',
				'index'			=> 26,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Naml',
				'translation'	=> 'Semut',
				'index'			=> 27,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Qashash',
				'translation'	=> 'Kisah-kisah',
				'index'			=> 28,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - `Ankabut',
				'translation'	=> 'Laba-laba',
				'index'			=> 29,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ar - Rum',
				'translation'	=> 'Bangsa romawi',
				'index'			=> 30,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Luqman',
				'translation'	=> 'Luqman',
				'index'			=> 31,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'As - Sajdah',
				'translation'	=> '-',
				'index'			=> 32,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Ahzab',
				'translation'	=> '-',
				'index'			=> 33,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Saba',
				'translation'	=> 'Kaum saba',
				'index'			=> 34,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Fathir',
				'translation'	=> 'Pencipta',
				'index'			=> 35,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Yasin',
				'translation'	=> 'Ya sin',
				'index'			=> 36,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ash - Shaffat',
				'translation'	=> 'Barisan-barisan',
				'index'			=> 37,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Shad',
				'translation'	=> 'Sod',
				'index'			=> 38,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Az - Zumar',
				'translation'	=> 'Rombongan',
				'index'			=> 39,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Gafir',
				'translation'	=> 'Yang mengampuni',
				'index'			=> 40,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Fushshilat',
				'translation'	=> 'Yang dijelaskan',
				'index'			=> 41,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Asy - Syura',
				'translation'	=> 'Musyawarah',
				'index'			=> 42,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Az - Zukhruf',
				'translation'	=> 'Perhiasan',
				'index'			=> 43,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ad - Dukhan',
				'translation'	=> 'Kabut',
				'index'			=> 44,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Jatsiyah',
				'translation'	=> 'Yang bertekuk lutut',
				'index'			=> 45,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Ahqaf',
				'translation'	=> 'Bukit-bukit pasir',
				'index'			=> 46,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Muhammad',
				'translation'	=> 'Muhammad',
				'index'			=> 47,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Fath',
				'translation'	=> 'Kemenangan',
				'index'			=> 48,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Hujurat',
				'translation'	=> 'Kamar-kamar',
				'index'			=> 49,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Qaf',
				'translation'	=> 'Qof',
				'index'			=> 50,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Adz - Dzariyat',
				'translation'	=> 'Angin yang menerbangkan',
				'index'			=> 51,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ath - Thur',
				'translation'	=> 'Bukit',
				'index'			=> 52,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Najm',
				'translation'	=> 'Bintang',
				'index'			=> 53,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Qamar',
				'translation'	=> 'Bulan',
				'index'			=> 54,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ar - Rahman',
				'translation'	=> 'Yang maha pengasih',
				'index'			=> 55,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Waqi`ah',
				'translation'	=> 'Hari kiamat',
				'index'			=> 56,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Hadid',
				'translation'	=> 'Besi',
				'index'			=> 57,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Mujadalah',
				'translation'	=> 'Wanita yang mengajukan gugatan',
				'index'			=> 58,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Hasyr',
				'translation'	=> 'Pengusiran',
				'index'			=> 59,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Mumtahanah',
				'translation'	=> 'Wanita yang diuji',
				'index'			=> 60,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ash - Shaff',
				'translation'	=> 'Satu barisan',
				'index'			=> 61,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Jumu`ah',
				'translation'	=> 'Hari jumat',
				'index'			=> 62,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Munafiqun',
				'translation'	=> 'Orang-orang munafik',
				'index'			=> 63,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'At - Tagabun',
				'translation'	=> 'Hari ditampakan kesalahan-kesalahan',
				'index'			=> 64,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ath - Thalaq',
				'translation'	=> 'Talak',
				'index'			=> 65,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'At - Tahrim',
				'translation'	=> 'Mengharamkan',
				'index'			=> 66,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Mulk',
				'translation'	=> 'Kerajaan',
				'index'			=> 67,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Qalam',
				'translation'	=> 'Pena',
				'index'			=> 68,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Haqqah',
				'translation'	=> 'Hari kiamat',
				'index'			=> 69,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Ma`arij',
				'translation'	=> 'Tempat naik',
				'index'			=> 70,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Nuh',
				'translation'	=> 'Nuh',
				'index'			=> 71,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Jinn',
				'translation'	=> 'Jin',
				'index'			=> 72,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Muzzammil',
				'translation'	=> 'Orang yang berselimut',
				'index'			=> 73,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Muddatstsir',
				'translation'	=> 'Orang yang berkemul',
				'index'			=> 74,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Qiyamah',
				'translation'	=> 'Hari kiamat',
				'index'			=> 75,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Insan',
				'translation'	=> 'Manusia',
				'index'			=> 76,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Mursalat',
				'translation'	=> 'Malaikat-malaikat yang diutus',
				'index'			=> 77,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Naba',
				'translation'	=> 'Berita besar',
				'index'			=> 78,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Nazi`at',
				'translation'	=> 'Malaikat-malaikat yang mencabut',
				'index'			=> 79,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> '`Abasa',
				'translation'	=> 'Ia bermuka masam',
				'index'			=> 80,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'At - Takwir',
				'translation'	=> 'Menggulung',
				'index'			=> 81,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Infithar',
				'translation'	=> 'Terbelah',
				'index'			=> 82,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Muthaffifin',
				'translation'	=> 'Orang-orang yang curang',
				'index'			=> 83,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Insyiqaq',
				'translation'	=> 'Terbelah',
				'index'			=> 84,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Buruj',
				'translation'	=> 'Gugusan bintang',
				'index'			=> 85,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Ath - Thariq',
				'translation'	=> 'Yang datang di malam hari',
				'index'			=> 86,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - A`la',
				'translation'	=> 'Yang paling tinggi',
				'index'			=> 87,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Gasyiyah',
				'translation'	=> 'Hari pembalasan',
				'index'			=> 88,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Fajr',
				'translation'	=> 'Fajar',
				'index'			=> 89,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Balad',
				'translation'	=> 'Negeri',
				'index'			=> 90,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Asy - Syams',
				'translation'	=> 'Matahari',
				'index'			=> 91,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Lail',
				'translation'	=> 'Malam',
				'index'			=> 92,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Adh - Dhuha',
				'translation'	=> 'Waktu duha',
				'index'			=> 93,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Asy - Syarh',
				'translation'	=> 'Melapangkan',
				'index'			=> 94,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'At - Tin',
				'translation'	=> 'Buah tin',
				'index'			=> 95,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - `Alaq',
				'translation'	=> 'Segumpal darah',
				'index'			=> 96,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Qadr',
				'translation'	=> 'Malam kemulian',
				'index'			=> 97,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Bayyinah',
				'translation'	=> 'Pembuktian',
				'index'			=> 98,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Az - Zalzalah',
				'translation'	=> 'Goncangan',
				'index'			=> 99,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - `Adiyat',
				'translation'	=> 'Berlari kencang',
				'index'			=> 100,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Qari`ah',
				'translation'	=> 'Hari kiamat',
				'index'			=> 101,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'At - Takatsur',
				'translation'	=> 'Bermegah-megahan',
				'index'			=> 102,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - `Ashr',
				'translation'	=> 'Masa',
				'index'			=> 103,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Humazah',
				'translation'	=> 'Pengumpat',
				'index'			=> 104,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Fil',
				'translation'	=> 'Gajah',
				'index'			=> 105,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Quraisy',
				'translation'	=> 'Suku Qurais',
				'index'			=> 106,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Ma`un',
				'translation'	=> 'Berang-barang yang berguna',
				'index'			=> 107,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Kautsar',
				'translation'	=> 'Nikmat yang berlimpah',
				'index'			=> 108,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Kafirun',
				'translation'	=> 'Orang-orang kafir',
				'index'			=> 109,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Nashr',
				'translation'	=> 'Pertolongan',
				'index'			=> 110,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Lahab',
				'translation'	=> 'Gejolak api',
				'index'			=> 111,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Ikhlas',
				'translation'	=> 'Iklas',
				'index'			=> 112,
				'revealed'		=> 'makkiyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'Al - Falaq',
				'translation'	=> 'Waktu subuh',
				'index'			=> 113,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			],
			[
				'name'			=> 'An - Nas',
				'translation'	=> 'Umat Manusia',
				'index'			=> 114,
				'revealed'		=> 'madaniyyah',
				'user_id'		=> User::where('email', 'admin@gmail.com')->first()->id,
				'created_at'	=> now()
			]
		]);
	}
}
