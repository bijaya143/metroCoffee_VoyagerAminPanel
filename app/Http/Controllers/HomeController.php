<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Team,
    User,
    Sponser,
    Slider,
    Customer,
};


class HomeController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $users = User::all();
        $sponsers = Sponser::all();
        $sliders = Slider::all();
        //dd($sliders);
        return view('welcome', compact('teams', 'users', 'sponsers', 'sliders'));
    }

    public function storeCustomerDetails(Request $request)
    {
        $customerId = Customer::find($request->id);
        $request->validate([
            'name' => 'required|unique:customers,email,'.$customerId,
            'email' => 'required',
            'message' => 'required'
        ]);

        $customers = new Customer();

        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->message = $request->message;
        $customers->save();

        return back()->with('message', 'Message has been sent successfully!');

    }

    public function storeMember(Request $request)
    {
        $customerID = Customer::find($request->id);
        $request->validate([
            'email' => 'required|unique:customers,email,'.$customerID,
        ]);
        $members = new Customer();
        $members->email = $request->email;
        $members->save();
        return back()->with('added', 'Congratulations! New member added. ');
    }
}
