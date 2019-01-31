@extends('layouts.base')

@section('header')
    @include('bloсk.header')
@endsection

@section('search_panel')
    @include('bloсk.search_panel')
@endsection

    @section('content')
        <div class="container">
            @section('center_column')
                @include($page)
            @show
        </div>
    @endsection

@section('footer_links')
    @include('bloсk.footer_links')
@endsection

@section('copyrights')
    @include('bloсk.copyrights')
@endsection

@section('bottom_scripts')
@endsection