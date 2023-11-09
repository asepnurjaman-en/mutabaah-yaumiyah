<?php

namespace App\Http\Controllers\Api;

use App\Models\QuranAyat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuranAyatResource;

class AyatController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $ayats = QuranAyat::get();

        //return collection of posts as a resource
        return new QuranAyatResource(true, 'List Ayat', $ayats);
    }
}
