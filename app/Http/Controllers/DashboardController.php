<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AboutPage()
    {
        return view('components.about');
    }
}
