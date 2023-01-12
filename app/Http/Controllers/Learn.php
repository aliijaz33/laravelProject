<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Learn extends Controller
{
    //
    function home(){
        return view('home');
    }
    function course(){
        return view('myCourses');
    }
    function notes(){
        return view('myNotes');
    }
    function playlist(){
        return view('myPlaylist');
    }
    function profile(){
        
        // $score = DB::table('users')
        // ->join('results','users.id', "=" , 'results.user_id')
        // ->where('users.id', 1)
        // ->get();
        return view('profile');

        // return $score->'score';
    }
    
}