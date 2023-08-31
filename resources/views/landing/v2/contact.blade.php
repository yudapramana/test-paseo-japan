@extends('layouts.landing.v2.master')

@section('title', 'PPID KemenagPessel - Contact')

@section('_styles')

{{-- Primary Meta Tags --}}
<meta name="title" content="{{$title}}">
<meta name="description" content="{{$title}}" />
<meta name="keywords" content="About Pandan View Mandeh, Mandeh, Pesisir Selatan, Puncak Mandeh" />
<meta name="author" content="Pandan View Mandeh" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{$title}}">
<meta property="og:title" content="{{$title}}">
<meta property="og:locale" content="id_ID">
<meta property="og:description"
    content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />

<meta property="og:type" content=website />
<meta property="og:url" content="{{ URL::current() }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="{{$title}}" />
<meta name="twitter:title" content="{{$title}}" />
<meta name="twitter:description"
    content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
<meta property="twitter:url" content="{{ URL::current() }}">

<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />
@endsection

@section('content')

<hr class="pt-0 mt-0">

<!-- START SECTION CONTACT -->
{{-- <section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                <div class="heading_s3">
                    <h2>Get In touch</h2>
                </div>
                <div class="field_form">
                    <form method="post" name="enq">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input required="required" placeholder="Enter Name *" id="first-name"
                                    class="form-control" name="name" type="text">
                            </div>
                            <div class="form-group col-lg-12">
                                <input required="required" placeholder="Enter Email *" id="email" class="form-control"
                                    name="email" type="email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input required="required" placeholder="Enter Phone No. *" id="phone"
                                    class="form-control" name="phone" type="phone">
                            </div>
                            <div class="form-group col-lg-12">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject"
                                    type="subject">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea required="required" placeholder="Message *" id="description"
                                    class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default"
                                    id="submitButton" name="submit" value="Submit">Submit</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                <div class="contact_map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 text-center p-0">
                <div class="icon_box text_white bg-dark small_padding h-100 animation" data-animation="fadeInUp"
                    data-animation-delay="0.1s">
                    <div class="box_icon mb-3">
                        <i class="ti-location-pin"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5 class="text-uppercase py-md-2">Address</h5>
                        <p>123 Street, New South London , UK</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center p-0">
                <div class="icon_box text_white bg_blue small_padding h-100 animation" data-animation="fadeInUp"
                    data-animation-delay="0.2s">
                    <div class="box_icon mb-3">
                        <i class="ti-time"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5 class="text-uppercase py-md-2">WORKING HOURS</h5>
                        <p>Mon to Sat - 9 AM to 10 PM<br>Sunday - 9 AM to 8 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center p-0">
                <div class="icon_box text_white bg_black small_padding h-100 animation" data-animation="fadeInUp"
                    data-animation-delay="0.3s">
                    <div class="box_icon mb-3">
                        <i class="ti-mobile"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5 class="text-uppercase py-md-2">Phone</h5>
                        <p>123-456-7890</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center p-0">
                <div class="icon_box text_white bg-dark small_padding h-100 animation" data-animation="fadeInUp"
                    data-animation-delay="0.4s">
                    <div class="box_icon mb-3">
                        <i class="ti-email"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5 class="text-uppercase py-md-2">Email</h5>
                        <p>info@sitename.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="contact" class="contact">
    <div class="container">

        <div>
            {{-- <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9517510854016!2d100.4181973741489!3d-1.1941821355306759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd3593d12641673%3A0x172cbff7bd1800b2!2sPandan%20View%20Mandeh!5e0!3m2!1sen!2sid!4v1687227375543!5m2!1sen!2sid"
                frameborder="0" allowfullscreen></iframe> --}}
            {{-- <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9517510854016!2d100.4181973741489!3d-1.1941821355306759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd3593d12641673%3A0x172cbff7bd1800b2!2sPandan%20View%20Mandeh!5e0!3m2!1sen!2sid!4v1687227375543!5m2!1sen!2sid"
                style="border:0;" allowfullscreen="true" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7124982543182!2d100.57676297414989!3d-1.3490055356961708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd34d7968e3b8cf%3A0xa41477ffa19841c2!2sKementerian%20Agama%20Pesisir%20Selatan!5e0!3m2!1sen!2sid!4v1693383191123!5m2!1sen!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location :</h4>
                        <p>MH2H+9PW, Jl. Imam Bonjol, Painan, Kec. Iv Jurai, Kabupaten Pesisir Selatan, Sumatera Barat
                            25651
                        </p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>pessel@kemenag.go.id</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+62822-9847-6941</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form id="groupForm" method="post" action="/messages/store" enctype="multipart/form-data" role="form"
                    class="php-email-form">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        {{-- <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-default">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
<!-- END SECTION CONTACT -->


@endsection


@section('_scripts')
{{-- No Data --}}
@endsection