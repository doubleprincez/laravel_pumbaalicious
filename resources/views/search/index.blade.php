
@extends('layouts.app')

@section('title') Search for {{ request('query') }} @endsection

@section('content')
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">SEARCH</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">SEARCH</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <section class="section">
        <div class="container">
            <h2 class="title align-items-sm-center">SEARCH RESULT</h2>
            <?php use Carbon\Carbon; ?>
            <div class="row justify-content-center">
                @if(isset($searchResults))

                    <div class="subtitle"> {{ $searchResults->total() }} results found for "{{ request('query') }}" </div>
                    <div class="content">
                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                            <h3 class="title">{{ ucfirst($type) }}</h3>
                            <div class="row">
                                @foreach($modelSearchResults as $searchResult)
                                    <?php $x = $searchResult->searchable->user; ?>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="product">
                                                <div class="product-img">
                                                    <a href="{{ $searchResult->url }}" >
                                                        <img src="./storage/{{ $searchResult->searchable->default_image?$searchResult->searchable->default_image:$searchResult->searchable->avatar }}"  style="width:120px;height:120px;" >
                                                    </a>

                                                        <div class="product-label">
                                                            @if(isset($searchResult->searchable->discount))
                                                            <span class="sale">-{{ $searchResult->searchable->discount }}%</span>
                                                            @endif
                                                            @if(isset($searchResult->searchable->type)&& $searchResult->searchable->type != '')
                                                            <span class="{{ $searchResult->searchable->type }}">{{ strtoupper($searchResult->searchable->type) }}</span>
                                                            @endif
                                                        </div>

                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">
                                                        @if(isset($x))
                                                            <small> by {{ $x['fname'].' '.$x['lname'] }} </small>
                                                        @endif
                                                    </p>
                                                    <h3 class="product-name"><a href="#">{{ $searchResult->title }} </a></h3>
                                                    @if(isset($searchResult->searchable->current_price))  <h4 class="product-price">&#8358 {{ number_format($searchResult->searchable->current_price,0) }}
                                                        <del class="product-old-price">&#8358 {{ ''.number_format($searchResult->searchable->previous_price,0) }}</del>
                                                        @endif
                                                    </h4>
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>

                                                    <?php $dt = new Carbon($searchResult->searchable->created_at); ?><br/>
                                                    <small> {{ $dt->diffForHumans()  }}</small>
                                                </div>
                                                <div class="add-to-cart">
                                                   <a href="{{ $searchResult->url }}"><button class="add-to-cart-btn"><i class="fa fa-eye"></i> view</button></a>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        @endforeach
                            <div class=" is-center is-centered">{{ $searchResults->appends($_REQUEST)->render() }}</div>
                    </div>
                    @else
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <input type="text" name="query" />
                        <input type="submit" class="btn btn-sm btn-primary" value="Search" />
                    </form>
                @endif
            </div>
        </div>
    </section>
@endsection
