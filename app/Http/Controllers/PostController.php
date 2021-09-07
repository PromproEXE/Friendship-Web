<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\FileBag;
use App\Models\Data;
use hisorange\BrowserDetect\Stages\BrowserDetect as Browser;

class PostController extends Controller
{

    public function postToServer(Request $request)
    {
        $send_to = '';
        if ($request['send_to'] == 'Wanpipa') {
            $send_to = 'อ.วรรณวิภา';
        }
        elseif ($request['send_to'] == 'Thanu') {
            $send_to = 'อ.ธนู';
        }
        elseif ($request['send_to'] == 'Prissana') {
            $send_to = 'อ.ปริศนา';
        }
        elseif ($request['send_to'] == 'Patchara') {
            $send_to = 'พัชรา';
        }
        else {
            $send_to = 'ทุกท่านที่เกษียณ';
        }
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
                'preview_content' => $request->preview_content,
                'content' =>  $request->content,
                'send_to' => $send_to,
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
                'preview_content' => $request->preview_content,
                'content' => $request->content,
                'send_to' => $send_to,
            ]);
        }
        return redirect()->route('success');
    }
}
