<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;

class PageController extends Controller
{
    function index()
    {
        $voyagesList = Voyage::all();

        return view('site.home', ['voyages' => $voyagesList]);
    }

    function voyage($id)
    {
        $voyage = Voyage::find($id);

        return view('site.voyage', ['voyage' => $voyage]);
    }
}
