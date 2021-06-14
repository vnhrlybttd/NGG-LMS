@extends('layouts.app')
@section('content')

<div class="d-flex">
    <div>
        <h2 style="color:#008349;"><i class="fas fa-building"></i> Property Leasing</h2>
    </div>
    <div class="ml-auto">
        <a class="btn btn-primary" id="createNewProduct" href={{route("PropertyListing.index")}}> <i
                class="fas fa-arrow-circle-left"></i> Go Back</a>
    </div>
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home" style="color:darkgoldenrod">&nbsp;</i><a
                href="{{'/home'}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-building"></i> Property Leasing
        </li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus-circle"></i> Create New
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

<form action="{{ route('PropertyListing.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <fieldset class="col-lg-6 col-md-6 col-xs-12 mb-2">
            <legend class="pl-3 text-dark"><i class="fas fa-user-tie "></i> Lessor Data</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Full Name</label>
                            <input type="text" class="form-control" name="ld_full_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Address</label>
                            <textarea type="text" class="form-control" name="ld_address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Email</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            <input type="email" class="form-control" name="ld_email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Phone Number</label> 
                            <div class="input-group-prepend">
                                <span class="input-group-text">+63</span>
                                <input type="number" class="form-control" name="ld_phone_number" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Website</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            <input type="text" class="form-control" name="ld_website" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Company Name</label>
                            <input type="text" class="form-control" name="ld_company_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">TIN Number</label>
                            <input type="text" class="form-control" name="ld_tin_number" required id="tbNum" onkeyup="addHyphen(this)" maxlength="11">
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="col-lg-6 col-md-6 col-xs-12 mb-2">
            <legend class="pl-3 text-dark"><i class="fas fa-user-tie "></i> Lessee Data</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Full Name</label>
                            <input type="text" class="form-control" name="le_full_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Address</label>
                            <textarea type="text" class="form-control" name="le_address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Email</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            <input type="email" class="form-control" name="le_email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Phone Number</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">+63</span>
                                <input type="number" class="form-control" name="le_phone_number" required pattern="[0-9]*">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Website</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            <input type="text" class="form-control" name="le_website" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Company Name</label>
                            <input type="text" class="form-control" name="le_company_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">TIN Number</label>
                            <input type="text" class="form-control" name="le_tin_number" required id="tbNum2" onkeyup="addHyphen(this)" maxlength="11">
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>



        <fieldset class="col-lg-6 col-md-6 col-xs-12">
            <legend class="pl-3 text-dark"><i class="fas fa-user-secret"></i> Agent</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Full Name</label>
                            <input type="text" class="form-control" name="ra_full_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Address</label>
                            <textarea type="text" class="form-control" name="ra_address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Email</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            <input type="email" class="form-control" name="ra_email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Phone Number</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">+63</span>
                                <input type="number" class="form-control" name="ra_phone_number" required pattern="[0-9]*"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="col-lg-6 col-md-6 col-xs-12">
            <legend class="pl-3 text-dark"><i class="fas fa-building"></i> Property Info</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Building Name</label>
                            <input type="text" class="form-control" name="building_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Building Address</label>
                            <textarea type="text" class="form-control" name="building_address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Type of Property</label>
                            <select class="form-control" required name="property_type">
                                <option selected="true" disabled>Choose a Type</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Condominium">Condominium</option>
                                <option value="Hotel">Hotel</option>
                                <option value="Housing">Housing</option>
                            </select>
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



<script>

$(document).ready(function () {
        $('#tbNum2').keyup(function (event) {
            addHyphen (this);
        });
    });


	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,3}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }

    

</script>


@endsection
