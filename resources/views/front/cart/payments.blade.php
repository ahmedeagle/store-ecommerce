@extends('layouts.site')

@section('style')

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");

        body {
            background-color: #f5eee7;
            font-family: "Poppins", sans-serif;
            font-weight: 300
        }

        .container {
            height: 100vh
        }

        .card {
            border: none
        }

        .card-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: none
        }

        .btn-light:focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, .5)
        }

        .form-control {
            height: 50px;
            border: 2px solid #eee;
            border-radius: 6px;
            font-size: 14px
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #039be5;
            outline: 0;
            box-shadow: none
        }

        .input {
            position: relative
        }

        .input i {
            position: absolute;
            top: 16px;
            left: 11px;
            color: #989898
        }

        .input input {
            text-indent: 25px
        }

        .card-text {
            font-size: 13px;
            margin-left: 6px
        }

        .certificate-text {
            font-size: 12px
        }

        .billing {
            font-size: 11px
        }

        .super-price {
            top: 0px;
            font-size: 22px
        }

        .super-month {
            font-size: 11px
        }

        .line {
            color: #bfbdbd
        }

        .free-button {
            background: #1565c0;
            height: 52px;
            font-size: 15px;
            border-radius: 8px
        }

        .payment-card-body {
            flex: 1 1 auto;
            padding: 24px 1rem !important
        }
    </style>
    @stop

@section('content')
    <nav data-depth="1" class="breadcrumb-bg">
        <div class="container no-index">
            <div class="breadcrumb">

                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="index-11.htm">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                </ol>

            </div>
        </div>
    </nav>

    <div class="container no-index">
        <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <section id="main">
                    <h1 class="page-title">Payment Methods</h1>
                    <div class="cart-grid row">
                        <form class="needs-validation" method="post" action="{{route('payment.process')}}" novalidate="">
                                @csrf
                            <hr class="mb-4">
                            <h4 class="mb-3">Payment</h4>

                            <input type="hidden" name="amount" value="{{$amount}}" >
                            <div class="d-block my-3">
                                <div class="custom-radio">
                                    <input  name="PaymentMethodId" type="radio"  value="2" class="" checked="" required="">
                                    <label class="custom-control-label" for="credit">Visa</label>
                                </div>
                                <div class="custom-radio">
                                    <input name="PaymentMethodId" type="radio" value="2"  class="" required="">
                                    <label class="custom-control-label" for="debit">Master Card</label>
                                </div>
                                <div class="custom-radio">
                                    <input name="PaymentMethodId" type="radio" value="6" class="" required="">
                                    <label class="custom-control-label" for="paypal">Mada</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" name="ccNum" id="cc-number" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" name="ccExp" id="cc-expiration" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" name="ccCvv" id="cc-cvv" placeholder="" required="">
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop
remove-from-cart

@section('scripts')
    <script>


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.remove-from-cart', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr('data-url-product'),
                data: {
                    'product_id': $(this).attr('data-id-product'),
                    'product_id': $(this).attr('data-id-product'),
                },
                success: function (data) {

                }
            });
        });
    </script>
    @stop
