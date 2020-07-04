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

    public function create(CreateFahion $request)
    {
        $fashion = new Fashion();

        $fashion->introduction = $request->introduction;
        $fashion->path = $request->path;
        $fashion->sex = $request->sex;
        $fashion->height = $request->height;
        $fashion->age = $request->age;
        $fashion->hairstyle = $request->hairstyle;

        return redirect()->route('/');
    }
}
