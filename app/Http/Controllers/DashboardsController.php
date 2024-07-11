<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('dashboards.home');
    }

    public function companyprofile()
    {
        return view('dashboards.companyprofile');
    }

    public function catalogue()
    {
        return view('dashboards.catalogue');
    }

    public function scopeofservices()
    {
        return view('dashboards.scope');
    }

    public function rangeofproducts()
    {
        return view('dashboards.range-of-products');
    }

    public function plasmaspraying()
    {
        return view('dashboards.plasma-spraying');
    }

    public function hvofs()
    {
        return view('dashboards.hvofs');
    }

    public function applications()
    {
        return view('dashboards.applications');
    }

    public function photogallery()
    {
        return view('dashboards.photo-gallery');
    }

    public function sitemap()
    {
        return view('dashboards.sitemap');
    }

    public function privacypolicy()
    {
        return view('dashboards.privacy-policy');
    }

    public function termsandconditions()
    {
        return view('dashboards.terms-and-condition');
    }
    
    public function contactus()
    {
        return view('dashboards.contactus');
    }
    public function enquiry()
    {
        return view('dashboards.enquiry');
    }
    
    public function saveform(Request $request)
    {
        //dd($request);
        // Validate the form data (example validation)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20', 
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'message' => 'required',
        ]);

//        dd($validatedData);

        // Send email notification
        Mail::to('moin@puratech.in')->send(new ContactFormMail($validatedData));

        // Redirect back with success message or any other logic
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function arcspraying()
    {
        return view('dashboards.arc-spraying');
    }

    public function powderflamespray()
    {
        return view('dashboards.powder-flame-spray');
    }

    public function plasmatransarc()
    {
        return view('dashboards.plasma-trans-arc');
    }
   
   
}
