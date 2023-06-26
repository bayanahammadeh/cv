<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::all()->first();
        return view('index', compact('personal'));
    }

    public function contact(ContactRequest $request)
    {

        $validated = $request->validated();

        $contact = new Contact();
        $contact->recuriname = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->msg = $request->message;

        $contact->save();

        return response()->json([
            'status' => 200,
            'message' => 'Your message was sent successfully',
        ]);
    }
}
