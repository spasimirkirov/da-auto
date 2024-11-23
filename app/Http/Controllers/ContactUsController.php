<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsIndexRequest;

class ContactUsController extends Controller
{
    public function index(ContactUsIndexRequest $request)
    {
        return view('contact-us');
    }
}
