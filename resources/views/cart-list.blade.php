@extends('layouts.main')
@push('title')
<title>Cart List</title>
@endpush

@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class=" text-center text-secondary"><i class="fa fa-solid fa-cart-shopping"></i>Cart List</h1>
</div>

<!-- Cart list items -->
 <section>
<div class="container ">
    <div class="row my-5">
        <div class="col-lg-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col"><h4>Product</h4></th>
      <th scope="col"><h4>Price</h4></th>
      <th scope="col"><h4>Quantity</h4></th>
      <th scope="col"><h4>SubTotal</h4></th>
      <th scope="col"><h4>Remove</h4></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td ><div class="d-flex ">
        <div>
             <img src="{{ asset('assets/products/1.jpg') }}" style="width:70px;" class="rounded-3" />
        </div>
        <div class="p-3">
            <h5>shoes</h5>
        </div>

      </div></td>
      <td>₹ 1399.00</td>
      <td> <div class="d-flex flex-row mb-3">
                                <div class="p-1">
                                    <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>

                                </div>

                            </div></td>
      <td>₹ 1399.00</td>
      <td><button type="button" class="btn-close" aria-label="close"></button></td>
      
    </tr>
    <tr>
      <td ><div class="d-flex ">
        <div>
             <img src="{{ asset('assets/products/4.jpg') }}" style="width:70px;" class="rounded-3"/>
        </div>
        <div class="p-3">
            <h5>wooden chair</h5>
        </div>

      </div></td>
      <td>₹ 1299.00</td>
      <td> <div class="d-flex flex-row mb-3">
                                <div class="p-1">
                                    <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>

                                </div>

                            </div></td>
      <td>₹ 1299.00</td>
      <td><button type="button" class="btn-close" aria-label="close"></button></td>
      
    </tr>
    <tr>
      <td ><div class="d-flex ">
        <div>
             <img src="{{ asset('assets/products/2.jpg') }}" style="width:70px;" class="rounded-3" />
        </div>
        <div class="p-3">
            <h5>Apple Watch</h5>
        </div>

      </div></td>
      <td>₹ 1399.00</td>
      <td> <div class="d-flex flex-row mb-3">
                                <div class="p-1">
                                    <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>

                                </div>

                            </div></td>
      <td>₹ 1399.00</td>
      <td><button type="button" class="btn-close" aria-label="close"></button></td>
      
    </tr>
    
  </tbody>
</table>
        </div>
        <div class="col-lg-5 ms-auto my-5">
            <h4>Product Detail </h4><hr>
            <div class="d-flex">
                <div><h5>subTotal</h5></div>
                <div class="ms-auto"><h5>₹ 1399.00</h5></div>
            </div>
            <div class="d-flex">
                <div><h5>Discount</h5></div>
                <div class="ms-auto"><h5>₹ 99.00</h5></div>
            </div>
            <div class="d-flex">
                <div><h5>Delivery charges</h5></div>
                <div class="ms-auto"><h5>Free</h5></div>
            </div>
            <hr>
            <div class="d-flex">
                <div><h5>Total</h5></div>
                <div class="ms-auto"><h5>₹ 1300.00</h5></div>
            </div>
            <div class="mt-4"> <a href="{{ url('checkout/product') }}" class="btn theme-orange-btn text-light rounded-pill w-100 px-3 py-2">Proceed to checkout <i class="fa-solid fa-arrow-right"></i></a></div>
        </div>
    </div>
</div>
</section>

@endsection
