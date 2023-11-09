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
	public function juz() : void
	{
		$quran_juzs = QuranJuz::orderBy('index', 'asc')->get();
	}

	/**
	 * Display a listing of the resource.
	 */
	public function surah_per_juz(int $juz) : void
	{
		$quran_juzs = QuranJuz::orderBy('index', 'asc')->get();
		$quran_juz = QuranJuz::whereIndex($juz)->firstOrFail();
		$quran_ayat_per_juz = QuranAyat::select('surah_id')->selectRaw('COUNT(id)')
										->with('surah')
										->whereBetween('id', [$quran_juz->surah_per_juz->start_ayat, $quran_juz->surah_per_juz->end_ayat])
										->groupBy(['surah_id'])
										->get();
	}

	/**
	 * Display a listing of the resource.
	 */
	public function surah() : void
	{
		$quran_surahs = QuranSurah::orderBy('index', 'asc')->get();
	}

	/**
	 * Display a listing of the resource.
	 */
	public function ayat_per_surah(int $surah_id) : void
	{
		$quran_surah = QuranSurah::whereIndex($surah_id)->firstOrFail();
		$quran_ayats = QuranAyat::where('surah_id', $quran_surah->id)->orderBy('index', 'asc')->get();
	}
}
