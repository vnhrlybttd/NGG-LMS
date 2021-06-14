@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-flex">
            <div>
                <h2 style="color:#008349;"><i class="fas fa-network-wired"></i> Property Leasing</h2>
            </div>
            <div class="ml-auto">
                <a class="btn btn-success" href={{route("PropertyListing.create")}}> <i class="fas fa-plus-circle"></i>
                    Create New</a>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home" style="color:darkgoldenrod">&nbsp;</i><a
                        href="{{'/home'}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-network-wired"></i> Property Leasing
                </li>
            </ol>
        </nav>


        <br>



        <div class="row">
            <div class="col-lg-12  table-responsive-lg">
                <table class="table table-bordered text-center" id="PropertyTable">
                    <thead>
                        <tr>

                            <th>No.</th>
                            <th>Building Name</th>
                            <th>Lessor Name</th>
                            <th>Phone Number</th>
                            <th colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($property as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->building_name}}</td>
                            <td>{{$item->ld_full_name}}</td>
                            <td>{{$item->ld_phone_number}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#a{{$item->id}}" rel="tooltip" data-placement="top"
                                    title="Property Information">
                                    <i class="fas fa-info-circle"></i>
                                </button>

                                <a class="btn btn-success text-white"
                                    href="{{action('RoomsController@index',$item->id)}}" rel="tooltip"
                                    data-placement="top" title="Unit Information"><i
                                        class="fas fa-clipboard-list"></i></a>
                                    

                                        <a class="btn btn-info text-white"
                                    href="{{action('PropertyListingController@edit',$item->id)}}" rel="tooltip"
                                    data-placement="top" title="Edit Property"><i
                                        class="fas fa-edit"></i></a>

                                    
                                    </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="a{{$item->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$item->building_name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">


                                            <div class="col-lg-6">
                                                <strong><i class="fas fa-user-tie "></i> Lessor Information</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->ld_full_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea
                                                        class="form-control text-dark bg-white border border-primary"
                                                        placeholder="{{$item->ld_address}}" readonly></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->ld_email}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->ld_phone_number}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->ld_website}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->ld_company_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>TIN Number</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->ld_tin_number}}" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <strong><i class="fas fa-user-tie "></i> Lesse Information</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->le_full_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea
                                                        class="form-control text-dark bg-white border border-primary"
                                                        placeholder="{{$item->le_address}}" readonly></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->le_email}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->le_phone_number}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->le_website}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->le_company_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>TIN Number</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$item->le_tin_number}}" readonly>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <strong><i class="fas fa-user-secret"></i> Agent</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control text-dark bg-white border border-info"
                                                        value="{{$item->ra_full_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control text-dark bg-white border border-info"
                                                        placeholder="{{$item->ra_address}}" readonly></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control text-dark bg-white border border-info"
                                                        value="{{$item->ra_email}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input class="form-control text-dark bg-white border border-info"
                                                        value="{{$item->ra_phone_number}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <strong><i class="fas fa-building"></i> Property Info</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Building Name</label>
                                                    <input class="form-control text-dark bg-white border border-success"
                                                        value="{{$item->building_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Building Address</label>
                                                    <textarea
                                                        class="form-control text-dark bg-white border border-success"
                                                        placeholder="{{$item->building_address}}" readonly></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <input class="form-control text-dark bg-white border border-success"
                                                        value="{{$item->property_type}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
            $(document).ready(function () {
                $('[rel="tooltip"]').tooltip({
                    trigger: "hover"
                });
            });

        </script>




    </div>
</div>


@endsection
