@extends('layouts.app')
@include('sidebar')
@include('header')

@section('head')

@endsection

@section('content')
<div class="container">
    
    <h1 class="text-success text-start my-4">Billing Information</h1>
    <div class="row">
        <div class="col-auto text-start">
            <div class="row">
                <div class="col-auto my-auto">Status</div>
                <div class="col-auto btn dropdown-toggle border border-dark">All</div>
                <input class="col my-auto form-control border border-dark ms-2 my-auto" type="search"  placeholder="Search" />
            </div>
        </div>
 
        <div class="col text-end my-auto">
                <div class="col-auto">Total Due Amount: <span class="text-danger fw-bold fs-5"> AUD 2600 </span></div>
        </div>
    </div>

    <div class="row table-heading mt-4">
        <div class="col-md-1">Photo</div>
        <div class="col-md-2">Application ID</div>
        <div class="col-md-1">Car</div>
        <div class="col-md-2">Total Value</div>
        <div class="col-md-2">Paid Amount</div>
        <div class="col-md-4">Remain Amount</div>
    </div>

    <div class="row border border-dark rounded-3 mt-3 col-heading fs-7" >
        <div class="col-md-1 p-0">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="img-fluid rounded">
        </div>
        <div class="col-md-2 my-auto">
            <div>S1047</div>
        </div>
        <div class="col-md-1 my-auto">
            <div>BMW</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 1800</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 500</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 1300</div>
        </div>
        <div class="col-md-2 my-auto">
            <div class="my-auto btn btn-sm btn-danger">Pay Now</div>
        </div>
     </div>


     <div class="row border border-dark rounded-3 mt-3 col-heading fs-7" >
        <div class="col-md-1 p-0">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="img-fluid rounded">
        </div>
        <div class="col-md-2 my-auto">
            <div>S1047</div>
        </div>
        <div class="col-md-1 my-auto">
            <div>BMW</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 1800</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 1800</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>-</div>
        </div>
        <div class="col-md-2 my-auto text-success fw-bold px-4">
        <div>Paid</div>
        </div>
     </div>


     <div class="row border border-dark rounded-3 mt-3 col-heading fs-7" >
        <div class="col-md-1 p-0">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="img-fluid rounded">
        </div>
        <div class="col-md-2 my-auto">
            <div>S1047</div>
        </div>
        <div class="col-md-1 my-auto">
            <div>BMW</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 1800</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 500</div>
        </div>
        <div class="col-md-2 my-auto">
            <div>Aud 1300</div>
        </div>
        <div class="col-md-2 my-auto">
            <div class="my-auto btn btn-sm btn-danger">Pay Now</div>
        </div>
     </div>



</div>



@endsection