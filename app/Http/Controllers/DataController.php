<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DataController extends Controller
{
    public function home() {
        return Inertia::render('Home');
    }

    public function about() {
        return Inertia::render('About');
    }
}
