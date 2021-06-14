<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentalInfo;
use App\Rooms;
use Alert;
use App\PropertyListing;

class BillsController extends Controller
{
    public function index($id,$ids){

        return view ('Bills.index',compact('id','ids'));
    }
    public function create($id,$ids){

        $table = Rooms::where('id','=',$ids)->get();

        return view('Bills.create',compact('id','ids','table'));

    }
    public function store($id){
        
    }
}
