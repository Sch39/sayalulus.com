<?php

namespace App\Http\Controllers\pages\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHome extends Controller
{
  public function index()
  {
    return view('content.pages.admin.pages-home');
  }
}
