@extends('layouts.main')
@push('title')
<title>User Login</title>
@endpush

@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class=" text-center text-secondary"><i class="fa fa-solid fa-user"></i> User Login </h1>
</div>

<section>
    <div class="container ">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div> <img src="{{ asset('assets/images/register.jpg') }}" class="rounded-3 img-fluid"/> </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <form>
                                    <div class="mb-3">
                                        <div class="form-text mb-2">Please Enter Your Mobile Number</div>
                                        <input type="email" class="form-control form-control-lg" placeholder="+91">
                                       
                                    </div>
                               
                                    <a href="{{ url('register1') }}" type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">Request a OTP</a>
                                    <div class="text-center py-5 my-5">Don't have an account? <a href="{{ url('register') }}" class="text-decoration-none">SignUp</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>




@endsection