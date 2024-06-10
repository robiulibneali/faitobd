<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Models\Frontend\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'email',
            'mobile'        => ['required', 'numeric', 'regex:/^(?:\+88|01)?\d{11}$/'],
            'workshop_info' => 'required',
        ]);

        $data = request()->validate([
            'name'      => 'required|min:3',
            'email'     => 'required|email',
            'message'   => 'required|min:5',
        ]);
//        dd($data);
        Mail::to('robiul.cam06071998@gmail.com')->send(new ContactUs($data));

        Contact::saveContact($request);
        return back()->with('success', 'Message Sent Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function send()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
