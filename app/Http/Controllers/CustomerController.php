<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data['customer'] = DB::table('customers')->get();

        // dd($data);
        return view('customer.customer_list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('customer.customer_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'contact' => ['required', 'integer'],
            'address' => ['required', 'string'],
        ]);

        DB::table('customers')->insert([
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
        ]);

        session()->flash('success','Customer Record Created Successfully'); 
        return redirect('customer/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['customer'] = DB::table('customers')->where('id',$id)->first();
      return view('customer.customer_add')->with($data);
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

        $request->validate([
            'name' => ['required', 'string'],
            'contact' => ['required', 'integer'],
            'address' => ['required', 'string'],
        ]);

        DB::table('customers')->where('id',$id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
        ]);

        session()->flash('success','Customer Record Updated Successfully'); 
        return redirect('customer/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('customers')->where('id', $id)->delete();

        session()->flash('success','Customer Deleted Successfully'); 
        return redirect('customer/index');
    }

    // api function to get customer record against customer id
    public function get_customer_record($id)
    {
        header('Content-Type: application/json; charset=utf-8');
            
        $customer = DB::table('customers')->where('id',$id)->first();

        // if customer is found then return record with status of 200 else return record not found with stauts of 400
        if (!empty($customer)) {
            return response()->json([
                'success' => 'true',
                'status'  => 200,
                'message' => "Customer Details",
                'data'    => $customer
            ]);
        }
        else{
            return response()->json([
                'success' => 'true',
                'status'  => 400,
                'message' => "Customer Details",
                'data'    => "Record not found"
            ]);
        }
    }
}
