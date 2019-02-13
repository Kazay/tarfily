<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $voyagesList = Voyage::all();

        return view('admin.index');
    }
}
