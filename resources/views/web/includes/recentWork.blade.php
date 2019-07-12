<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="heading-sec">Recent work</h3>
        </div>
    </div><!--row-->

    <div class="row">

        @foreach ($recentWork AS $work)
        <div class="col-md-4 col-sm-6 margin-btm-40">
            <div class="portfolio-sec">
                <div class="portfolio-thumnail">
                    <a href="#">
                        <img src="{{$work->featuredImage->url}}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="portfolio-desc text-center">
                    <h4 class="portfolio-post-title">{{$work->title}}</h4>
                    <span class="portfolio-post-cat">{{$work->workCompletedDatePretty}}</span>
                    <h4><a href="#" class="btn theme-btn-default btn-lg">More detail</a></h4>
                </div>
            </div>
        </div><!--portfolio item -->
        @endforeach

    </div><!--row portfolio item-->
</div><!--recent work container end-->
