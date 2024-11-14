<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Log;

class ContactusController extends Controller
{
    public function contactPost(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits:10',
        ]);

        $formData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ];
        try {
            Mail::to('admin@admin.com')->send(new TestEmail($formData));
            return redirect()->back()->with('success', 'Thank you for your message. It has been sent.');
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Sorry, an error occurred while sending your message.');
        }


    }
}
