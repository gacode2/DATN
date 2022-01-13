@extends('layouts.app')

@section('content')
<!-- ***** Main Banner Area Start ***** -->
@include('home.main-banner')
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
@include('home.features')
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
@include('home.call-to-action')
<!-- ***** Call to Action End ***** -->

<!-- ***** Our Classes Start ***** -->
@include('home.our-classes')
<!-- ***** Our Classes End ***** -->

@include('home.schedule')

<!-- ***** Testimonials Starts ***** -->
@include('home.trainers')
<!-- ***** Testimonials Ends ***** -->

<!-- ***** Contact Us Area Starts ***** -->
@include('home.contact-us')
<!-- ***** Contact Us Area Ends ***** -->
@endsection