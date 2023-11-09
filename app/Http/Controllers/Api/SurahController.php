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
        $surahs = QuranSurah::get();

        //return collection of posts as a resource
        return new QuranSurahResource(true, 'List Surah', $surahs);
    }
}
