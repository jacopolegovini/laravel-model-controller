<?php

namespace App\Http\Controllers;

use App\Models\Movie;


use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(int $id)
    {
        $movies = Movie::all()[$id];
        return view("pages.show", compact('movies'));
    }
}