<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'service_interest' => 'nullable|string|max:255',
            'message' => 'required|string',
            'submission_type' => 'required|string|in:consultation,support,general'
        ]);

        $contactSubmission = ContactSubmission::create($request->all());

        // In a real application, you would send an email notification here
        // Mail::to('contact@baherit.com')->send(new ContactFormSubmitted($contactSubmission));

        return redirect()->back()->with('success', 'Thank you for your message. We will contact you soon!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactSubmission $contactSubmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactSubmission $contactSubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactSubmission $contactSubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactSubmission $contactSubmission)
    {
        //
    }
}
