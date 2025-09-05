<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    // public function send(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         'message' => 'required|string',
    //     ]);

    //     // هنا يمكن إرسال الإيميل باستخدام Mail أو تخزينه في قاعدة البيانات
    //     // مثال:
    //     // Mail::to('contact@yourwebsite.com')->send(new ContactMail($data));

    //     return back()->with('success', 'Your message has been sent!');
    // }
    public function index(){
        return view('.pages.contact' ,['title' => 'contact Us']);
    }
      public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|max:500',
        ]);

        // هنا ممكن تحفظي الرسالة في قاعدة البيانات أو ترسلي بريد إلكتروني

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }
}

