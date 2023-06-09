@extends('layout.app')
@section('konten')
    @include('Komponen.hero')
    @include('Komponen.about')
    @include('Komponen.walikelas')
    @include('Komponen.projek')
    @include('Komponen.kontak')
    @include('Komponen.footer')
    <a class="to-top">
        <svg class="" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </a>
@endsection
