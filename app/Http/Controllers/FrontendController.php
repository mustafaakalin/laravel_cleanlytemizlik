<?php

namespace App\Http\Controllers;

use Mary\Traits\Toast;
use App\Models\Contact;
use App\Models\Reservation;
use Illuminate\Http\Request;

class FrontendController extends Controller
{    
    
    // Use this trait 
    use Toast;
    
    public function home()
    {
        $sliders = \App\Models\Slider::where('status', 'active')->get();
        $teams = \App\Models\Team::all();
        $testimonials = \App\Models\Testimonial::all();
        return view('frontend.home' ,[
           'sliders' => $sliders,
           'teams' => $teams,
           'testimonials' => $testimonials,

        ]);
    }

    public function about()
    {
        $abouts = \App\Models\About::firstOrFail();
        return view('frontend.about',
    [
        'abouts' => $abouts,
    ]
);
    }

    public function team()
    {
        $teams = \App\Models\Team::all();
        return view('frontend.team', 
        [
            'teams' => $teams
        ]);
    }

    public function completed_jobs()
    {
        $completedjobs = \App\Models\Completedjob::all()->sortByDesc('created_at');
        return view('frontend.completed_jobs',[

            'completedjobs' => $completedjobs
        ]
    );
    }

    public function completed_job($slug)
    {
        $completedjob = \App\Models\Completedjob::where('slug', $slug)->firstOrFail();
        return view('frontend.completed_job' , [
            'completedjob' => $completedjob,
        ]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contact_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'string|required',
            'lastname' => 'string|required',
            'company' => 'string|required',
            'email' => 'email|required',
            'country' => 'integer|required',
            'phone' => 'integer|required',
            'message' => 'string|required',
        ]);

        $contact = Contact::create([
        
            'name' => $request->name,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        $contact->save();

        return redirect()->back()->with('modal', 'Your message has been sent successfully.');
    }

    public function reservation()
    {
        return view('frontend.reservation');
    }

    public function reservation_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'string|required',
            'lastname' => 'string|required',
            'cleantype' => 'string|required',
            'company' => 'string|nullable',
            'email' => 'email|nullable',
            'country' => 'integer|required',
            'phone' => 'integer|required',
            'address' => 'string|required',
        ]);

        $reservation = Reservation::create([
        
            'name' => $request->name,
            'lastname' => $request->lastname,
            'cleantype' => $request->cleantype,
            'company' => $request->company,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        $reservation->save();

        return redirect()->back()->with('modal', 'Your Reservation has been sent successfully. 1 saat içinde geri dönüş sağlanacaktır.');
    }
}
