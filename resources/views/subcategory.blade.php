@extends('layouts.main')
@push('title')
<title>subCategory page</title>
@endpush

@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class=" text-center"><i class="fa fa-solid fa-list"></i>Sub Category</h1>
</div>

<section class="my-5">
      <div class="container">
          <div class="row theme-product">
           
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="{{ url('category/electronics/tv/detail') }}"><img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro1"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="{{ url('category/electronics/tv/detail') }}" class="text-dark text-decoration-none">LED TV
                                  </a></h6>
                          <h5 class="card-title text-center">₹ 499.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro2"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple
                                  Tv</a></h6>
                          <h5 class="card-title text-center">₹ 1499.00</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro3"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">MI
                                  TV</a></h6>
                          <h5 class="card-title text-center">₹ 4999.00</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Lapcare TV
                                  </a></h6>
                          <h5 class="card-title text-center">₹ 11999.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Samsung TV
                                  </a></h6>
                          <h5 class="card-title text-center">₹ 15999.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Onida TV
                                  </a></h6>
                          <h5 class="card-title text-center">₹ 6999.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony TV
                                  </a></h6>
                          <h5 class="card-title text-center">₹ 19999.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Ome TV
                                  </a></h6>
                          <h5 class="card-title text-center">₹ 10999.00</h5>
                      </div>
                  </div>
              </div>



          </div>

      </div>
  </section>
@endsection
