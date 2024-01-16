@extends('layouts.templates.mentor.app')

@section('title', 'SMK KP Pasirjambu')

@section('sliders')

    <!-- ======= Menu SS Section ======= -->
    @include('home.components.menuss')
    <!-- End Menu SS Section -->

@endsection

@section('content')

    <!-- ======= About Section ======= -->
    @include('home.components.sejarahsingkat')
    <!-- End About Section -->

@endsection
