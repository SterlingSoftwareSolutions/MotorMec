@extends('layouts.app')
@include('sidebar')
@include('header')
@section('content')
<h1>Dashboard Content</h1>
<div class="dashboard">
  <div class="container1">
    <div class="card-name">
      <div class="box-name">
        <div class="percent">
          <svg>
            <circle cx="70" cy="70" r="70"></circle>
            <circle cx="70" cy="70" r="70"></circle>
          </svg>
          <div class="number">
            <p class="c-text">Total Applications</p> <span class="c-number">50</span>

          </div>
        </div>
      </div>
    </div>
    <div class="card-name">
      <div class="box-name">
        <div class="percent">
          <svg>
            <circle cx="70" cy="70" r="70"></circle>
            <circle cx="70" cy="70" r="70"></circle>
          </svg>
          <div class="number">
            <p class="c-text">Pending Applications</p> <span class="c-number">75</span>
          </div>
        </div>
      </div>
    </div>
    <div class="card-name">
      <div class="box-name">
        <div class="percent">
          <svg>
            <circle cx="70" cy="70" r="70"></circle>
            <circle cx="70" cy="70" r="70"></circle>
          </svg>
          <div class="number">
            <p class="c-text">Completed Applications</p> <span class="c-number">85</span>
          </div>
        </div>
      </div>
    </div>
    <div class="card-name">
      <div class="box-name">
        <div class="percent">
          <svg>
            <circle cx="70" cy="70" r="70"></circle>
            <circle cx="70" cy="70" r="70"></circle>
          </svg>
          <div class="number">
            <p class="c-text">Rejected Applications</p> <span class="c-number">25</span>
          </div>
        </div>
      </div>
    </div>
    <div class="card-name">
      <div class="box-name">
        <div class="percent">
          <svg>
            <circle cx="70" cy="70" r="70"></circle>
            <circle cx="70" cy="70" r="70"></circle>
          </svg>
          <div class="number">
            <p class="c-text">Draft Applications</p> <span class="c-number">25</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection

@include('footer')

