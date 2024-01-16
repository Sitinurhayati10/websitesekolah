@extends('layouts.templates.mentor.app')

@section('title', 'SMK KP Pasirjambu')

@section('sliders')

    <!-- ======= Menu 2 Section ======= -->
    @include('home.components.menu2')
    <!-- End Menu 2 Section -->

@endsection

@section('content')

    <!-- ======= About Section ======= -->
    @include('home.components.kurikulum')
    <!-- End About Section -->

@endsection
