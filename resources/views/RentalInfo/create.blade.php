@extends('layouts.app')
@section('content')

<div class="d-flex">
    <div>
        <h2 style="color:#008349;"><i class="fas fa-building"></i> Rental Info</h2>
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
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-contract"></i> Rental Info
        </li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-file-medical"></i> Create Rental Info
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
        <fieldset class="col-lg-8 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-users "></i> Occupants</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Name of Occupants</label>
                            <textarea type="text" class="form-control" name="occupants_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Contact Number</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">+63</span>
                                <input type="text" class="form-control" name="occupants_contact_number" required maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Email</label>
                            <input type="email" class="form-control" name="occupants_email" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Date Moved In</label>
                            <input type="date" class="form-control" name="date_moved_in" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Years of Contract</label>
                            <input type="number" class="form-control" name="years_of_contract" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Copy of Contract</label>
                            <input type="file" class="form-control" name="copy_of_contract" required>
                        </div>

                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="col-lg-4 mt-2">
            <legend class="pl-3 text-dark"><i class="fas fa-users "></i> Broker</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Broker's Name</label>
                            <input type="text" class="form-control" name="brokers_name" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Contact</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">+63</span>
                                <input type="text" class="form-control" name="brokers_contact" required maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Email</label>
                            <input type="email" class="form-control" name="brokers_email" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Address</label>
                            <textarea type="text" class="form-control" name="brokers_address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Commission</label>
                            <input type="text" class="form-control" name="brokers_commission" required>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>



    </div>

    <div class="row mt-3">
        <div class="col-lg-12 text-center border border-primary p-2 bg-primary">
            <h2 class="text-white"><i class="fas fa-cash-register"></i> Payment Method</h2>
        </div>
    </div>


    <fieldset class="col-lg-12 mt-2">
        <legend class="pl-3 text-dark"><i class="fas fa-grip-horizontal"></i> Choose Payment Method</legend>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-dark">Deposit</label>
                            <select class="form-control selectDeposit" required>
                                <option selected>Choose Payment Method</option>
                                <option value="CashDeposit">Cash</option>
                                <option value="CheckDeposit">Check</option>
                            </select>
                        </div>
                    </div>

                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="text-dark">Advance</label>
                            <select class="form-control selectAdvance" required>
                                <option selected>Choose Payment Method</option>
                                <option value="CashAdvance">Cash</option>
                                <option value="CheckAdvance">Check</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </fieldset>


    <div class="row mt-3">

        <fieldset class="col-lg-6 mt-2 CashDeposit box">
            <legend class="pl-3 text-dark"><i class="fas fa-money-bill-wave "></i> Deposit Cash</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Total Amount</label>
                            <input type="number" class="form-control" name="deposit_cash_amount">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Months</label>
                            <input type="number" class="form-control" name="deposit_cash_month">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="deposit_cash_date">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Payable To</label>
                            <input type="text" class="form-control" name="deposit_cash_payable_to">
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
 
        <fieldset class="col-lg-6 mt-2 CheckDeposit box">
            <legend class="pl-3 text-dark"><i class="fas fa-money-check-alt "></i> Deposit Check</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Bank Name</label>
                            <textarea type="text" class="form-control" name="deposit_check_bank_name"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Bank Branch</label>
                                <input type="text" class="form-control" name="deposit_check_branch">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Account Number</label>
                            <input type="email" class="form-control" name="deposit_check_account_number">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Months</label>
                            <input type="number" class="form-control" name="deposit_check_month">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="deposit_check_date">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Payable To</label>
                                <input type="text" class="form-control" name="deposit_check_payable_to">
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="col-lg-6 mt-2 CashAdvance boxs">
            <legend class="pl-3 text-dark"><i class="fas fa-money-bill-wave "></i> Advance Cash</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Total Amount</label>
                            <input type="number" class="form-control" name="advance_cash_amount">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Months</label>
                            <input type="number" class="form-control" name="advance_cash_month">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="advance_cash_date">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Payable To</label>
                            <input type="text" class="form-control" name="advance_cash_payable_to">
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>

        <fieldset class="col-lg-6 mt-2 CheckAdvance boxs">
            <legend class="pl-3 text-dark"><i class="fas fa-money-check-alt "></i> Advance Check</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark">Bank Name</label>
                            <textarea type="text" class="form-control" name="advance_check_bank_name"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Bank Branch</label>
                                <input type="text" class="form-control" name="advance_check_branch">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Account Number</label>
                            <input type="email" class="form-control" name="advance_check_account_number">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Months</label>
                            <input type="number" class="form-control" name="advance_check_month">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Date</label>
                            <input type="date" class="form-control" name="advance_check_date">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Payable To</label>
                                <input type="text" class="form-control" name="advance_check_payable_to">
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






<script>
    $(document).ready(function () {
        $(".selectDeposit").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });

</script>

<script>
    $(document).ready(function () {
        $(".selectAdvance").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".boxs").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".boxs").hide();
                }
            });
        }).change();
    });

</script>


@endsection
