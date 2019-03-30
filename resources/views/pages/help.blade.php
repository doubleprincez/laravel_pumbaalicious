@extends('layouts.app')

@section('title') Help @endsection

@section('content')
    @extends('layouts.app')

@section('title') Contact Us @endsection

@section('content')

    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">HELP</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Help</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <div class="section">
        <div class="container">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Get Help</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <help-widget></help-widget>
            </div>
        </div>
    </div>

@endsection