<?php

namespace App\Http\Controllers\User;

use App\Models\QuranJuz;
use App\Models\QuranAyat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class TahfidzController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function juz()
	{
		$quran_juzs = QuranJuz::orderBy('index', 'asc')->get();

		return inertia('User/Tahfidz/Juz', [
			'quran_juzs' => $quran_juzs,
			'current_route' => Route::currentRouteName()
		]);
	}

	/**
	 * Display a listing of the resource.
	 */
	public function surah(int $juz)
	{
		$quran_juzs = QuranJuz::orderBy('index', 'asc')->get();
		$quran_juz = QuranJuz::whereIndex($juz)->firstOrFail();
		$quran_ayat_per_juz = QuranAyat::select('surah_id')->selectRaw('COUNT(id)')
										->with('surah')
										->whereBetween('id', [$quran_juz->surah_per_juz->start_ayat, $quran_juz->surah_per_juz->end_ayat])
										->groupBy(['surah_id'])
										->get();

		return inertia('User/Tahfidz/SurahPerJuz', [
			'quran_juzs' => $quran_juzs,
			'quran_juz' => $quran_juz,
			'quran_ayat_per_juz' => $quran_ayat_per_juz,
			'current_route' => Route::currentRouteName()
		]);
	}
}
