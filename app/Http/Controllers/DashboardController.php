<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
	public function index()
	{
		$dashboard = [
			'meetings' => 1,
			'students' => 4
		];
		if (in_array(Auth::user()->role, ['developer', 'admin'])) :
			return inertia('Admin/Dashboard', [
				'data' => $dashboard,
				'current_route' => Route::currentRouteName()
			]);
		elseif (in_array(Auth::user()->role, ['user'])) :
			return inertia('User/Dashboard', [
				'data' => $dashboard,
				'current_route' => Route::currentRouteName()
			]);
		endif;
	}
}
