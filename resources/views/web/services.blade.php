@extends('web.layouts.app')

@section('content')

    <section id="content-region-3" class="padding-40 page-tree-bg">
        <div class="container">
            <h3 class="page-tree-text">
                {{$service['title']}}
            </h3>
        </div>
    </section><!--page-tree end here-->

    <div class="space-70"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-post-section">
                    <div class="blog-post-img">
                        <img src="{{ $service['img'] }}" class="img-fluid" alt="">
                    </div>

                    <div class="blog-post-detail">{!! $service['description'] !!}</div>
                </div><!--blog post section end-->
                <div class="space-40"></div>
            </div><!--blog content-->
            <div class="col-md-4">
                @include('web.includes.sidebar');
            </div>
        </div>
    </div><!--blog full page content end here-->



@endsection