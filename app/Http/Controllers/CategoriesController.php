<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        return view('Dashboard.admin.categories.index');
    }
        public function add()
    {
        return view('Dashboard.admin.categories.add');
    }
}
