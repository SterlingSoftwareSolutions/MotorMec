@extends('layouts.app')
@include('sidebar')
@include('header')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/billing.css') }}">
@endsection

@section('content')


<div class="container">
    <div class="row billing-main">
        <h1 class="col text-success my-5  text-start">Billing Information</h1>
    </div>

    <div class="row mt-3 d-flex ">
        <div class="col-1 mt-2">
            <h6 class="status_class">Status</h6>
        </div>
        <div class="col-1 ms-2">
            <div class="dropdown" id="dropdown1">
                <a class="btn btn dropdown-toggle border border- border border-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    All
                </a>
            </div>
        </div>

        <div class="col-4 " id="search1">
            <input type="search" class="form-control border border-dark ms-2" placeholder="Search" />
        </div>

        <div class="col-3">

        </div>

        <div class="col-4 d-flex value-style">
            <div class="col-8 ms-2 due-class">
                <p class="due-class ms-2 mt-1 ">Total Due Amount:</p>
            </div>
            <div class="col-4  mt-2 fs-5 text-danger">
                <p>AUD 2600</p>
            </div>
        </div>

    </div>

    <div class="row table-heading fs-7 ">
        <div class="col-lg-1 col-2">Photo</div>
        <div class="col-lg-2 col-4">Application ID</div>
        <div class="col-lg-1 col-4">Car</div>
        <div class="col-lg-2 col-2">Total Value</div>
        <div class="col-lg-2 col-2">Paid Amount</div>
        <div class="col-lg-1 col-2">Remain Amount</div>

    </div>
    <div class="row border border-dark rounded-3  mt-3 col-heading fs-7">
        <div class="col-2 p-0 image-cart">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="image rounded">
        </div>
        <div class="col-2 my-auto col app-id">
    <p class="text-start">S1047</p>
</div>
        <div class="col-1 my-auto car">
            <p>BMW</p>
        </div>
        <div class="col-1 my-auto total-value">
            <p>Aud 1800</p>
        </div>
        <div class="col-1 px-1 my-auto paid-amount">
            <p>Aud 500</p>
        </div>
        <div class="col-2 my-auto remain-amount">
            <p>Aud 1300</p>
        </div>
        <div class="col-3 my-auto">
            <div class="row status d-flex align-items-center">

                <div class="col-auto my-auto payment-btn">
                    <button type="button" class="btn btn-danger fs-6" id="paynow">
                        <p>Pay now</p>

                    </button>
                </div>
            </div>
        </div>
    </div>



    <div class="row border border-dark rounded-3 mt-3 col-heading fs-7">
        <div class="col-2 p-0 image-cart">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="image rounded ">
        </div>
        <div class="col-2 my-auto px-5 app-id">
            <p class="col">S1047</p>
        </div>
        <div class="col-1 my-auto car">
            <p>BMW</p>
        </div>
        <div class="col-1 my-auto total-value">
            <p>Aud 1800</p>
        </div>
        <div class="col-1 px-1 my-auto paid-amount">
            <p>Aud 500</p>
        </div>
        <div class="col-2 my-auto remain-amount">
            <p>Aud 1300</p>
        </div>
        <div class="col-3 my-auto">
            <div class="row status">
                <div class="col-auto my-auto text-success fw-bold payment-method-success fs-6" id="paid">
                    <p>Paid</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row border border-dark rounded-3  mt-3 col-heading fs-7">
        <div class="col-2 p-0 image-cart">
            <img src="{{asset('images/Nissan-GTR-R35-2008-4.jpeg')}}" class="image rounded ">
        </div>
        <div class="col-2 my-auto px-5 app-id">
            <p>S1047</p>
        </div>
        <div class="col-1 my-auto car">
            <p>BMW</p>
        </div>
        <div class="col-1 my-auto total-value">
            <p>Aud 1800</p>
        </div>
        <div class="col-1 px-1 my-auto paid-amount">
            <p>Aud 500</p>
        </div>
        <div class="col-2 my-auto remain-amount">
            <p>Aud 1300</p>
        </div>
        <div class="col-3 my-auto">
            <div class="row status d-flex align-items-center">

                <div class="col-auto my-auto payment-btn">
                    <button type="button" class="btn btn-danger fs-6" id="paynow">
                        <p>Pay now</p>

                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection