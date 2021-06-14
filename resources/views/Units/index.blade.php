@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-flex">
            <div>
                <h2 style="color:#008349;"><i class="fas fa-building"></i> Units</h2>
            </div>
            <div class="ml-auto">
                <a class="btn btn-success" href="{{url('PropertyListing/'.$id.'/Units/Create')}}"> <i
                        class="fas fa-plus-circle"></i> Create New Units</a>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home" style="color:darkgoldenrod">&nbsp;</i><a
                        href="{{'/home'}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-network-wired"></i> Property Leasing
                </li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-building"></i> Units
                </li>
            </ol>
        </nav>

        <div class="row mb-2">
            <div class="col">
                <a class="btn btn-primary" id="createNewProduct" href={{route("PropertyListing.index")}}> <i
                        class="fas fa-arrow-circle-left"></i> Go Back</a>
            </div>
        </div>

        <hr> 

        <div class="row">
            <div class="col-lg-12  table-responsive-lg">
        <table class="table table-bordered text-center" id="PropertyTable">
            <thead>
                <tr>
                  
                    <th>No.</th>
                    <th>Unit/Room No.</th>
                    <th colspan="1">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $view)
                    <tr>
                    <td>{{$view->id}}</td>
                    <td>{{$view->room_name}}</td>
                    <td>
                        <a href="{{url('PropertyListing/'.$id.'/Units/Bills',$view->id)}}" class="btn btn-primary text-white"><i class="fas fa-money-bill"></i> Bills</a>
                    <a href="{{url('PropertyListing/'.$id.'/Units/RentalInfo',$view->id)}}"class="btn btn-success text-white"><i class="fas fa-money-bill"></i> Rental Info</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
    </div>


   


    <script>
        $(document).ready(function () {
            $('#PropertyTable').DataTable({

            });
        });

    </script>

    <script>

$(document).ready(function(){
    $('[rel="tooltip"]').tooltip({trigger: "hover"});
});

    </script>




</div>
</div>


@endsection
