@extends('layouts.main')
@push('title')
<title>Checkout page</title>
@endpush

@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class=" text-center text-secondary"><i class="fa fa-solid fa-cart-shopping"></i>Checkout List</h1>
</div>
<!-- Billing Details -->

<section>
    <div class="container my-5 ">
        <h2>Billing Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row my-3">
                        <div class="col-lg-12 mb-3">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected> select your country</option>
                                <option value="1">INDIA</option>
                                <option value="2">Pakistan</option>
                                <option value="3">USA</option>
                                <option value="4">UK</option>
                                <option value="5">Nepal</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder=" your firstname">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder=" your Lastname">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder=" your phone ">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="email" class="form-control form-control-lg" placeholder=" your email">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder=" your pincode">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder=" your Landmark">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Your city</option>
                                <option value="1">Amd</option>
                                <option value="2">Kalu</option>
                                <option value="3">Delhi</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Your state</option>
                                <option value="1">Gujrat</option>
                                <option value="2">Haryana</option>
                                <option value="3">Bihar</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea class="form-control form-control-lg" placeholder="your message"
                                rows="3"></textarea>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Your orders -->
<section>
    <div class="container mb-5">
        <h4>Your orders</h4>
        <div class="row  bg-light p-5">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h4>Product</h4>
                            </th>
                            <th scope="col">
                                <h4>Price</h4>
                            </th>
                            <th scope="col">
                                <h4>Quantity</h4>
                            </th>
                            <th scope="col">
                                <h4>SubTotal</h4>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex ">
                                    <div>
                                        <img src="{{ asset('assets/products/1.jpg') }}" style="width:70px;"
                                            class="rounded-3" />
                                    </div>
                                    <div class="p-3">
                                        <h5>shoes</h5>
                                    </div>

                                </div>
                            </td>
                            <td>₹ 1399.00</td>
                            <td>01</td>
                            <td>₹ 1399.00</td>


                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex ">
                                    <div>
                                        <img src="{{ asset('assets/products/4.jpg') }}" style="width:70px;"
                                            class="rounded-3" />
                                    </div>
                                    <div class="p-3">
                                        <h5>wooden chair</h5>
                                    </div>

                                </div>
                            </td>
                            <td>₹ 1299.00</td>
                            <td> 02</td>
                            <td>₹ 1299.00</td>


                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex ">
                                    <div>
                                        <img src="{{ asset('assets/products/2.jpg') }}" style="width:70px;"
                                            class="rounded-3" />
                                    </div>
                                    <div class="p-3">
                                        <h5>Apple Watch</h5>
                                    </div>

                                </div>
                            </td>
                            <td>₹ 1399.00</td>
                            <td>03</td>
                            <td>₹ 1399.00</td>


                        </tr>
                        <tr>
                            <th colspan="3"><h4>Total</h4></th>
                            <th><h4>₹ 1999.00</h4></th>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

<!-- payment -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                       <h5> UPI</h5>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                        <h5>Credit/Debit card</h5>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                        <h5>Cash On Delivery</h5>
                    </label>
                </div>
                <div class="mt-4"> <a href="{{ url('checkout/product') }}"
                        class="btn theme-orange-btn text-light rounded-pill my-3 px-3 py-2">Place an order <i
                            class="fa-solid fa-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</section>


@endsection