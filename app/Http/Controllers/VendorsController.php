<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\{Vendors, VendorsSettings, VendorsServices, User, Carts, Bookings, BookingsHistories, CustomerAddress, VendorsServicesReviews};
use Illuminate\Support\Facades\{Mail, Crypt};

class VendorsController extends Controller
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

            $Vendors = Vendors::get();

            return view('admin/vendors',compact('Vendors'));

        }else{

            Auth::logout();   
        }
    }

    public function vendorstatus($id, $status)
    {   
        Vendors::where('vendors_id', Crypt::decrypt($id))->update([
            'vendors_status' => $status
        ]);

        $Vendors = Vendors::where('vendors_id',Crypt::decrypt($id))->first();
        //mail function to vendor
         $data = array('Vendors'=> $Vendors);
         if ($status == 1) {
            Mail::send('mails.accountapprove', $data, function($message) use ($Vendors) {
                $message->to($Vendors->vendors_email)->subject('Festivent - Account Approved');
                $message->from(env('EMAIL_SENT'),'Festivent');
           });
         }elseif($status == 0){
            Mail::send('mails.accountreject', $data, function($message) use ($Vendors) {
                $message->to($Vendors->vendors_email)->subject('Festivent - Account Rejected');
                $message->from(env('EMAIL_SENT'),'Festivent');
           });
         }
           

        return redirect('/vendors');
    }

    public function vendordetail($id)
    {
        $Vendors = Vendors::where('vendors_id',Crypt::decrypt($id))->first();
        
        return view('admin/vendor-detail',compact('Vendors'));
    }

    public function vendorservice($id)
    {
        $VendorsServices = VendorsServices::where('vs_vendor_id',Crypt::decrypt($id))->get();
        $Vendors = Vendors::where('vendors_id',Crypt::decrypt($id))->first();
        
        return view('admin/vendor-service',compact('VendorsServices','Vendors'));
    }

    public function vendorupdatelevel(Request $request)
    {  
        Vendors::where('vendors_id', $request->input('id'))->update([
            'vendors_level' => $request->input('vendors_level')
        ]);

        return redirect('/vendors');
    }
}
