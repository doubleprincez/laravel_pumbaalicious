@extends('layouts.app')

@section('title') Hot Deals @endsection

@section('content')
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">HOTTIES</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Hotties</li>
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
                    <h3 class="title">The Hot Joint</h3>
                </div>
            </div>
            <div class="row justify-content-center">

            </div>
        </div>
    </div>

@endsection