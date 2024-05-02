@extends('frontend.layout.master')
@section('title','Admin Register')
@section('content')


<link rel="stylesheet" type="text/css" href="public/frontend/css/style_register.css">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
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
                                        @if (session('success'))
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-success alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        {{ session('success') }}
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif (session('error'))
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="alert alert-danger alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        {{ session('error') }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <form action="{{ url('register-add') }}" enctype="multipart/form-data" method="post" id="3">
                                            @csrf
                                            <h2 style="text-align:center; margin-bottom: 40px; margin-top:-60px;">GST Registration</h2>
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-6"> 
                                                        <span class="wpcf7-form-control-wrap your-text">
                                                            <input type="text" name="name" size="100" class="wpcf7-form-control" required placeholder="Name">
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <span class="wpcf7-form-control-wrap your-text">
                                                            <input type="text" name="business_name" size="100" class="wpcf7-form-control" required placeholder="Business Name">
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <span class="wpcf7-form-control-wrap your-text">
                                                            <input type="text" name="owner_pan_number" size="100" class="wpcf7-form-control" required="" placeholder="Owner PAN Number" maxlength="10">
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <span class="wpcf7-form-control-wrap your-text">
                                                            <input type="text" name="father_name" size="100" class="wpcf7-form-control" required="" placeholder="Father Name">
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
                                                            <input type="text" name="aadhar_number" size="100" class="wpcf7-form-control" required="" placeholder="Aadhar Number" maxlength="12">
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
                                                        <p>Please Upload below require documents to verify your account</p>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <input type="file" name="aadhar_file" id="aadhar_file" class="inputfile"  accept=".jpeg,.png,.jpg,.gif,.svg,.pdf,.xls,.xlsx,.doc,.docx"  required />
                                                        <label for="aadhar_file">Upload Aadhar Card</label>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <input type="file" name="pan_file" id="pan_file" class="inputfile"  accept=".jpeg,.png,.jpg,.gif,.svg,.pdf,.xls,.xlsx,.doc,.docx"  required/>
                                                        <label for="pan_file">Upload PAN Card</label>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <p>Business Proof & Address ( Rent Deed or Owner Ship Proff Or Fardh Or Corporation Rec. )</p> 
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <input type="file" name="business_proof" id="business_proof" class="inputfile"  accept=".jpeg,.png,.jpg,.gif,.svg,.pdf,.xls,.xlsx,.doc,.docx"  required/>
                                                        <label for="business_proof">Business Proof</label>

                                                        {{-- <img src="{{$image}}" id="old_image" alt="No image" class="img-fluid" width="15%" height="10%" accept=".jpg,.png,.gif,.jpeg"> --}}

                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <input type="file" name="cancel_cheque" id="cancel_cheque" class="inputfile"  accept=".jpeg,.png,.jpg,.gif,.svg,.pdf,.xls,.xlsx,.doc,.docx"  required />
                                                        <label for="cancel_cheque">Cancel Chq.</label>
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

                                                    <div class="col-md-12">
                                                        @if($errors->any())
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 text-right control-label col-form-label"></label>
                                                                <div class="col-sm-7">
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                               
                                                                                <div class="alert alert-warning">
                                                                                    <strong>{{ $error }}</strong>
                                                                                  </div>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="error">
                                                        </div>
                                                    </div>
            
                                                    <div class="col-md-6">
                                                        @csrf
                                                        
                                                        <input type="hidden" name="_token"
                                                         value="{{ csrf_token() }}">
                                                        <input type="hidden" name="type" value="gst">
                                                        <input type="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit btn" style="vertical-align: top;">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                    
                                </div>
                                <div class="col-md-2">
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
        </div>
    </div>
</div>

@endsection
    