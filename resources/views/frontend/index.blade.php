@extends('layouts.frontend')

@section('Review Maniac || Home')

@section('content')
 @include('partials.latest-slider')

    <div class="col-md-12 card bg-primary">
        <div class="card-header search">
          Search Reviews
        </div>
    </div>

    <div class="row">
      {!! Form::open(['class'=>'row mt-2']) !!}
        <div class=" offset-1 col-md-2">
            {!! Form::label('search-filter', 'Search Filters', ['class'=>' search-label']) !!}

        </div>
        <div class=" col-md-2">
          {!! Form::select('search-filter', ['all'=>'All','pornstar'=>'Pornstar', 'movie'=>'Movies','channel='=>'Channel'], true,
          ['class'=>'form-control']) !!}
        </div>

        <div class=" col-md-3">
          
          {!! Form::text('search-text', null, ['class'=>'form-control','placeholder'=>'Write pornstars name here ']) !!}
          
        </div>

        <div class=" col-md-2 offset-1">
           
           {!! Form::submit('Search', ['class'=> 'form-control btn btn-primary']) !!}
           
        </div>

        {!! Form::close() !!}
    </div>
@endsection
