@extends('layouts.app')
@section('content')

<div class="d-flex">
    <div>
        <h2 style="color:#008349;"><i class="fas fa-file-contract"></i> Bills</h2>
    </div>
    <div class="ml-auto">
        <a class="btn btn-primary" id="createNewProduct" href="{{url('PropertyListing/'.$id.'/Units/RentalInfo/'.$ids)}}"> <i
                class="fas fa-arrow-circle-left"></i> Go Back</a>
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
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-receipt"></i> Bills
        </li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-medical"></i> Create Bills
        </li>
    </ol>
</nav>

@foreach ($table as $view)
{{$view->room_name}}
@endforeach


@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('PropertyListing/Units/RentalInfo/Store',$ids) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @foreach ($table as $view)
    <input class="form-control" name="id_link_rooms" value="{{$view->id}}" hidden>
    @endforeach

    <div class="row">



        <fieldset class="col-lg-12 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-calendar-alt"></i> Date</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="date" class="form-control" name="occupants_name" required id="datepicker">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>



        <fieldset class="col-lg-6 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-water "></i> Water Bill</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Subscriber Name</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Upload Photo</label>
                            <input type="file" class="form-control" name="occupants_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Total Amount</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="col-lg-6 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-bolt "></i> Electricity Bill</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Subscriber Name</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Upload Photo</label>
                            <input type="file" class="form-control" name="occupants_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Total Amount</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="col-lg-6 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-file-invoice "></i> Association Dues</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="occupants_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Total Amount</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="col-lg-6 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-broom "></i> Housekeeping</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="occupants_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Housekeeping Fee</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="col-lg-6 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-tshirt "></i> Laundry</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="occupants_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Total Amount</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="col-lg-6 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-plus-square "></i> Others</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Description</label>
                            <textarea type="text" class="form-control" name="occupants_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="occupants_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Total Amount</label>
                            <input type="text" class="form-control" name="occupants_name" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>



    </div>






    <div class="row justify-content-end mt-2 mb-5">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>

</form>




@endsection
