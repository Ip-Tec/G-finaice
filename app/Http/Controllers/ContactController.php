<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Create a new Contact model instance and save it to the database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // Send email
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('mail@g-finaicd.org')->send(new ContactFormMail($details));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    public function submitLoan(Request $request)
    {
        dd($request);
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'marital_status' => 'required|in:single,married,divorced,widowed',
            'home_address' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'occupation' => 'required|string|max:255',
            'monthly_income' => 'required|numeric',
            'home_tel' => 'nullable|string|max:255',
            'mobile' => 'required|string|max:255',
            'total_loan_amount' => 'required|numeric',
            'loan_duration' => 'required|integer',
            'loan_purpose' => 'required|string',
            'applied_before' => 'nullable|boolean',
            'id_card' => 'nullable|image|max:2048', // Assuming the ID card is uploaded as an image file
        ]);

        // Check if an ID card was uploaded
        if ($request->hasFile('id_card')) {
            // Get the uploaded file
            $idCard = $request->file('id_card');

            // Generate a unique file name
            $fileName = uniqid('id_card_') . '.' . $idCard->getClientOriginalExtension();

            // Store the file in the storage directory
            $path = $idCard->storeAs('public/id_cards', $fileName);

            // Optionally, you can get the URL of the stored file
            $url = Storage::url($path);

            // Save the file path or URL to your database or perform any other necessary action
        }
        // Create a new Loan model instance and save it to the database
        $loan = new Loan();
        $loan->fill($request->all());
        $loan->save();

        // Send email with loan data
        Mail::to('admin@example.com')->send(new ContactFormMail($loan));

        return redirect()->back()->with('success', 'Your loan application has been submitted successfully.');
    }
}
