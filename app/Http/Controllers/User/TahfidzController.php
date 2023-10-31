<?php

namespace App\Http\Controllers\User;

use App\Models\QuranJuz;
use App\Models\QuranAyat;
use App\Models\QuranSurah;
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
	public function surah_per_juz(int $juz)
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

	/**
	 * Display a listing of the resource.
	 */
	public function surah()
	{
		$quran_surahs = QuranSurah::orderBy('index', 'asc')->get();
		return inertia('User/Tahfidz/Surah', [
			'quran_surahs' => $quran_surahs,
			'current_route' => Route::currentRouteName()
		]);
	}

	/**
	 * Display a listing of the resource.
	 */
	public function ayat_per_surah(int $surah_id)
	{
		$quran_surah = QuranSurah::whereIndex($surah_id)->firstOrFail();
		$quran_ayats = QuranAyat::where('surah_id', $quran_surah->id)->orderBy('index', 'asc')->get();
		return inertia('User/Tahfidz/Ayat', [
			'quran_surah' => $quran_surah,
			'quran_ayats' => $quran_ayats,
			'current_route' => Route::currentRouteName()
		]);
	}
}
