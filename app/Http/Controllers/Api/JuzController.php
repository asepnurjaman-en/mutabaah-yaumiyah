<?php

namespace App\Http\Controllers\Api;

use App\Models\QuranJuz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuranJuzResource;

class JuzController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $juzs = QuranJuz::get();

        //return collection of posts as a resource
        return new QuranJuzResource(true, 'List Juz', $juzs);
    }
}
