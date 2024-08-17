<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = $request->only(['name', 'date', 'time', 'number']);
        Contact::create($contact);
        return view('thanks');
    }

    public function mypage()
    {
        $contacts = Contact::all();
        return view('mypage', ['contacts' => $contacts]);
    }
}
