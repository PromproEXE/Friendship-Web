<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class WebController extends Controller
{
    public function index() {
        return view('index');
    }

    public function viewWish($id) {
        $data = Data::where('id', $id)->first();
        return view('viewWish', compact('data'));
    }

    public function wishPage(Request $request)
    {
        $data = Data::all();
        $count = count($data);
        return view('wish', compact('data', 'count'));
    }

    public function success() {
        return view('success');
    }
}
