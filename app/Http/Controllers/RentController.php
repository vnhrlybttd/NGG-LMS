<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use App\RentalInfo;
use App\Rooms;
use Alert;
use App\PropertyListing;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index($id,$ids){

      
        

        $table = RentalInfo::latest()->where('id_link_rooms','=',$ids)->get();

        $rooms = Rooms::where('id','=',$ids)->get();

        $property = PropertyListing::where('id','=',$id)->get();
        
        if(session('success_message')){
            Alert::success('Succcess',session('success_message'));
        }

      
        return view ('RentalInfo.index',compact('id','ids','table','rooms','property'));
    }

    public function create($id, $ids){

     
        $table = Rooms::where('id','=',$ids)->get();

        


        return view ('RentalInfo.create',compact('id','ids','table'));
    }

    public function store(Request $request,$ids){


        $id = $request->id_link_rooms;
        $id = Rooms::findorFail($id);
        //dd($id);

        RentalInfo::create($request->all());
       
        
        return redirect()->route('RentalInfo.index',compact('id','ids'))
        ->withSuccessMessage('Rental Created Successfully!');
    }
}

