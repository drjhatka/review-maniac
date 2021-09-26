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
      {!! Form::open() !!}
        <div class="col-md-5">
            {!! Form::label('search-filter', 'Search Filters', []) !!}

        </div>
        <div class="card col-md-5">
          {!! Form::select('search-filter', ['pstars'=>'PrnStar', 'movies'=>'Movies','channel='=>'Channel'], true,[]) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
