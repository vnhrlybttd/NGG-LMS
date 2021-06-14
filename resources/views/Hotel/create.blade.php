@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-flex">
            <div>
                <h2 style="color:#008349;"><i class="fas fa-hotel"></i> Hotel</h2>
            </div>
            <div class="ml-auto"> <a class="btn btn-primary" href={{route('Hotel.index')}} id="createNewProduct"> <i
                        class="fas fa-arrow-circle-left"></i> Go Back</a> </div>
        </div>
        <hr>

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

           
        <form action="{{ route('Hotel.store') }}" method="POST" enctype="multipart/form-data" runat="server">
            @csrf

            <div class="row">
                <fieldset class="col-lg-6" id="hotel-info">
                    <legend class="pl-3 text-success">Hotel Information <i class="fas fa-info-circle"></i></legend>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-white">Hotel Name</label>
                                    <input type="text" class="form-control" name="hotel_name">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Hotel Address</label>
                                    <input type="text" class="form-control" name="hotel_address">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Hotel Phone Number</label>
                                    <input type="text" class="form-control" name="hotel_number">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Hotel Website</label>
                                    <input type="text" class="form-control" name="hotel_website">
                                </div>
                            </div>
                        </div>
                    </div>

                </fieldset>


                <fieldset class="col-lg-6 hotel-picture">
                    <legend class="pl-3 text-success">Hotel Photo <i class="fas fa-camera"></i></legend>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Hotel Image</label>
                            <input type="file" class="form-control" name="hotel_image" id="hotel_image">
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Preview</label>
                            <div class="card" style="width: 18rem;">
                                <img src="#" class="img-fluid" alt="&nbsp Required Image" id="preview_image">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>


            <hr class="mb-3">

            <div class="row justify-content-end">
                <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview_image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#hotel_image").change(function () {
            readURL(this);
        });

    </script>

    @endsection
