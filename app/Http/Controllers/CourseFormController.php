<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CourseFormMail;
use App\Mail\CourseFormAdminMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Registration;

class CourseFormController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'gender' => 'required|string|max:10',
                'address' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'state' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:15',
                'company' => 'nullable|string|max:255',
                'study' => 'required|string|max:50',
                'message' => 'nullable|string',
            ]);

            Registration::create($validatedData);

            // Send email to user
            Mail::to($request->email)->send(new CourseFormMail($validatedData));

            // Send email to admin
            $adminEmail = config('app.admin_email');       
            Mail::to($adminEmail)->send(new CourseFormAdminMail($validatedData));


            return redirect()->back()->with('success', 'Form submitted successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation exceptions separately
            Log::error('Validation Error:', ['errors' => $e->errors()]);
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log any other error
            Log::error('Error submitting form:', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'Failed to submit form. Please try again later.']);
        }
    }  
}
