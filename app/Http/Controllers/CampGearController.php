<?php

namespace App\Http\Controllers;

use App\Models\CampGear;
use Illuminate\Http\Request;

class CampGearController extends Controller
{
    /**
     * Display a listing of camping gears (catalog page).
     */
    public function index()
    {
        $gears = CampGear::all();

        return view('camp-gears.index', compact('gears'));
    }

    /**
     * Display the specified camping gear detail.
     */
    public function show($id)
    {
        $gear = CampGear::findOrFail($id);

        return view('camp-gears.show', compact('gear'));
    }
}
