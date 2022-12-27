<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use App\Models\Fish;

class FishController extends Controller
{
    public function index()
    {
        $fishes = Fish::query()->get();

        // dd($fishes);

        return view('fish.index', compact('fishes'));


    }
}
