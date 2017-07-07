@extends('web.layouts.app')

@section('content')

    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                Who we are
            </h3>
        </div>
    </section><!--page-tree end here-->

    <div class="space-70"></div>

    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-6">
                <h4 class="heading-mini">About our company</h4>
                <p>
                    Carolina Roofing, Siding, Painting is a local, family owned company founded by Joe Reilly.
                    Joe has more than 30 years experience in the construction industry, with experience not only selling jobs,
                    and running jobs and running crews, but repairing and installing as well.
                </p>
                <p>
                    After spending 10 years working in the Charlotte area, Joe decided to branch out on his own. Carolina
                    Roofing, Siding, Painting strives to not only provide the highest quality work at fair prices, but to
                    bring his own sense of honesty and integrity into the Charlotte construction industry.
                </p>

                <br>

                <h4 class="heading-mini">Our Promise to You</h4>
                <ul class="icon-list list-unstyled">
                    <li><i class="ion-checkmark-round"></i> To provide only the best quality work and materials.</li>
                    <li><i class="ion-checkmark-round"></i> To get the work done right the first time.</li>
                    <li><i class="ion-checkmark-round"></i> To be punctual and polite.</li>
                </ul>

            </div>

            <div class="col-lg-6">
                <div id="js-grid-slider-thumbnail" class="cbp ">
                    <div class="cbp-item">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="/web/img/about-us/about-us-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="cbp-item">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="/web/img/about-us/about-us-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         <!--about company row end-->

        <!-- Add out teams include here -->
    </div><!--about content end-->

    <div class="space-50"></div>
    @include('web.includes.testimonials')
    <div class="space-70"></div>

@endsection