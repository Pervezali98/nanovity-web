<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('visitor.contact');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|string|min:20|max:250'
        ]);

        Mail::to('info@nanovity.net')->send(new ContactFormMail($attributes));

        Session::flash('success');
        return back();
    }
}
