<?php

namespace App\Http\Controllers;

use App\Fashion;
use Illuminate\Support\Facades\Auth;
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

    public function show($id)
    {
        $fashion = Fashion::find($id);

        return view('fashions/show', [
            'fashions' => $fashion
        ]);
    }

    public function showCreateForm()
    {
        return view('fashions/create');
    }

    public function create(CreateFashion $request)
    {   
        $fashion = new Fashion();

        $filename = $request->file('path')->store('image');
        $fashion->path = basename($filename);

        $fashion->introduction = $request->introduction;
        $fashion->sex = $request->sex;
        $fashion->height = $request->height;
        $fashion->age = $request->age;
        $fashion->hairstyle = $request->hairstyle;

        Auth::user()->fashions()->save($fashion);

        return redirect()->route('fashions.index');
    }
}
