<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Rooms;
use Alert;

class RoomsController extends Controller
{
    public function index($id){

       


        if(session('success_message')){
            Alert::success('Succcess',session('success_message'));
        }

        $table = Rooms::latest()->where('id_link_property_listing','=',$id)->get();

        
        //dd($id);

        return view('Units.index',compact('id','table'));
    }


    public function create($id){

        //dd($id);
        return view('Units.create',compact('id'));
    }

    public function store(Request $request,$id){
       

        $request->validate([
            'room_name' => 'required',
            'id_link_property_listing' => 'required'
        ]);

        Rooms::create($request->all());

        return redirect()->route('Rooms.index',compact('id'))
        ->withSuccessMessage('Unit Created Successfully!');

        

    }
}
