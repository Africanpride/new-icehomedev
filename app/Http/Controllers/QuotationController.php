<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Events\QuoteRequestMade;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequestNotification;
use App\Notifications\newQouteRequest;

class QuotationController extends Controller
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
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required|min:10',
            'description' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $quotation = Quotation::create($validated);

        $quotation->notify(new newQouteRequest($quotation));


        // // Dispatch the event
        // event(new QuoteRequestMade($quotation));

        // // Send the email
        Mail::to('webmaster@icehomedev.com')->send(new QuoteRequestNotification($quotation));



        return redirect()->back()->with('success', ' "Request for Quote" received successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quotation $quotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quotation $quotation)
    {
        //
    }
}
