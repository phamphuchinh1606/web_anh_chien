@extends('guest.layouts.master')

@section('body.content')
    <div class="container clearfix">
        <input type="hidden" id="collection_id" value="=0">
        {{--Collection Banner--}}
        @include('guest.collections.partials.__collection_banner')

        <div class="row collection_wrapper">
            <!-- Sidebar ============================================= -->
            <a href="#" id="sidebar_trigger" class="hidden-lg hidden-md"><i class="fa fa-filter"></i></a>
            @include('guest.collections.partials.__collection_sidebar')

            <!-- Post Content ============================================= -->
            @include('guest.collections.partials.__post_content')

            <div class="clear"></div>
        </div>
    </div>
@endsection