<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Progress extends Controller
{
    public function index()
    {
        $pageConfigs = ['myLayout' => 'blank'];
        return view('content.pages.noted', ['pageConfigs' => $pageConfigs]);
    }
}
