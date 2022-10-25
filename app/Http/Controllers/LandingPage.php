<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function biodata()
    {
        $data['title'] = "Suara Film";
        return view('biodata',$data);
    }
    public function galeriBiodata()
    {
        $data['title'] = "Suara Film";
        return view('galeri_biodata',$data);
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

    public function detailFilm()
    {
        $data['title'] = "Suara Film";
        return view('detail_film',$data);
    }
}
