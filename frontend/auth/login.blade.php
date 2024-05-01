@extends('frontend.layout.master')
@section('title','Admin Login')
@section('content')
<div id="content" class="site-content">

    <div class="page-header">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-title">Log In</h1>
                    </div>
                    <div class="col-md-6 mobile-left text-right">
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Log In</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="entry-content">
        <div class="container">
            <div class="boxed-content px-100">
                <div class="wpb_row row-fluid section-padd">
                    <div class="auth-box bg-dark border-top border-secondary">
                        <div class="row">
                            <div class="col-md-5">
                                <div id="loginform">
                                    <div class="p-t-20 p-b-20">
                                        <h3>Login Here</h3>
                                    </div>
                                    <!-- Form -->
                                    <div class="row">
                                        <form id="login_form" action="{{ url('admin/login') }}" method="post" class="wpcf7-form m-t-20">

                                            <div class="col-md-12"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="email" value="admin@gmail.com" size="100" class="wpcf7-form-control" required="" placeholder="PAN Number / Email Address">
                                                </span>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="wpcf7-form-control-wrap pass">
                                                    <input type="password" name="password" value="12345678" size="100" class="wpcf7-form-control" required="true" placeholder="Password">
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="type" value="super">
                                                <input type="submit" value="Login" class="wpcf7-form-control wpcf7-submit btn" style="vertical-align: top;">
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <a href="{{ url('/admin/forgot-password') }}" class=""><i class="fa fa-lock m-r-5"></i> Lost password? </a>
                                            </div>
                                        </form>
                                        <div class="col-md-12 gdpr">
                                            <p class="gdpr-t">
                                                Protected by reCAPTCHA. Google <a href="#"> Privacy Policy</a> & <a href="#"> Terms of Service</a> apply.
                                            </p>
                                            <p class="gdpr-t text-center">
                                                Need Help? <a href="#">Contact Us</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 message">
                                <img src="{{ url('public\frontend\images\login\login-head.svg')}}" alt="Early access products" style="margin-bottom: 4px; width: 100%">
                                <div class="message-head">E-file your tax returns online</div>
                                <p class="message-p">Tandon tax products are designed to take the pain out of tedious income tax work. File IT tax returns Online effortlessly or invest into intelligent tax savings options in minutes. 100% online, zero paperwork!</p>
                                <a href="#" class="learn-more">Learn More arrow</a> <br><br>
                                <div class="message-head">Why People Choosed TandonTax</div>
                                <ul class="list-unstyled-c">
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Rating among 39,000+ Client Reviews</li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Helping NRI Clients from 32+ countries</li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> TandonTax.Com (read as 'Tandon Tax') is a Fast growing Company.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>    
            @include('frontend.common.notifications')
            <script type="text/javascript">
                $('#login_form').validate({
                    rules:{
                        email:{
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
        </div>
    </div>
</div>

@endsection
    