<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Hero;
use App\Image;
class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index()
    {
        $result = Hero::orderBy('name', 'ASC')->get();
        $view = View('hero/index');
        $view->questions = $result;
        return $view;

        
    }
}
