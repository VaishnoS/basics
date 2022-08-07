<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::orderBy("customer_id", "desc")->get();
        return view('customer.customerList', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.customerform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->nickname = $request->nickname;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->state = $request->state;
        $customer->country = $request->country;
        $customer->password = Hash::make($request->password);
        $customer->save();
        if ($customer) {
            return redirect('customer')->with('message', 'Customer Add Successfully !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decrypt = Crypt::decryptString($id);
        $customer = Customer::find($decrypt);
        return view('customer.customerView', ['data' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decrypt = Crypt::decryptString($id);
        $customer = Customer::find($decrypt);
        return view('customer.customerEditForm', ['data' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $decrypt = Crypt::decryptString($id);
        $customer = Customer::find($decrypt);
        $customer->name = $request->name;
        $customer->nickname = $request->nickname;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->state = $request->state;
        $customer->country = $request->country;
        $customer->save();
        if ($customer) {
            return redirect('customer')->with('message', 'Customer Update Successfully !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decrypt = Crypt::decryptString($id);
        $customer = Customer::find($decrypt);
        $customer->delete();
        if ($customer) {
            return redirect()->back()->with('message', 'Customer Delete Successfully !!');
        }
    }
}
