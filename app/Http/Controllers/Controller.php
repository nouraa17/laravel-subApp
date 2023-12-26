<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function guarderbase()
    {
        return view('guarder');
    }
    public function guarderabout()
    {
        return view('about');
    }
    public function guarderservice()
    {
        return view('services');
    }
    public function guarderguards()
    {
        return view('guards');
    }
    public function guardercontact()
    {
        return view('contact');
    }
}
