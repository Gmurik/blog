@extends('layouts.base')

@section('header')
    @include('bloсk.header')
@endsection

@section('search_panel')
        @include('bloсk.search_panel')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                @section('left_column')
{{--                    @include($page ?? '')--}}
                @show
            </div>
            <div class="col-xs-12 col-md-4">
                @section('right_column')

                    @include('widgets.widgets_author')

                    <div class="sidebar boxed push-down-30">
                        <div class="row">
                            <div class="col-xs-10  col-xs-offset-1">
                                @include('widgets.widgets_categories')
                                @include('widgets.widgets_selected_post')
                            </div>
                        </div>
                    </div>

                @show
            </div>
        </div>
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