@extends('layouts.main')
@push('title')
<title>Register page</title>
@endpush

@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class=" text-center text-secondary"><i class="fa fa-solid fa-user"></i> User Register1 </h1>
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
                                        <!-- <div class="form-text mb-2">Please Enter Your Mobile Number</div> -->
                                        <input type="tel" class="form-control form-control-lg" placeholder="+91 9987654432">  
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-text mb-2"> Enter Your OTP</div>
                                        <input type="password" class="form-control form-control-lg" placeholder="******">  
                                    </div>
                               
                                    <button type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">SignUp</button>
                                    <div class="text-center py-5 my-5">Have an account? <a href="{{ url('login') }}" class="text-decoration-none">Login</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>




@endsection