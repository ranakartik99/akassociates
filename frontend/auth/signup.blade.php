@extends('frontend.layout.master')
@section('title','Admin Register')
@section('content')

<style>
   input.razorpay-payment-button {
    background: #ff1b46;
    color: white;
    padding: 2px 19px 8px;
    border: red;
    font-size: 20px;
}
</style>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
    <div id="content" class="site-content">
        <div class="page-header">
            <div class="container">
                <div class="breadc-box no-line">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="page-title">Sign Up</h1>
                        </div>
                        <div class="col-md-6 mobile-left text-right">
                            <ul id="breadcrumbs" class="breadcrumbs none-style">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li class="active">Sign Up</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="entry-content">
            <div class="container">
                <div class="boxed-content">
                    <div class="wpb_row row-fluid section-padd">
                        <div class="auth-box bg-dark border-top border-secondary">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            @if($message = Session::get('error'))
                                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>Error!</strong> {{ $message }}
                                                </div>
                                            @endif
                                            {!! Session::forget('error') !!}
                                            @if($message = Session::get('success'))
                                                <div class="alert alert-info alert-dismissible fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>Success!</strong> {{ $message }}
                                                </div>
                                            @endif
                                            {!! Session::forget('success') !!}

                                            <div class="col-md-12">
                                                <div class="panel panel-default" style="margin-top: 30px;">
                                                <h2 style="text-align:center; margin-bottom: 40px; margin-top:-60px;">Sign Up</h2>
                                                <div class="panel-heading">
                                                    {{-- <h2>Pay With Razorpay</h2> --}}
                                                    
                                                <!-- <div class="panel-body text-center"> -->
                                                    <form action="{!!route('payment')!!}" method="POST" > 
                                                        
                                                        
                                                            <div class="col-md-12"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <input type="text" name="business_name" size="100" class="wpcf7-form-control" required placeholder="Firm Name / Business Name / Company Name">
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <input type="text" name="first_name" size="100" class="wpcf7-form-control" required placeholder="First Name">
                                                                </span>
                                                            </div>
        
                                                            <div class="col-md-6"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <input type="text" name="last_name" size="100" class="wpcf7-form-control" required placeholder="Last Name">
                                                                </span>
                                                            </div>
        
                                                            
                                                            <div class="col-md-4"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <input type="text" name="pan_number" size="100" class="wpcf7-form-control" required="" placeholder="PAN Number" maxlength="10">
                                                                </span>
                                                            </div>
                                                            
                                                            <div class="col-md-4"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <input type="text" name="aadhar_number" size="100" class="wpcf7-form-control" required="" placeholder="Aadhar Number" maxlength="12">
                                                                </span>
                                                            </div>
        
                                                            <div class="col-md-4"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <input type="email"  id="email" name="email" size="100" class="wpcf7-form-control" required="" placeholder="Email-Id" maxlength="100" >
                                                                </span>
                                                            </div>
                                                            
                                                                                                                   
                                                            <div class="col-md-12"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <input type="text" name="address" size="100" class="wpcf7-form-control" required="" placeholder="Address">
                                                                </span>
                                                            </div>
        
                                                            
                                                            <div class="col-md-12"> 
                                                                <span class="wpcf7-form-control-wrap your-text">
                                                                    <small>Enter Mobile Number Registered with Aadhar Card</small>
                                                                    <input type="text" name="mobile_number" size="100" class="wpcf7-form-control" required="" placeholder="Mobile Number" maxlength="10">
                                                                </span>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <p>Note: Keep safe your account password</p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <span class="wpcf7-form-control-wrap pass">
                                                                    <input type="password" name="password" value="" size="100" class="wpcf7-form-control" required="true" placeholder="Password">
                                                                </span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <span class="wpcf7-form-control-wrap pass">
                                                                    <input type="password" name="password_confirmation" value="" size="100" class="wpcf7-form-control" required="true" placeholder="Confirm Password">
                                                                </span>
                                                            </div>
                                                            
                                                            {{-- src="public/frontend/images/blog1.jpg" --}}
                                                        

                                                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                                    data-key="{{ env('RAZOR_KEY') }}"
                                                                    data-amount="102500"
                                                                    data-buttontext="Register"
                                                                    data-name="TandonTax"
                                                                    data-description="Payment"
                                                                    data-image="public/rozerpay/tandong.png"
                                                                    data-prefill.name="name"
                                                                    data-prefill.email="email"
                                                                    data-theme.color="#528FF0">
                                                            </script>
                                                            <input type="hidden" name="type" value="admin">
                                                            <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>    
                                    </div>    
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>    
@include('frontend.common.notifications')
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
    $(document).ready(function(){
            $('.tab a').on('click', function (e) {
            e.preventDefault();
            
            $(this).parent().addClass('active');
            $(this).parent().next().removeClass('active');
            
            var href = $(this).attr('href');
            $('.forms > form').hide();
            $(href).fadeIn(500);
        });
    });
</script>

<script type="text/javascript">
    $('#rgister_form3').validate({
        rules:{
            owner_pan_number:{
                required:true,
            },
            password:{
                required: true
            }
        },
        errorPlacement: function errorPlacement(error, element) { 
            error.appendTo(element.parent().parent().after());
        },            
    })
</script>

@endsection