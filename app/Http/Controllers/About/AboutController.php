<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;

class AboutController extends Controller
{
    public function about() {
        return view('About/about');
    }

    public function processContactForm(Request $request) {
        try {
            Mail::send(
                'About.contact-form',
                ['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'messages' => $request->message], 
                function ($message) use ($request) {
                    $message->from($request->email, $request->name);
                    $message->to('foodee.ltc@gmail.com');
                    $message->subject('Thư liên hệ từ ' . $request->name);
                }
            );
            
            return redirect()->back()->with('status-success-1', 'Gửi thư thành công!');
        } catch (Exception $e) {
            return redirect()->back()->with('status-error-1', 'Gửi thư không thành công!');;
        }
    }
}
