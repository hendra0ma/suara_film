<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index()
    {
        $data['title'] = "Suara Film";
        return view('home',$data);
    }

    public function film()
    {
        $data['title'] = "Suara Film";
        return view('film',$data);
    }

    public function listFilm()
    {
        $data['title'] = "Suara Film";
        return view('list_film',$data);
    }
}
