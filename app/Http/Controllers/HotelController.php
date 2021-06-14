<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use DB;
use Alert;
use Validator,Redirect,Response,File;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
  
        if(session('success_message')){
            Alert::success('Succcess',session('success_message'));
        }

        $product = Hotel::latest()->get();
        return view('Hotel.index');
        
      
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        /*
        if (! $request->filled(['hotel_name'])) {
            alert()->error('Error', 'Hotel Name Required!');
            return back();
        }

        */

        $request->validate([
            'hotel_name' => 'required',
            'hotel_address' => 'required',
            'hotel_number' => 'required',
            'hotel_website' => 'required',
            'hotel_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
/*
        if ($files = $request->file('hotel_image')) {
            // Define upload path
            $destinationPath = public_path('/hotel_images/'); // upload path
         // Upload Orginal Image           
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
 
            $insert['image'] = "$profileImage";
         // Save In Database
             $imagemodel= new Hotel();
             $imagemodel->hotel_image="$profileImage";
             
        }

        */

        if($file   =   $request->file('hotel_image')) {
        $name = time().time().'.'.$file->getClientOriginalExtension();
        $target_path    =   public_path('/hotel_images/');
            if($file->move($target_path, $name)) {
                

                Hotel::create([
                    'hotel_name'=>$request->hotel_name,
                    'hotel_address'=>$request->hotel_address,
                    'hotel_number'=>$request->hotel_number,
                    'hotel_website'=>$request->hotel_website,
                    'hotel_image'=>$name
                ]);

            }
        }

        
        
        
        
        return redirect()->route('Hotel.index')
        ->withSuccessMessage('Hotel Created Successfully!');
    

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $type = [
            'Non-Faculty',
        ];


        $finds = Payslip::join('hr_employee', 'payslip.employee_id', '=', 'hr_employee.emp_pin')
        ->join('users','payslip.employee_id','=','users.emp_id')
        ->select(['payslip.*','hr_employee.*','users.*'])
        ->whereIn('type',$type)
        ->where('payslip','=', Crypt::decrypt($id))
        ->get();

        */
        return view('Hotel.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*
        $finds = Payslip::where('payslip', '=', Crypt::decrypt($id))->first();

        return view('payslip.edit',compact('finds','editPayslip','sss_table'));
        */
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
        /*
        $updatePayslip = Payslip::find($id);
        $updatePayslip->update($request->all());
        Alert::success('Update', 'Update Payslip Successfully');
        
        */
        return redirect()->route('Hotel.index')
        ->withUpdateMessage('Payslip Created Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
        Payslip::where('payslip', $id)->delete();
        Alert::success('Deleted', 'Payslip Delete Successfully!');
        */

        return redirect()->route('Hotel.index');
    }
}
