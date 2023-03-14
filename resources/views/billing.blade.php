@extends('layouts.app')
@include('sidebar')
@include('header')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/billing.css') }}">
@endsection

@section('content')


<div class="container">
    <div class="row" id="billing_main">
        <h1 class="col text-success my-5  text-start md-5">Billing Information</h1>
    </div>

    <div class="row">
        <div class="col-1 mt-2" id="status"> 
            <h6 class>Status</h6>
        </div>
        <div class="col-1 ms-2">
            <div class="dropdown" id="dropdown1">
                <a class="btn btn dropdown-toggle border border- border border-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    All
                </a>
            </div>
        </div>

        <div class="col-lg-4 " id="search1">
            <input type="search" class="form-control border border-dark ms-2" placeholder="Search" />
        </div>

        <div class="col-3">

        </div>

        <div class="col-lg-4 col-3 d-flex value-style">
            <div class="col-lg-8 ms-2 due-class">
                <p class="due-class ms-2 mt-1 " id="due">Total Due Amount:</p>
            </div>
            <div class="col-lg-4 col-3 mt-2 fs-5 text-danger" id="aud2600">
                <p>AUD 2600</p>
            </div>
        </div>
          

    </div>

    <div class="row table-heading fs-7 ">
        <div class="col-lg-1 col-3">Photo</div>
        <div class="col-lg-2 col-3 ms-4">Application ID</div>
        <div class="col-lg-1 col-3 ms-4">Car</div>
        <div class="col-lg-2 col-3 ms-3 ">Total Value</div>
        <div class="col-lg-2 col-3 ms-4">Paid Amount</div>
        <div class="col-lg-3 col-3">Remain Amount</div>
    </div>
  

    <div class="row border border-dark rounded-3 mt-3 col-heading fs-7" id="billingbox">
        <div class="col-lg-1 col-3 p-0 image-cart">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="image rounded">
        </div>
        <div class="col-lg-2 col-1 my-auto col app-id">
            <p class="text-start px-4">S1047</p>
        </div>
        <div class="col-1 my-auto car">
            <p class="text-start px-4 ms-4">BMW</p>
        </div>
        <div class="col-2 my-auto total-value">
            <p class="text-start px-3 ms-5 ">Aud 1800</p>
        </div>
        <div class="col-2 px-1 my-auto paid-amount">
            <p class="text-start  d-grid   justify-content-md-end  px-1 me-4 ">Aud 500</p>
        </div>
        <div class="col-2 my-auto remain-amount">
            <p class="text-start d-grid  justify-content-md-end px-1 me-4  ">Aud 1300</p>
        </div>
        <div class="col my-auto">
            <div class="row status d-flex align-items-center">
                   
 
                <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                    <button type="button" class="btn btn-danger me-md-2 fs-6 " id="paynow">
                        <p>Pay now</p>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <div class="row border border-dark rounded-3  mt-3 col-heading fs-7" id="billingbox">
        <div class="col-1 p-0 image-cart">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="image rounded">
        </div>
        <div class="col-2 my-auto col app-id">
            <p class="text-start px-4">S1047</p>
        </div>
        <div class="col-1 my-auto car">
            <p class="text-start px-4 ms-4">BMW</p>
        </div>
        <div class="col-2 my-auto total-value">
            <p class="text-start px-3 ms-5 ">Aud 1800</p>
        </div>
        <div class="col-2 px-1 my-auto paid-amount">
            <p class="text-start  d-grid   justify-content-md-end  px-1 me-4 ">Aud 500</p>
        </div>
        <div class="col-2 my-auto remain-amount">
            <p class="text-start d-grid  justify-content-md-end px-1 me-4  ">Aud 1300</p>
        </div>
        <div class="col my-auto">
            <div class="row status d-flex align-items-center">
                   

            <div class="col-3 my-auto">
         
                <div class="text-success fw-bold payment-method-success  fs-6 md-5 px-5 mt-4" id="paid">
                    <p>Paid</p>
                </div>
          
        </div>
 
             
            </div>
        </div>
    </div>

    <div class="row border border-dark rounded-3  mt-3 col-heading fs-7" id="billingbox">
        <div class="col-1 p-0 image-cart">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="image rounded">
        </div>
        <div class="col-2 my-auto col app-id">
            <p class="text-start px-4">S1047</p>
        </div>
        <div class="col-1 my-auto car">
            <p class="text-start px-4 ms-4">BMW</p>
        </div>
        <div class="col-2 my-auto total-value">
            <p class="text-start px-3 ms-5 ">Aud 1800</p>
        </div>
        <div class="col-2 px-1 my-auto paid-amount">
            <p class="text-start  d-grid   justify-content-md-end  px-1 me-4 ">Aud 500</p>
        </div>
        <div class="col-2 my-auto remain-amount">
            <p class="text-start d-grid  justify-content-md-end px-1 me-4  ">Aud 1300</p>
        </div>
        <div class="col my-auto">
            <div class="row status d-flex align-items-center">
                   
 
                <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                    <button type="button" class="btn btn-danger me-md-2 fs-6 " id="paynow">
                        <p>Pay now</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection