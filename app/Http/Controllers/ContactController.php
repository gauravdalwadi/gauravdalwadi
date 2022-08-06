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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());
        return response()->json(['success'=>'Successfully']);


        // return redirect()->back()
        //     ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
