@extends('layouts.templates.mentor.app')

@section('title', 'SMK KP Pasirjambu')

@section('sliders')

    <!-- ======= Menu 2 MSS Section ======= -->
    @include('home.components.menu2mss')
    <!-- End Menu 2 MSS Section -->

@endsection

@section('content')

    <!-- ======= About Section ======= -->
    @include('home.components.manajemensikapsiswa')
    <!-- End About Section -->

@endsection
