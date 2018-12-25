@extends('guest.layouts.master')

@section('body.slider')
    @include('guest.home.partials.__slider')
@endsection

@section('body.content')
    <!-- Policies============================================= -->
    @include('guest.home.partials.__policies')

    <div class="container clearfix">
        <!-- Index banner============================================= -->
        @include('guest.home.partials.__index_banner')

        <!-- Collection group============================================= -->
        @include('guest.home.partials.__collection_group')
        <div class='clear'></div>
        @include('guest.home.partials.__collection_group_temp1')

        <!-- Popular brand============================================= -->
        @include('guest.home.partials.__popular_brand')

        <!-- Subscribe group============================================= -->
        @include('guest.home.partials.__subscribe_group')
    </div>
@endsection
