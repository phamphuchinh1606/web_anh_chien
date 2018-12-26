@extends('guest.layouts.master')

@section('body.content')
    <section id="content">
        <div class="content-wrap" style="padding-top: 5px;">
            <div class="container clearfix">
                <div class="fashion_news_blog_custom">
                    <div class="title">
                        <h3 class="main-title">
                            Tin Tức
                            <i></i>
                        </h3>
                    </div>
                    <!--fashion_news-->
                    @include('guest.blogs.partials.__fashion_news')
                    <!--end fashion_news-->
                </div>

                {{--Blog List--}}
                @include('guest.blogs.partials.__blog_list')
            </div>
        </div>
    </section>
@endsection