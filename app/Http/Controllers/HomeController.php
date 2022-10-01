<?php

namespace App\Http\Controllers;

use App\Models\Aggrement;
use App\Models\AppPassenger;
use App\Models\Carrer;
use App\Models\CaseStudy;
use App\Models\ContactU;
use App\Models\Dispatcher;
use App\Models\Driver;
use App\Models\Fleet;
use App\Models\PassengersAppsBudget;
use App\Models\Position;
use App\Models\Price;
use App\Models\PricingProperty;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Strategy;
use App\Models\Support;
use App\Models\UberClone;
use App\Models\WebBooker;
use App\Models\WebPortal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.main.home');
    }
    public function driver_2()
    {
        $driver = Driver::find(1);
        $strategies = Strategy::all();
       
      

        return view('front.driver-2.home', compact('driver', 'strategies'));
    }

    public function fleets()
    {
        $fleets=Fleet::find(1);
       
        return view('front.fleets.home',compact('fleets'));
    }

    public function dispatches()
    {
        $dispatches=Dispatcher::find(1);
        $driver = Driver::find(1);
        $solutions=Solution::all();
        return view('front.dispatcher.home',compact('dispatches','solutions','driver'));
    }
    public function web_portal()
    {
        $web_portal=WebPortal::find(1);
        return view('front.web_portal.home',compact('web_portal'));
    }

    public function passenger_app()
    {
        $passenger_app=AppPassenger::find(1);
        $passenger_app_budgets=PassengersAppsBudget::all();

        return view('front.passenger_app.home',compact('passenger_app','passenger_app_budgets'));
    }
    
    public function web_booker()
    {
        $web_booker=WebBooker::find(1);
        return view('front.web_booker.home',compact('web_booker'));
    }
    
    public function uber_clone()
    {
        $uber_clone=UberClone::find(1);
        return view('front.uber_clone.home',compact('uber_clone'));
    }

    

    public function fleet_price()
    {
        $prices=Price::all();
        $price_proberities=PricingProperty::all();
        $fleets=Fleet::find(1);
        return view('front.fleet_pricing.home',compact('prices','price_proberities','fleets'));
    }

    public function carrers()
    {
        $carrers=Carrer::find(1);
        $positions=Position::all();
       $services=Service::all();
        return view('front.carrers.home',compact('carrers','positions','services'));
    }

    
    public function contact_us()
    {
        $contact_us=ContactU::find(1);
    
        return view('front.contact_us.home',compact('contact_us'));
    }

    public function support()
    {
        $support=Support::find(1);
    
        return view('front.support.home',compact('support'));
    }

    public function download_free_app()
    {
        
    
        return view('front.download_page.home');
    }
    
}
