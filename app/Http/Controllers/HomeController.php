<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index() {
        $json = Storage::disk('public')->get('resume.json');
        $resume = json_decode($json);    
        return view('home', compact('resume'));
    }
}
