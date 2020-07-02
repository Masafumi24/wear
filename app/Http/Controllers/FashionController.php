<?php

namespace App\Http\Controllers;

use App\Fashion;
use Illuminate\Http\Request;

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
}
