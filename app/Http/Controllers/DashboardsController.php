<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\EnquiryFormMail;
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

    public function enquiryform(Request $request)
    {
        $validatedData = $request->validate([
            'partname' => 'string|max:255',
            'function_of_coating' => 'string',
            'type_of_coating' => 'string',
            'coating_thickness' => 'string',
            'surface_finish' => 'string',
            'new_or_old_job' => 'string',
            'diaofjob' => 'string|max:255',
            'coating_length_of_job' => 'string|max:255',
            'total_length_of_job' => 'string|max:255',
            'weight_of_job' => 'nullable|string|max:255',
            'drawing' => 'string|in:yes,no',
            'photo' => 'string|in:yes,no',
            'require_customization' => 'nullable|string',
            'company_name' => 'nullable|string|max:255',
            'contact_person_name' => 'nullable|string|max:255',
            'contact_no' => 'nullable|string|regex:/^[0-9]{0,20}$/',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'remarks' => 'nullable|string',
        ]);

        Mail::to('vrushab@puratech.in')->send(new EnquiryFormMail($validatedData));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function enquiry()
    {
        return view('dashboards.enquiry');
    }

    public function saveform(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'message' => 'required',
        ]);

        Mail::to('moin@puratech.in')->send(new ContactFormMail($validatedData));

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
