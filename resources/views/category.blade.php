@extends('layouts.main')
@push('title')
<title>Category page</title>
@endpush

@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class=" text-center"><i class="fa fa-solid fa-layer-group"></i>Category</h1>
</div>

<!-- products -->

<section class="my-5">
      <div class="container ">
          <div class="row theme-product">
             
    
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"><img src="{{ asset('assets/products/1.jpg') }}" class="card-img-top" alt="pro1"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Campus
                                  Shoes</a></h6>
                          <h5 class="card-title text-center">₹ 499.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/2.jpg') }}" class="card-img-top" alt="pro2"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple
                                  Watches</a></h6>
                          <h5 class="card-title text-center">₹ 1499.00</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/3.jpg') }}" class="card-img-top" alt="pro3"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike
                                  caps</a></h6>
                          <h5 class="card-title text-center">₹ 799.00</h5>
                      </div>
                  </div>
              </div>

              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/4.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                  Chair</a></h6>
                          <h5 class="card-title text-center">₹ 1399.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/5.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                  Chair</a></h6>
                          <h5 class="card-title text-center">₹ 1399.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/6.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                  Chair</a></h6>
                          <h5 class="card-title text-center">₹ 1399.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/7.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                  Chair</a></h6>
                          <h5 class="card-title text-center">₹ 1399.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/8.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                  Chair</a></h6>
                          <h5 class="card-title text-center">₹ 1399.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/9.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                  Chair</a></h6>
                          <h5 class="card-title text-center">₹ 1399.00</h5>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 mb-4">
                  <div class="card">
                      <a href="#"> <img src="{{ asset('assets/products/10.jpg') }}" class="card-img-top" alt="pro4"></a>
                      <div class="card-body">
                          <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden
                                  Chair</a></h6>
                          <h5 class="card-title text-center">₹ 1399.00</h5>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </section>

@endsection
