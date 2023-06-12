<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('contactForm');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:9|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create(request()->except(['_token']));

        return redirect()->back()
                         ->with(['success' => 'Thank you for contacting us. We will contact you shortly.']);
    }
}
