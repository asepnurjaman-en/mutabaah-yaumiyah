<?php

namespace App\Http\Controllers\Api;

use App\Models\GoodActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityResource;

class ActivityController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $acivities = GoodActivity::select('priority', 'title', 'done_as')->get();

        //return collection of posts as a resource
        return new ActivityResource(true, 'Aktifitas saya', $acivities);
    }
}
