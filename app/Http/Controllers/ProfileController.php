<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
        $profile = DB::table('profile')->get();
        return view('VProfile',['profile' => $profile]);
    }
}
