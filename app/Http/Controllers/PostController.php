<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\FileBag;
use App\Models\Data;

class PostController extends Controller
{
    

    public function postToServer(Request $request)
    {
        if ($request->has('incognito')) {
            $request->validate([
                'incognito' => ['accepted'],
                'content' => ['required'],
                'send_to' => ['required']
            ], [
                'content.required' => 'กรุณาใส่คำมุทิตาจิต',
                'send_to.required' => 'กรุณาเลือกผู้รับ',
            ]);
            Data::create([
                'content' => $request->content,
                'send_to' => $request->send_to,
            ]);
        } else {
            $request->validate([
                'name' => ['required', 'min:5'],
                'content' => ['required'],
                'send_to' => ['required']
            ], [
                'name.required' => 'กรุณาใส่ชื่อจริง',
                'name.min' => 'กรุณาใส่ชื่อจริงและนามสกุล',
                'content.required' => 'กรุณาใส่คำมุทิตาจิต',
                'send_to.required' => 'กรุณาเลือกผู้รับ',
            ]);
            Data::create([
                'name' => $request->name,
                'content' => $request->content,
                'send_to' => $request->send_to,
            ]);
        }
        return redirect()->route('success');
    }
}
