<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function registerCustomer()
    {
        return view('frontEnd.customer.register-customer');
    }

    public function saveCustomer(Request $request)
    {
        Customer::saveCustomer($request);
        return redirect()->route('home');
    }

    public function loginCustomer()
    {
        return view('frontEnd.customer.login-customer');
    }

    public function loginCustomerCheck(Request $request)
    {
        $customerInfo = Customer::where('email', $request->user_name)
            ->orWhere('phone', $request->user_name)
            ->first();

//        dd($customerInfo);

        if ($customerInfo) {
            $existingPassword = $customerInfo->password;

            if (password_verify($request->password, $existingPassword)) {
                session()->put('customerId', $customerInfo->id);
                session()->put('customerName', $customerInfo->customer_name);

//                dd(session()->all());
                return redirect()->route('home');
            } else {
                return back()->with('message', 'Wrong password');
            }
        } else {
            return back()->with('message', 'Wrong email or password');
        }
    }

    public function logoutCustomer()
    {
        Session::forget('customerId');
        Session::forget('customerName');
        return back();
    }
}









