@extends('layouts.main')

@section('content')
    <style>
        .pattern {
            background-color: #F8FAFC;
            opacity: 0.3;
            background-image: linear-gradient(#444cf7 1.3px, transparent 1.3px), linear-gradient(to right, #444cf7 1.3px, #F8FAFC 1.3px);
            background-size: 26px 26px;
        }
    </style>

    {{-- header --}}
    @include('home.header')
    <!-- End header -->

    {{-- partnership --}}
    @include('home.partner')
    {{-- end partnership --}}

    {{-- about himatika --}}
    @include('home.about')
    {{-- end about himatika --}}

    {{-- marquee --}}
    @include('home.marquee')
    {{-- end marquee --}}

    {{-- anggota --}}
    @include('home.anggota')
    {{-- end anggota --}}

    {{-- article --}}
    @include('home.event')
    {{-- end article --}}

    {{-- tulisan --}}
    @include('home.tulisan')
    {{-- end tulisan --}}
@endsection
