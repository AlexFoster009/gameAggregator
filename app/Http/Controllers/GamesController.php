<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GamesController extends Controller
{
    public function index()
    {
        return View('index');
    }
}
