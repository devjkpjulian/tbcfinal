<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function inquiry(Request $request)
    {
        Mail::to('mikemanimation@gmail.com')->send(new ContactUs($request->all()));

        return back();
    }
}
