<?php

namespace App\Http\Controllers;

use App\Fashion;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFashion;

class FashionController extends Controller
{
    public function index()
    {
        $fashions = Fashion::all();

        return view('fashions/index', [
            'fashions' => $fashions
        ]);
    }

    public function showCreateForm()
    {
        return view('fashions/create');
    }

    public function create(CreateFashion $request)
    {   
        $fashion = new Fashion();
        $fashion->path = $request->file('path')->store('public/images');
        $fashion->introduction = $request->introduction;
        $fashion->sex = $request->sex;
        $fashion->height = $request->height;
        $fashion->age = $request->age;
        $fashion->hairstyle = $request->hairstyle;

        $fashion->save();

        return redirect()->route('fashions.index');
    }
}
