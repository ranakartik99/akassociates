@extends('frontend.layout.master')
@section('title','Admin Login')
@section('content')


<link rel="stylesheet" type="text/css" href="public/frontend/css/style_register.css">
<style type="text/css"> 
</style>

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
                            <li><a href="index.html">Home</a></li>
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
                            <!-- Left Column -->
                            <div class="forms">
                                <div class="col-md-3">
                                    <ul class="tab-group">
                                        <li class="tab active"><a href="{{ url('register') }}">GST Firm</a></li>
                                        <li class="tab"><a href="#signup">IncomeTax</a></li>
                                        <!-- <li class="tab"><a href="#signup">IncomeTax</a></li> -->
                                    </ul>
                                </div>
                                    <!-- Gst Form Row Start -->
                                <!-- <form action="#" id="gst">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="name" size="100" class="wpcf7-form-control" required placeholder="Owner's Name">
                                                </span>
                                            </div>
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="owner_pan_number" size="100" class="wpcf7-form-control" required="" placeholder="Owner PAN Number">
                                                </span>
                                            </div>
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="father_name" size="100" class="wpcf7-form-control" required="" placeholder="Father Name">
                                                </span>
                                            </div>
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="firm_name" size="100" class="wpcf7-form-control" required placeholder="Firm Name">
                                                </span>
                                            </div>
                                            <div class="col-md-3"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="gst_number" size="100" class="wpcf7-form-control" required="" placeholder="GST Number">
                                                </span>
                                            </div>
                                            <div class="col-md-5"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="gst_pass" size="100" class="wpcf7-form-control" required="" placeholder="GST Portal Password">
                                                </span>
                                            </div>
                                            <div class="col-md-4"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="aadhar_number" size="100" class="wpcf7-form-control" required="" placeholder="Aadhar Number">
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
                                                    <input type="text" name="mobile_number" size="100" class="wpcf7-form-control" required="" placeholder="Mobile Number">
                                                </span>
                                            </div>
                                            <div class="col-md-12">
                                                <p>Please Upload below require documents to verify your account</p>
                                            </div>
                                            <div class="col-md-6"> 
                                                <input type="file" name="aadhar_file" id="aadhar_file" class="inputfile" />
                                                <label for="aadhar_file">Upload Aadhar Card</label>
                                            </div>
                                            <div class="col-md-6"> 
                                                <input type="file" name="aadhar_file" id="aadhar_file" class="inputfile" />
                                                <label for="aadhar_file">Upload PAN Card</label>
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
                                                    <input type="password" name="cpassword" value="" size="100" class="wpcf7-form-control" required="true" placeholder="Confirm Password">
                                                </span>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="hidden" name="_token" value="40rjRXWh1g2H7AOHLaRmK4QjoiHKbjFLtcvoUieN">
                                                <input type="hidden" name="type" value="super">
                                                <input type="submit" value="Sign Up " class="wpcf7-form-control wpcf7-submit btn" style="vertical-align: top;">
                                            </div>
                                        </div>
                                    </div>
                                </form> -->
                                <form action="#" id="signup">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="name" size="100" class="wpcf7-form-control" required placeholder="Owner's Name">
                                                </span>
                                            </div>
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="owner_pan_number" size="100" class="wpcf7-form-control" required="" placeholder="Owner PAN Number">
                                                </span>
                                            </div>
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="father_name" size="100" class="wpcf7-form-control" required="" placeholder="Father Name">
                                                </span>
                                            </div>
                                            
                                            
                                            <div class="col-md-6"> 
                                                <span class="wpcf7-form-control-wrap your-text">
                                                    <input type="text" name="aadhar_number" size="100" class="wpcf7-form-control" required="" placeholder="Aadhar Number">
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
                                                    <input type="text" name="mobile_number" size="100" class="wpcf7-form-control" required="" placeholder="Mobile Number">
                                                </span>
                                            </div>
                                            <div class="col-md-12">
                                                <p>Please Upload below require documents to verify your account</p>
                                            </div>
                                            <div class="col-md-6"> 
                                                <input type="file" name="aadhar_file" id="aadhar_file" class="inputfile" />
                                                <label for="aadhar_file">Upload Aadhar Card</label>
                                            </div>
                                            <div class="col-md-6"> 
                                                <input type="file" name="aadhar_file" id="aadhar_file" class="inputfile" />
                                                <label for="aadhar_file">Upload PAN Card</label>
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
                                                    <input type="password" name="cpassword" value="" size="100" class="wpcf7-form-control" required="true" placeholder="Confirm Password">
                                                </span>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="hidden" name="_token" value="40rjRXWh1g2H7AOHLaRmK4QjoiHKbjFLtcvoUieN">
                                                <input type="hidden" name="type" value="super">
                                                <input type="submit" value="Sign Up " class="wpcf7-form-control wpcf7-submit btn" style="vertical-align: top;">
                                            </div>
                                        </div>
                                    </div>
                                </form>
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

            <!-- <script type="text/javascript">
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
            </script> -->
        </div>
    </div>
</div>

@endsection
    