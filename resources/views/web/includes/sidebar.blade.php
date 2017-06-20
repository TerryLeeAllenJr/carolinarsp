<!--<div class="space-70"></div>
<div class="sidebar-box">
    <div class="widget-search">
        <form class="search-form">
            <input disabled type="text" class="form-control" placeholder="search here...">
            <i class="ion-search" data-toggle="tooltip" data-placement="top" title="" data-original-title="hit enter to search"></i>
        </form>
    </div>
</div><hr>-->
<div class="sidebar-box">
    <h4>Services</h4>
    <ul class="cat-list">
        <li>
            <a href="/services/roofing"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Residential and Commercial Roofing"
               class="hover-color">
                Roofing
            </a>
        </li>
        <li>
            <a href="/services/siding"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Residential and Commercial Siding"
               class="hover-color">
                Siding
            </a>
        </li>
        <li>
            <a href="/services/painting"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Residential and Commercial Painting"
               class="hover-color">
                Painting
            </a>
        </li>
        <li>
            <a href="/services/gutters"
               data-toggle="tooltip"
               data-placement="right"
               title=""
               data-original-title="Residential and Commercial Gutter Systems"
               class="hover-color">
                Gutters
            </a>
        </li>
    </ul>
</div><hr>
<div class="sidebar-box">
    <h4>Our Promise to You</h4>
    <p>In addition to using only the best possible materials and installers, we offer a 100% satisfaction guarantee!</p>
</div><hr>
<div class="sidebar-box">
    <h4>Recent Work</h4>
    @foreach( $recentWork AS $work)
    <div class="recent">
        <span>
            <img src="{{$work['img']}}" class="img-responsive" alt="">
        </span>
        <p><a href="#" class="hover-color">{{$work['title']}}</a></p>
        <span class="recent-date">{{$work['date']}}</span>
    </div>
    @endforeach

</div>
<div class="clearfix"></div>
<hr>