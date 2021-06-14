<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyListing;
use App\RentalInfo;
use DB;
use Alert;

class PropertyListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    

        if(session('success_message')){
            Alert::success('Succcess',session('success_message'));
        }

        $property = PropertyListing::latest()->get();

        
        return view('PropertyListing.index',compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PropertyListing.create');
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
            'ld_full_name' => 'required',
            'ld_address' => 'required',
            'ld_email' => 'required',
            'ld_website' => 'required',
            'ld_phone_number' => 'required',
            'ld_company_name' => 'required',
            'ld_tin_number' => 'required',
            
            'le_full_name' => 'required',
            'le_address' => 'required',
            'le_email' => 'required',
            'le_website' => 'required',
            'le_phone_number' => 'required',
            'le_company_name' => 'required',
            'le_tin_number' => 'required',

            'ra_full_name' => 'required',
            'ra_address' => 'required',
            'ra_email' => 'required',
            'building_name' => 'required',
            'property_type' => 'required',
            'building_address' => 'required'
        ]);

        PropertyListing::create($request->all());

        


        return redirect()->route('PropertyListing.index')
        ->withSuccessMessage('Property Created Successfully!');
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

        $id = PropertyListing::findOrFail($id);

        $table = PropertyListing::all();

        return view('PropertyListing.edit',compact('id','table'));
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
            'ld_full_name' => 'required',
            'ld_address' => 'required',
            'ld_email' => 'required',
            'ld_website' => 'required',
            'ld_phone_number' => 'required',
            'ld_company_name' => 'required',
            'ld_tin_number' => 'required',
            
            'le_full_name' => 'required',
            'le_address' => 'required',
            'le_email' => 'required',
            'le_website' => 'required',
            'le_phone_number' => 'required',
            'le_company_name' => 'required',
            'le_tin_number' => 'required',

            'ra_full_name' => 'required',
            'ra_address' => 'required',
            'ra_email' => 'required',
            'building_name' => 'required',
            'property_type' => 'required',
            'building_address' => 'required'
        ]);

        $id = PropertyListing::findOrFail($id);
        $id->update($request->all());

        return redirect()->route('PropertyListing.index')
        ->withSuccessMessage('Property Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PropertyListing::find($id)->delete();
     
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
