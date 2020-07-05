@extends('layouts.app')

@section('content')

<!-- <div class="d-flex justify-content-end mb-2">

    <a href="{{route('discussions.create')}}" title="" class="btn btn-success">Add Discussion</a>
    

</div>  --> 

@foreach($discussions as $discussion)

    <div class="card">

                   @include('partials.discussion-header')
                <div class="card-body">

                    <div class="text-center">

                    <strong class="text-center">{{$discussion->title}}</strong>

                     </div>
                
                </div>
            
        </div>

@endforeach


{{ $discussions->links()}}

@endsection
