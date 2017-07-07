@extends('web.layouts.app')

@section('content')

    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                get in touch
            </h3>
        </div>
    </section><!--page-tree end here-->

    <div class="space-70"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4 class="heading-mini">We’d Love to Hear From You</h4>
                <p>Get in touch using the contact details below:</p>
                <p>2764 Pleasnt Road</p>
                <p>Suite A # 10342</p>
                <p>Fort Mill, SC 29708 </p>
                <p>Phone: (704) 804-1856</p>
                <p>Email: <a href="mailto:joe@carolinarsp.com">joe@carolinarsp.com</a></p>
            </div>
            <div class="col-md-6 offset-md-1">
                <h4 class="heading-mini">Contact us</h4>
                <div class="my-contact-form">
                    <form name="sentMessage" id="contactForm" action="/contact" method="post" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-sm-12 controls">

                                        <input name="name" type="text" class="form-control" placeholder="Name*" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-sm-12 controls">
                                        <input name="email" type="email" class="form-control" placeholder="Email Address*" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-sm-12">
                                <input name="subject" type="text" class="form-control" placeholder="Subject" id="phone">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-sm-12 controls">
                                <textarea name="message" rows="5" class="form-control" placeholder="Message*" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        @if(count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="col-md-12 text-right error">
                                    <p class="text-danger">{{$error}}</p>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="form-group col-sm-12 text-right" style="margin-top: -15px;">
                                <button type="submit" class="btn theme-btn-color btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--contact page end-->

@endsection