<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CourseFormMail;
use App\Mail\CourseFormAdminMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Registration; // Make sure to import the model

class CourseFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'company' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        $data = $request->all();

        // Save the data to the database
        Registration::create($data);

        // Send email to user
        Mail::to($request->email)->send(new CourseFormMail($data));

        // Send email to admin
        Mail::to('admin@example.com')->send(new CourseFormAdminMail($data));

        return response()->json(['success' => 'Form submitted successfully!']);
    }
}
