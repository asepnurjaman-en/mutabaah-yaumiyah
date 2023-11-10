<?php

namespace App\Http\Controllers\Api;

use App\Models\QuranSurah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuranSurahResource;

class SurahController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $surahs = QuranSurah::select('index', 'name', 'translation', 'revealed')->get();

        //return collection of posts as a resource
        return new QuranSurahResource(true, 'Semua Surah', $surahs);
    }

    /**
     * show
     *
     * @return void
     */
    public function show(int $id)
    {
        //get posts
        $surah = QuranSurah::select('index', 'name', 'translation', 'revealed')->withCount('ayat')->whereIndex($id)->first();

        //return collection of posts as a resource
        return new QuranSurahResource(true, 'Surah', $surah);
    }
}
