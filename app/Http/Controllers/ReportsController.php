<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\{Vendors, VendorsSettings, VendorsServices, User, Carts, Bookings, BookingsHistories, CustomerAddress, VendorsServicesReviews};

class ReportsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        if (Auth::user()->user_type == '1') {

            $VendorsServices = VendorsServices::count();
            $Vendors = Vendors::count();
            $Bookings = Bookings::count();
            $BookingsSales = Bookings::sum('bookings_payout');

            $CaterersVendorsCount = Vendors::where('vendors_categories', '1')->count();
            $PhotoVendorsCount = Vendors::where('vendors_categories', '2')->count();
            $VideoVendorsCount = Vendors::where('vendors_categories', '3')->count();
            $EnterVendorsCount = Vendors::where('vendors_categories', '4')->count();
            $HMVendorsCount = Vendors::where('vendors_categories', '5')->count();
            $ProductVendorsCount = Vendors::where('vendors_categories', '6')->count();
            $TransportVendorsCount = Vendors::where('vendors_categories', '7')->count();
            $FashionVendorsCount = Vendors::where('vendors_categories', '8')->count();

            return view('admin/reports',compact('VendorsServices','Vendors','Bookings','BookingsSales','CaterersVendorsCount','PhotoVendorsCount','VideoVendorsCount','EnterVendorsCount','HMVendorsCount','ProductVendorsCount','TransportVendorsCount','FashionVendorsCount'));

        }else{

            Auth::logout();   
        }
    }
}
