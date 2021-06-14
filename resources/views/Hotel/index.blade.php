@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-flex">
            <div>
                <h2 style="color:#008349;"><i class="fas fa-hotel"></i> Hotel</h2>
            </div>
            <div class="ml-auto"> <a class="btn btn-success" href={{route('Hotel.create')}} id="createNewProduct"> <i
                        class="fas fa-plus-circle"></i> Create New Hotel</a> </div>
        </div>
        <hr>



    </div>


    
        @asyncWidget('hotel_branches')
    



<!--
    <div class="row">

        <div class="col-xs-3">
            <div class="card" style="width: 18rem;">
                <img src="{{url("img/hotel.jpg")}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="hotel_name"></h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">More Details</a>
                </div>
            </div>
        </div>

    </div>
-->

</div>
</div>


@endsection
