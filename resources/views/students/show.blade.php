@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Student Data</div>
    <div class="card-body">
          <div class="card-body">

            <div class="row">
              <h5 class="card-title col-sm-2">Student LRN :</h5> 
              <div class="col-sm-10">
                <h5>{{ $students->STUDENT_LRN }}</h5>
              </div>
            </div>
            <div class="row">
              <p class="card-text col-sm-2">First Name :</p> 
              <div class="col-sm-10">
                <p>{{ $students->FIRST_NAME }}</p>
              </div>
            </div>
            <div class="row">
              <p class="card-text col-sm-2">Middle Name :</p> 
              <div class="col-sm-10">
                <p> {{ $students->MIDDLE_NAME }}</p>
              </div>
            </div>
            <div class="row">
              <p class="card-text col-sm-2">Last Name : </p>
              <div class="col-sm-10">
                <p> {{ $students->LAST_NAME }}</p>
              </div>
            </div>
            <div class="row">
              <p class="card-text col-sm-2">Age : </p>
              <div class="col-sm-10">
                <p> {{ $students->AGE }}</p>
              </div>
            </div>
            <div class="row">
              <p class="card-text col-sm-2">Year Level : </p>
              <div class="col-sm-10">
                <p> {{ $students->YEAR_LEVEL }}</p>
              </div>
            </div>
            <div class="row">
              <p class="card-text col-sm-2">Section : </p>
              <div class="col-sm-10">
                <p> {{ $students->SECTION }}</p>
              </div>
    </div>
  </div>
</div>
@stop