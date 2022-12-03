<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
class ContactController extends Controller
{

    public function index()
    {
        return view('/');
    }
    public function submit(Request $request){
        $validated=$request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required|min:11|numeric',
                 'message'=>'required'
            ]
        );
        // Session::flash('success', 'Here is your success message');
        // echo "<pre>";
        // print_r($request->all());
        Mail::to(users:'myemail@gmail.com')
        ->send(new ContactMail($validated['name'],$validated['email'],$validated['phone'],$validated['message'] ));
        return redirect()->back()->withSuccess('Thanks for your contact request.i will get back to you shortly!');

        //
    //     public function submit(Request  $request)
    // {
    //     $validated = $request->validate([
    //         'name'=>'required',
    //         'email'=>['required','email'],
    //         'phone'=>['required','phone'],
    //         'message'=>'required'
    //     ]);

    //     return ['success'=> true];
    }




}
