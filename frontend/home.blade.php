
@extends('frontend.layout.master')
@section('title','Financial & Consulting')
@section('content')

<?php 
    if(isset($bank_detail)){
        $title = 'Edit';
        $form_id = 'bank-statement';
		$image_text = 'Update Image';
        $action  =  url('/contact/add'.$bank_id);
    }else{
        $title = 'Customer Review';
        $form_id = 'CustomerReview';
		$image_text = 'Update Image';
        $action  =  url('/customer-review/add');
    }
?>


<style>
    .btn32 {
    position: absolute;
    /* top: 50%; */
    left: 30%;
    transform: translate(68%, -60%);
    -ms-transform: translate(-50%, -50%);
    background-color: #082956;
    color: #ffffff;
    font-size: 13px;
    padding: 7px 23px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
  }
    
    .btn32:hover {
              background-color: #ff1b46;
              color: #ffffff;
            }

</style>

<div id="content" class="site-content">
        

<section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
    <div id="revolution-slider">
        <ul>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                <!--  BACKGROUND IMAGE -->
                <img src="public/frontend/images/slide-home1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="['0']" data-y="bottom" data-voffset="" data-width="['auto','320','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                    <img class="img-responsive md-hidden sm-hidden xs-hidden" src="public/frontend/images/man-slide.png" alt="Image">
                </div>
                <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                    <p>What Disturbs you most</p>
                </div>
                <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                    <p>Now Fill your Income Tax Return Online</p>
                </div>
                <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                    <p> <i class="fa fa-check" style="color: red;"></i> Worry free Tax Tax Submission 
                    <i class="fa fa-check" style="color: red;  margin-left: 20px;"></i> Submit files in minutes.
                    <i class="fa fa-check" style="color: red;  margin-left: 20px;"></i> Get Your ITR Filles by Experts</p>
                </div>
                <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                    <a class="btn" href="#">Read More</a>
                </div>
            </li>

            <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                <!--  BACKGROUND IMAGE -->
                <img src="public/frontend/images/slide-home1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','380','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                    <img class="img-responsive md-hidden sm-hidden xs-hidden" src="public/frontend/images/woman-slide.png" alt="Image">
                </div>
                <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="180" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                    <p>GST Registration</p>
                </div>
                <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                    <p>Get Your GST Registration Number from Experts</p>
                </div>
                <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                    <p>Get your Goods and Services Tax (GST) enlistment and GST number with master help with simple, fast and basic way.</p>
                </div>
                <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                    <a class="btn" href="#">GET QUOTE</a>
                </div>
            </li>

            <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                <!--  BACKGROUND IMAGE -->
                <img src="public/frontend/images/slide-home1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','290','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                    <img class="img-responsive md-hidden sm-hidden xs-hidden" src="public/frontend/images/man-slide-2.png" alt="Image">
                </div>
                <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                    <p>WE'RE CONSULTAX</p>
                </div>
                <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                    <p>Help You To Grow Your Business</p>
                </div>
                <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                    <p>Everyone needs a good tax professional who can give excellent advice on managing tax liability and prepare tax returns, especially if they are complex.</p><p></p>
                </div>
                <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                    <a class="btn" href="#">GET QUOTE</a>
                </div>
            </li>

        </ul>
    </div>
</section>

{{-- Income Tax Return , GST Related Services, Data management system, trade mark registration  --}}

<section class="wpb_row row-fluid top-70 row-has-fill relative bg-light">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="empty_space_70 lg-hidden"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link here -->
                    <a href="{{ url('client')}}"> 
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <img src="public/frontend/images/svg/itr.png" draggable="false" alt="Income Tax Return" title="Income Tax Return">
                                <div class="content-box">
                                    <h4>Income Tax <br> Return</h4>
                                    <button class="btn32">Details</button>
                                     <!--<p>Get Fill your Income tax return from Proffesionals .</p> -->
                                </div>
                            </div>

                            <div class="empty_space_30  lg-hidden"><span class="empty_space_inner"></span></div>
                        </div> 
                    </a>
 
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link Here -->
                    <a href="{{ url('client')}}">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <img src="public/frontend/images/svg/gst.png" draggable="false" alt="GST Related Services" title="GST Related Services">
                                <div class="content-box">
                                    <h4>GST Related Services</h4>
                                    <button class="btn32">Details</button>
                                    <!-- <p>Get Fill your Income tax return from Proffesionals .</p> -->
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link Here -->
                    <a href="{{ url('client')}}"> 
                        
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                            <img src="public/frontend/images/svg/data.png" draggable="false" alt="Income Tax Return" title="Income Tax Return">
                                <div class="content-box">
                                    <h4>Data Management Services </h4>
                                    <button class="btn32">Details</button>
                                    <!-- <p>Data Management Services Proffesional Way .</p> -->
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link Here -->
                    <a href="{{ url('client')}}"> 
                        
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                            <img src="public/frontend/images/svg/trademark.png" draggable="false" alt="Income Tax Return" title="Income Tax Return">
                                <div class="content-box">
                                    <h4>Trade Mark Registration</h4>
                                    <button class="btn32">Details</button>
                                    <!-- <p>Etiam sollicitudin sagittis justo at ullamcorper potenti.</p> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2nd Services of management --}}
{{-- <section class="wpb_row row-fluid top-110 row-has-fill relative bg-light">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="empty_space_70 lg-hidden"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link here -->
                    <a href="https://www.gstsuvidhakendra.org/demo-for-gst-suvidha-kendra/"> 
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <img src="public/frontend/images/svg/itr.png" draggable="false" alt="Income Tax Return" title="Income Tax Return">
                                <div class="content-box">
                                    <h4>GST Suvidha<br> Kendra</h4>
                                    <a href="https://bit.ly/2ZbjJCS"><button class="btn32">Details</button>
                                    </a>
                                     <!--<p>Get Fill your Income tax return from Proffesionals .</p> -->
                                </div>
                            </div>

                            <div class="empty_space_30  lg-hidden"><span class="empty_space_inner"></span></div>
                        </div> 
                    </a>
 
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link Here -->
                    <a href="https://ipindiaonline.gov.in/eregister/eregister.aspx">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <img src="public/frontend/images/svg/gst.png" draggable="false" alt="GST Related Services" title="GST Related Services">
                                <div class="content-box">
                                    <h4>Trademark Registration</h4>
                                    <button class="btn32">Details</button>
                                    <!-- <p>Get Fill your Income tax return from Proffesionals .</p> -->
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link Here -->
                    <a href=""> 
                        
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                            <img src="public/frontend/images/svg/data.png" draggable="false" alt="Income Tax Return" title="Income Tax Return">
                                <div class="content-box">
                                    <h4>Travel</h4>
                                    <button class="btn32">Details</button>
                                    <!-- <p>Data Management Services Proffesional Way .</p> -->
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-3">
                <div class="column-inner">
                    <!-- Service Page Link Here -->
                    <a href="{{ url('client')}}"> 
                        
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                            <img src="public/frontend/images/svg/trademark.png" draggable="false" alt="Income Tax Return" title="Income Tax Return">
                                <div class="content-box">
                                    <h4>Trade Mark Registration</h4>
                                    <button class="btn32">Details</button>
                                    <!-- <p>Etiam sollicitudin sagittis justo at ullamcorper potenti.</p> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="wpb_row row-fluid section-padd row-has-fill row-o-equal-height row-o-content-middle row-flex bg-light">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="row wpb_row inner row-fluid row-o-equal-height row-o-content-middle row-flex">
                            <div class="wpb_column column_container col-sm-12 col-md-6 col-has-fill custom-padd-1">
                                <div class="column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="bg-second wpb_column column_container col-sm-12 col-md-6">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="empty_space_60 lg-hidden h60"><span class="empty_space_inner"></span></div>

                                        <div class="section-head padding-box-2 text-light">
                                            <h6><span>WHO WE ARE</span></h6>
                                            <h2 class="section-title">Our Mission,<br>Values and Motto</h2>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element padding-box-2 text-light">
                                            <div class="wpb_wrapper">
                                                <p>To accomplice in the country building measure through reformist 

                                                    charge strategy, proficient and compelling organization and improved 

                                                    deliberate consistence</p>

                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element paddtop-75 padding-box-2 info-box text-light">
                                            <div class="wpb_wrapper">
                                                <div class="sign">
                                                    <!--<p><img class="alignnone size-full wp-image-1087" src="public/frontend/images/sign1.png" alt="" width="79" height="49"></p>-->
                                                    <h4>Tandon Tax</h4>
                                                    <p>Sushma Tandon <br>Founder &amp; CEO
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty_space_60 lg-hidden"><span class="empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wpb_row row-fluid section-padd">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12 col-md-9">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="section-head ">
                            <h6><span>OUR SERVICES</span></h6>
                            <h2 class="section-title">What we bring to you</h2>
                        </div>

                        <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-12 col-md-3">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element text-right mobile-left">
                            <div class="wpb_wrapper">
                                <p><a class="pagelink gray" href="comming-soon.html">All services</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="service-box icon-box  ionic  hover-box">
                            <i class="ion-md-umbrella ion-logo-umbrella"></i>
                            <div class="content-box">
                                <h4>Income Tax Return</h4>
                                <p>How can you file an income tax return in India? You can file your income tax returns online, either on the official website or with us</p>
                                <a class="link-box pagelink">
                                   <button class="btn32">Details</button> 
                                </a> 
                                <a class="link-box pagelink" class="btn32" href="#" target="_self"></a>
                            </div>
                        </div>

                        <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="service-box icon-box  ionic  hover-box">
                            <i class="ion-md-cube ion-logo-cube"></i>
                            <div class="content-box">
                                <h4>Apply TAN Online</h4>
                                <p>An income tax return is a form which enables a taxpayer to declare his income, expenses, tax deductions, investments, taxes etc.</p>
                                <a class="link-box pagelink"><button class="btn32">Details</button> </a>  </div>
                        </div>

                        <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="service-box icon-box  ionic  hover-box">
                            <i class="ion-md-podium ion-logo-podium"></i>
                            <div class="content-box">
                                <h4>GST Related Services</h4>
                                <p>Get your Business agreeable under GST and document intermittent returns under ClearTax specialists' direction.</p>
                                
                                <a class="link-box pagelink"><button class="btn32">Details</button> </a>  </div>
                        </div>

                        <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <!-- <div class="wpb_column column_container col-sm-6 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="service-box icon-box  ionic  hover-box">
                            <i class="ion-md-list-box ion-logo-list-box"></i>
                            <div class="content-box">
                                <h4>Strategic Planning</h4>
                                <p>Mus leo mauris nec erat ullamcorper orci nascetur, est faucibus auctor natoque tempus eu, eros condimentum et taciti rhoncus.</p>
                                <a class="link-box pagelink" href="comming-soon.html" target="_self">Read more</a> </div>
                        </div>

                        <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="service-box icon-box  ionic  hover-box">
                            <i class="ion-md-cash ion-logo-cash"></i>
                            <div class="content-box">
                                <h4>Financial Projections</h4>
                                <p>Varius scelerisque tristique condimentum habitant dui euismod auctor lacinia maecenas cubilia eleifend erat, purus malesuada.</p>
                                <a class="link-box pagelink" href="comming-soon.html" target="_self">Read more</a> </div>
                        </div>

                        <div class="empty_space_30 lg-hidden md-hidden"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="service-box icon-box  ionic  hover-box">
                            <i class="ion-md-wallet ion-logo-wallet"></i>
                            <div class="content-box">
                                <h4>Bonds &amp; Commodities</h4>
                                <p>Dis vel quam partur+ient et molestie at morbi vehicula mus phasellussenectus congue lacinia pulvinar turpis taciti, pellentesque.</p>
                                <a class="link-box pagelink" href="comming-soon.html" target="_self">Read more</a> </div>
                        </div>

                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="wpb_row row-fluid section-padd bg-second row-has-fill">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-6">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <h2 class="custom_heading text-light">Request a Free<br>Call Back</h2>
                        <div class="wpb_text_column wpb_content_element  text-light">
                            <div class="wpb_wrapper">
                                <p>Provide discussion information and we’ll get back to
                                    <br> you as soon as possible</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div role="form" class="wpcf7" id="wpcf7-f1626-p1530-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form id="{{$form_id}}" action="{{ $action }}" class="" method="post" enctype="multipart/form-data" class="wpcf7-form">

                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="wpcf7-form-control-wrap your-name">
                                            <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required="" aria-invalid="false" placeholder="Your Name">
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="wpcf7-form-control-wrap your-phone">
                                            <input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Phone Number">
                                        </span>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" placeholder="Email Address">
                                        </span>
                                    </div>
                                    <div class="col-md-6">

                                        <span class="wpcf7-form-control-wrap your-service">
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="text" name="messagedata" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" placeholder="Message">
                                            </span>
                                        </span>
                                        
                                    </div>
                                </div>
                                <p>
                                    <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                </p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wpb_row row-fluid section-padd bg-light">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12 col-md-8">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="section-head ">
                            <h6><span>our blog</span></h6>
                            <h2 class="section-title">Our latest news</h2>
                        </div>

                        <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-12 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element text-right mobile-left">
                            <div class="wpb_wrapper">
                                <p><a class="pagelink gray" href="blog.html">View all posts</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Static Blog -->
            <div class="wpb_column column_container col-sm-12 col-md-8">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="news-slider posts-grid row" data-show="2" data-auto="true">
                            <div>
                                <article class="news-item content-area">
                                    <div class="inner-item radius-top">
                                        <div class="thumb-image">
                                            <a href="post.html">
                                                <img src="public/frontend/images/blog1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="inner-post radius-bottom">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <time class="entry-date">September 11, 2017</time>
                                                </span>
                                                <span class="posted-in">
                                                    <a href="#">Consulting</a>
                                                </span> 
                                            </div>
                                            <h4 class="entry-title">
                                                <a href="post.html">Solution financial for good startup</a>
                                            </h4>
                                            <p> Go to Venture Capitalists. Venture Capitalists are companies/funds that raise funds from various sources and use the corpus to further fund startups...
                                            </p> 
                                            <a class="post-link" href="#">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div>
                                <article class="news-item content-area">
                                    <div class="inner-item radius-top">
                                        <div class="thumb-image">
                                            <a href="post.html">
                                                <img src="public/frontend/images/blog2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="inner-post radius-bottom">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <time class="entry-date">September 11, 2017</time>
                                                </span>
                                                <span class="posted-in">
                                                    <a href="#">Consulting</a>
                                                </span> 
                                            </div>
                                            <h4 class="entry-title">
                                                <a href="post.html">Why Tech Should Behave  More Like Finance</a>
                                            </h4>
                                            <p>
                                                Go to Venture Capitalists. Venture Capitalists are companies/funds that raise funds from various sources and use the corpus to further fund startups...
                                            </p> 
                                            <a class="post-link" href="post.html">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div>
                                <article class="news-item content-area">
                                    <div class="inner-item radius-top">
                                        <div class="thumb-image">
                                            <a href="post.html">
                                                <img src="public/frontend/images/blog3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="inner-post radius-bottom">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <time class="entry-date">September 11, 2017</time>
                                                </span>
                                                <span class="posted-in">
                                                    <a href="#">Consulting</a>
                                                </span> 
                                            </div>
                                            <h4 class="entry-title">
                                                <a href="post.html">Cutting Your Restaurant’s Operations Costs</a>
                                            </h4>
                                            <p>50 Ways to Cut Costs Without Reducing Quality or Harming Your Guest ... Any restaurant is at risk for losing good, usable food products to their kitchen trash cans...
                                            </p> 
                                            <a class="post-link" href="post.html">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div>
                                <article class="news-item content-area">
                                    <div class="inner-item radius-top">
                                        <div class="thumb-image">
                                            <a href="post.html">
                                                <img src="public/frontend/images/blog4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="inner-post radius-bottom">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <time class="entry-date">September 11, 2017</time>
                                                </span>
                                                <span class="posted-in">
                                                    <a href="#">Consulting</a>
                                                </span> 
                                            </div>
                                            <h4 class="entry-title">
                                                <a href="post.html">Solution financial for good startup</a>
                                            </h4>
                                            <p>
                                               Go to Venture Capitalists. Venture Capitalists are companies/funds that raise funds from various sources and use the corpus to further fund startups...
                                            </p> 
                                            <a class="post-link" href="post.html">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div>
                                <article class="news-item content-area">
                                    <div class="inner-item radius-top">
                                        <div class="thumb-image">
                                            <a href="post.html">
                                                <img src="public/frontend/images/blog2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="inner-post radius-bottom">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <time class="entry-date">September 11, 2017</time>
                                                </span>
                                                <span class="posted-in">
                                                    <a href="#">Consulting</a>
                                                </span> 
                                            </div>
                                            <h4 class="entry-title">
                                                <a href="post.html">Cutting Your Restaurant’s Operations Costs</a>
                                            </h4>
                                            <p>
                                                Remember to establish the ground rules of payment, ordering, and receiving. Join a 'Purchase Group', if possible, to lower your restaurant costs...
                                            </p> 
                                            <a class="post-link" href="post.html">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div>
                                <article class="news-item content-area">
                                    <div class="inner-item radius-top">
                                        <div class="thumb-image">
                                            <a href="post.html">
                                                <img src="public/frontend/images/blog1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="inner-post radius-bottom">
                                            <div class="entry-meta">
                                                <span class="posted-on">
                                                    <time class="entry-date">September 11, 2017</time>
                                                </span>
                                                <span class="posted-in">
                                                    <a href="#">Consulting</a>
                                                </span> 
                                            </div>
                                            <h4 class="entry-title">
                                                <a href="post.html">Why Tech Should Behave  More Like Finance</a>
                                            </h4>
                                            <p>
                                                Firstly, Finance professionals are intensely driven by high-quality and high-level data and information to give the advantage of being on their competitors’ trail..
                                            </p> 
                                            <a class="post-link" href="post.html">Read more</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Blog End -->


            <!-- Subscribe Form -->
            <div class="wpb_column column_container col-sm-12 col-md-4">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element text-light bg-second radius padd-box-29">
                            <div class="wpb_wrapper">
                                <div class="section-head ">
                                    <h6>Subscribe</h6>
                                    <h3 class="section-title">Subscribe for<br> latest news</h3>
                                </div>
                                <p>Malesuada varius luctus urna duis placerat maecenas primis velit blandit.</p>
                                <!-- Mailchimp for WordPress v4.5.2 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                <form class="mc4wp-form" method="post">
                                    <div class="mc4wp-form-fields">
                                        <div class="footer-sub">
                                            <input type="text" name="NAME" placeholder="Name" required="">
                                            <input type="email" name="EMAIL" placeholder="Email Address" required="">
                                            <input type="submit" class="btn" value="Subscribe">
                                        </div>
                                    </div>
                                </form>
                                <!-- / Mailchimp for WordPress Plugin -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribe Form End -->
        </div>
    </div>
</section>
<section class="wpb_row row-fluid section-padd">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="section-head ">
                            <h6><span>testimonial &amp; partner</span></h6>
                            <h2 class="section-title">What our clients says?</h2>
                        </div>

                        <div class="empty_space_30"><span class="empty_space_inner"></span></div>

                        <div class="testi-slider" data-show="3" data-arrow="true">
                            <div>
                                <div class="testi-item box-shadow-hover">
                                    <div class="testi-head">
                                        <!--<img width="50" height="50" src="public/frontend/images/avatar3.png" class="client-img" alt="">-->
                                        <h5>Rohan Singh<span class="font12 normal"></span></h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="testi-content">
                                        <i class="ion-md-quote"></i>
                                        <img width="86" height="12" src="public/frontend/images/stars.png" alt="">
                                        <p>Saved time spent standing in long queue at the income tax office during hectic business hours. </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testi-item box-shadow-hover">
                                    <div class="testi-head">
                                        <!--<img width="50" height="50" src="public/frontend/images/avatar4.png" class="client-img" alt="">-->
                                        <h5>Anand Upadhyay<span class="font12 normal"></span></h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="testi-content">
                                        <i class="ion-md-quote"></i>
                                        <img src="public/frontend/images/stars.png" alt="">
                                        <p>It's simple, easy and saves my time and money. I wish I had this earlier, I strongly recommend everybody to use this portal. It's (the) one-point solution to all your tax queries. It's fantastic....e. Thank you !</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testi-item box-shadow-hover">
                                    <div class="testi-head">
                                        <!--<img width="50" height="50" src="public/frontend/images/avatar9.png" class="client-img" alt="">-->
                                        <h5>Smita Dhariwal<span class="font12 normal"></span></h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="testi-content">
                                        <i class="ion-md-quote"></i>
                                        <img width="86" height="12" src="public/frontend/images/stars.png" class="attachment-full size-full" alt="">
                                        <p>It's a live guide to help plan savings and calculate tax at (the) same time. A must-use site for all taxpayers as it saves time apart from giving guidance. It does work perfectly. Thank you Taxsmile :)</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testi-item box-shadow-hover">
                                    <div class="testi-head">
                                        <!--<img width="50" height="50" src="public/frontend/images/avatar3.png" class="client-img" alt="">-->
                                        <h5>Updesh k. Singh<span class="font12 normal"></span></h5>
                                    </div>
                                    <div class="line"></div>
                                    <div class="testi-content">
                                        <i class="ion-md-quote"></i>
                                        <img width="86" height="12" src="public/frontend/images/stars.png" alt="">
                                        <p>Tax filing has become a dream-come-true easy now. Earlier it was nightmare. Taxsmile has made the process a cakewalk. Way to go. Keep it up. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="empty_space_80"><span class="empty_space_inner"></span></div>

                        <!-- <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo5.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="partner-item text-center clearfix">
                                    <div class="inner">
                                        <div class="thumb">
                                            <img src="public/frontend/images/logo5.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wpb_row row-fluid section-padd bg-light">
    <div class="container">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="section-head ">
                            <h6><span>Support</span></h6>
                            <h2 class="section-title">How can we help</h2>
                        </div>
                        <div class="empty_space_12"></div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-5">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element text-light contact-box">
                            <div class="wpb_wrapper">
                                <h6 class="font12">Toll Free</h6>
                                <h4> 1800-891-4036 </h4>
                                <h4> 0988-891-3036 </h4>
                                <h6 class="font12">Location</h6>
                                <h4>B-251, Anandpuri Colony, <br>
                                    Noorwala Road, Ludhiana</h4>
                                <p><a class="pagelink" href="contact.html">Contact Us</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column column_container col-sm-6 col-md-7">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpcf7">
                            <div class="screen-reader-response"></div>
                            <form action="#" method="post" class="wpcf7-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="wpcf7-form-control-wrap your-name">
                                            <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control" required="" placeholder="Your Name">
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email Address">
                                        </span>
                                    </div>
                                </div>
                                <div class="contact-mess">
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control" required="" placeholder="Messenger"></textarea>
                                    </span>
                                </div>
                                <p>
                                    <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                </p>
                            </form>
                        </div>
                        <div class="empty_space_30 lg-hidden md-hidden"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
  </div>
@endsection