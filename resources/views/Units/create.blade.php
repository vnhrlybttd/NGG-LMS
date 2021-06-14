@extends('layouts.app')
@section('content')

<div class="d-flex">
    <div>
        <h2 style="color:#008349;"><i class="fas fa-building"></i> Units</h2>
    </div>
    <div class="ml-auto">
        <a class="btn btn-primary" id="createNewProduct" href={{route("Rooms.index",$id)}}> <i
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
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus-circle"></i> Create Units
        </li>
    </ol>
</nav>

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

<form action="{{ route('Rooms.store',$id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <fieldset class="col-lg-12">
            <legend class="pl-3 text-dark"><i class="fas fa-plus-circle "></i> Create Unit</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Unit Name/No.</label>
                            <input type="text" class="form-control" name="room_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" hidden>Unit Name/No.</label>
                            <input type="text" class="form-control" name="id_link_property_listing" required
                                value="{{$id}}" hidden>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
    </div>


    <div class="row justify-content-end mt-2 mb-5">
        <button class="btn btn-success">Submit</button>
    </div>

</form>




@endsection
