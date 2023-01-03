@extends('layouts.master')

@section('body')
    <!-- Students section start -->
    <div class="Students_section layout_padding">
        <div class="container-fluid">
            <h1 class="welcome_text">Welcome New Students!</h1>
            <p class="singh_text">Sign up now to receive a 25-minute taster lesson - completely free!</p>
            <div class="click_bt"><a href="#">Click To Sigup</a></div>
            <div class="classes_section">
                <h1 class="classes_text">Classes</h1>
                <div class="dance_main">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="box active">Dancing</div>
                            <div class="box">People</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">Man</div>
                            <div class="box">Girls</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="box">Dancer</div>
                            <div class="box">Ballte Dancing</div>
                        </div>
                        <div class="col-sm-3 padding_0">
                            <div class="image_2"></div>
                        </div>
                    </div>
                </div>
                <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
        </div>
    </div>
    <!-- Students section end -->

    <!-- dancer section start -->
    <div class="dancer_section layout_padding">
        <div class="container">
            <h1 class="ballet_text">Ballet Dancer</h1>
            <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
            <p class="amet_text_1">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco</p>
            <div class="click_bt"><a href="#">Click To Sigup</a></div>
        </div>
    </div>
    <!-- dancer section end -->

    <!-- opening hours section start -->
    <div class="opening_section layout_padding">
        <div class="container">
            <h1 class="ballet_text">opening Hours</h1>
            <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
            <div class="opening_section_2 layout_padding">
                <div class="time_line">
                    <p class="hiphop_text">Hip Hop Dance :</p>
                    <hr class="border_0">
                    <p class="hiphop_text">07:00am - 21:00am</p>
                </div>
                <div class="time_line">
                    <p class="hiphop_text">Ballet :</p>
                    <hr class="border_0">
                    <p class="hiphop_text">09:00pm - 21:00pm</p>
                </div>
                <div class="time_line">
                    <p class="hiphop_text">Break Dance :</p>
                    <hr class="border_0">
                    <p class="hiphop_text">18:00am - 24:00pm</p>
                </div>
                <div class="time_line">
                    <p class="hiphop_text">Salsa :</p>
                    <hr class="border_0">
                    <p class="hiphop_text">18:00pm - 22:00am</p>
                </div>
                <div class="time_line">
                    <p class="hiphop_text">Tab Dancing :</p>
                    <hr class="border_0">
                    <p class="hiphop_text">19:00am - 23:00am</p>
                </div>
            </div>
        </div>
    </div>
    <!-- opening hours section end -->

    <!-- shortcode section start -->
    <div class="shortcode_section layout_padding">
        <div class="container">
            <h1 class="ballet_text">SHORTCODE</h1>
            <p class="amet_text">amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
            <div class="shortcode_section_2">
                <div class="shortcode_left">
                    <h1 class="heading_text">Heading 1</h1>
                    <p class="tempor_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
                </div>
                <div class="shortcode_right"><img src="{{asset('template/images/img-3.png')}}"></div>
            </div>
            <div class="shortcode_section_2">
                <div class="shortcode_right"><img src="{{asset('template/images/img-4.png')}}"></div>
                <div class="shortcode_left border_left_0">
                    <h1 class="heading_text_1">Heading 2</h1>
                    <p class="tempor_text_1">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur
                        adipiscing </p>
                </div>
            </div>
            <div class="shortcode_section_2">
                <div class="shortcode_left">
                    <h1 class="heading_text">Heading 3</h1>
                    <p class="tempor_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoconsectetur adipiscing </p>
                </div>
                <div class="shortcode_right"><img src="{{asset('template/images/img-5.png')}}"></div>
            </div>
        </div>
    </div>
    <!-- shortcode section end -->
@endsection
