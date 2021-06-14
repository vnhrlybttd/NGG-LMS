@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-flex">
            <div>
                <h2 style="color:#008349;"><i class="fas fa-file-contract"></i> Rental Info</h2>
            </div>
            <div class="ml-auto">

                <a class="btn btn-success" href="{{url('PropertyListing/'.$id.'/Units/RentalInfo/'.$ids.'/Create')}}"> <i
                        class="fas fa-plus-circle"></i>
                    Create New</a>

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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-contract"></i> Rental Info
                </li>
            </ol>
        </nav>

        <div class="row mb-2">
            <div class="col-lg-2">
                <a class="btn btn-primary" id="createNewProduct" href="{{url('PropertyListing/'.$id.'/Units')}}"> <i
                        class="fas fa-arrow-circle-left"></i> Go Back</a>
            </div>
        </div>

        <hr>
        

        <div class="card">
            <div class="card-header">

                @foreach ($property as $view)
                <i class="fas fa-network-wired"></i> {{$view->building_name}}
                @endforeach

                @foreach ($rooms as $view)
                <i class="fas fa-building"></i> {{$view->room_name}}
                @endforeach
            </div>
            <div class="card-body">
       

       

       

        <div class="row mb-2">
            <div class="col-lg-12  table-responsive-lg">
                <table class="table table-bordered text-center" id="PropertyTable">
                    <thead>
                        <tr>

                            <th>#</th>
                            <th>Occupants</th>
                            <th>Years of Contract</th>
                            <th colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($table as $view)
                        <tr>
                            <td>{{$view->id}}</td>
                            <td>{{$view->occupants_name}}</td>
                            <td>{{$view->years_of_contract}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#a{{$view->id}}" rel="tooltip" data-placement="top"
                                title="Rent Information">
                                <i class="fas fa-info-circle"></i>
                            </button>

                            </td>

                             <!-- Modal -->
                        <div class="modal fade" id="a{{$view->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$view->building_name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <strong><i class="fas fa-user-tie "></i> Occupants</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Name of Occupants</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->occupants_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->occupants_contact_number}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->occupants_email}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Moved In</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->date_moved_in}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Moved Out</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->date_moved_out}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Years of Contract</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->years_of_contract}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <strong><i class="fas fa-user-tie "></i> Brokers</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Broker's Name</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->brokers_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->brokers_contact}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->brokers_email}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->brokers_address}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Commission</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->brokers_commission}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <strong><i class="fas fa-money-bill-wave"></i> Deposit Cash</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Total Amount</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_cash_amount}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Months</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_cash_month}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_cash_date}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Payable To</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_cash_payable_to}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <strong><i class="fas fa-money-bill-wave"></i> Advance Cash</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Total Amount</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_cash_amount}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Months</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_cash_month}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_cash_date}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Payable To</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_cash_payable_to}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <strong><i class="fas fa-money-check-alt"></i>  Deposit Check</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_check_bank_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bank Branch</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_check_branch}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Account Number</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_check_account_number}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Months</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_check_month}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_check_date}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Payable To</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->deposit_check_payable_to}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <strong><i class="fas fa-money-check-alt"></i> Advance Check</strong>
                                                <hr>
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_check_bank_name}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bank Branch</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_check_branch}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Account Number</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_check_account_number}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Months</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_check_month}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_check_date}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Payable To</label>
                                                    <input class="form-control text-dark bg-white border border-primary"
                                                        value="{{$view->advance_check_payable_to}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>


       
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
