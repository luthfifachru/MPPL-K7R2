<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Events;

class PagesController extends Controller
{
    public function index()
    {
        return view('index')
        ->with('teachers', Teacher::orderBy('title', 'ASC')->take(6)->get())
        ->with('events', Events::orderBy('updated_at', 'DESC')->take(6)->get())
        ;
    }
}
