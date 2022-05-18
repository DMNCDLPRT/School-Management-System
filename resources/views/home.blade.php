@extends('students.layout')
@section('content')
<div class="row">
    <div class="col-md p-lg-5 my-5">
      <h1 class="display-4 font-weight-normal">School Management System</h1>
      <p class="lead font-weight-normal">manage your school's daily administrative and academic operations seamlessly from a remote location.</p>
      <a class="btn btn-outline-secondary" href="#">Get Started</a>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Student Information</br> System</h2>
            <p class="lead">Gain access to admission details and personal information of students within just seconds.</p>
          </div>
          <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Online Registration Management</h2>
            <p class="lead">The software will make the steps like form submission and admission tracking extremely easy.</p>
          </div>
          <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
    </div>
</div>

@endsection