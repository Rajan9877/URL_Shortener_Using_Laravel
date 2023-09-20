<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\UrlShortener;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class UrlShortenerController extends Controller
{
    public function shorten(Request $request)
{
    $longUrl = $request->input('long_url');
    if($longUrl != ''){
    $shortCode = Str::random(6); // Generates a random 6-character short code

    // Check if the short code is unique; generate a new one if not
    while (UrlShortener::where('short_code', $shortCode)->exists()) {
        $shortCode = Str::random(6);
    }

    // Store the URL in the database with its short code
    UrlShortener::create([
        'long_url' => $longUrl,
        'short_code' => $shortCode,
    ]);

    // Return the shortened URL
    return view('home', ['shortUrl' => route('redirect', $shortCode), 'shortCode' => $shortCode]);
    }
    else{
        return view('home', ['message' => 'You can not leave this input empty.']);
    }
}
public function redirect($shortCode)
{
    $urlShortener = UrlShortener::where('short_code', $shortCode)->first();

    if ($urlShortener) {
        // Increment the click count
        $urlShortener->stats()->create([
            'visitor_ip' => request()->ip(),
        ]);

        $urlShortener->stats()->increment('clicks'); // Increment the click count

        return redirect($urlShortener->long_url);
    }

    abort(404); // Short code not found
}



public function index()
{
    return view('home');
}

// public function showShortenedUrl($shortUrl)
// {
//     return view('shortened_url', ['shortUrl' => $shortUrl]);
// }

public function showError()
{
    return view('error');
}

public function showStats($shortCode)
{
    $urlShortener = UrlShortener::where('short_code', $shortCode)->first();

    if (!$urlShortener) {
        abort(404);
    }

    $stats = $urlShortener->stats()->latest()->paginate(10);

    return view('stats', compact('urlShortener', 'stats'));
}

public function submitForm(Request $request)
{
    // Validation logic (already defined)

    // If validation passes, retrieve the validated data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'mobile' => 'nullable|regex:/^(\+?[0-9]{1,4}[\s-]?)?[0-9]{10}$/',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Retrieve individual form fields from $validatedData
    $name = $validatedData['name'];
    $email = $validatedData['email'];
    $mobile = $validatedData['mobile'];
    $subject = $validatedData['subject'];
    $message = $validatedData['message'];

    // Assuming you have a "Contact" model for storing form submissions
    $contact = new Contact();
    $contact->name = $name;
    $contact->email = $email;
    $contact->mobile = $mobile;
    $contact->subject = $subject;
    $contact->message = $message;
    $contact->save();

    return view('contact', ['message' => 'Your form has been submitted successfully.']);

    // Process and store the data (you can customize this part)
    // For example, you can save it to a database, send an email, etc.

    // Redirect to a success page
    // return redirect()->route('success');
}


}
