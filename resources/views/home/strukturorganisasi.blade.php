@extends('layouts.templates.mentor.app')

@section('title', 'SMK KP Pasirjambu')

@section('sliders')

    <!-- ======= Menu SO Section ======= -->
    @include('home.components.menuso')
    <!-- End Menu SO Section -->

@endsection

@section('content')

    <!-- ======= About Section ======= -->
    @include('home.components.strukturorganisasi')
    <!-- End About Section -->

@endsection
