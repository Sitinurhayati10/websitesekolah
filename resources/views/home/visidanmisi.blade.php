@extends('layouts.templates.mentor.app')

@section('title', 'SMK KP Pasirjambu')

@section('sliders')

    <!-- ======= Menu VM Section ======= -->
    @include('home.components.menuvm')
    <!-- End Menu VM Section -->

@endsection

@section('content')

    <!-- ======= About Section ======= -->
    @include('home.components.visidanmisi')
    <!-- End About Section -->

@endsection
