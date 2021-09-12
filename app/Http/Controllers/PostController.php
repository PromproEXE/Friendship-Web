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
        if ($request->has('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->storeAs('public/images', $imageName);

            $request->validate([
                'name' => ['required', 'min:5'],
                'content' => ['required'],
                'send_to' => ['required'],
                'image' => ['mimes:png,jpg,jpeg'],
            ], [
                'name.required' => 'กรุณาใส่ชื่อจริง',
                'name.min' => 'กรุณาใส่ชื่อจริงและนามสกุล',
                'content.required' => 'กรุณาใส่คำมุทิตาจิต',
                'send_to.required' => 'กรุณาเลือกผู้รับ',
                'image.mimes' => 'กรุณาเลือกไฟล์ประเภท .jpg หรือ .png'
            ]);
            Data::create([
                'name' => $request->name,
                'content' =>  $request->content,
                'send_to' => $send_to,
                'img_path' => 'images/'.$imageName,
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
                'send_to' => $send_to,
            ]);
        }
        return redirect()->route('success');
    }
    private function convertToThai($value) {
        
    }
}
