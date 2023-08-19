@extends('frontend.layouts.master')
@section('title')
{{$settings->site_name}} || Home
@endsection

@section('content')

    <!--============================
        HOME CONTAINER START
    ==============================-->
    @include('frontend.home.sections.home-container')
    <!--============================
        HOME CONTAINER END
    ==============================-->

@endsection