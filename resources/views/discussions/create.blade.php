@extends('layouts.app')

@section('content')


<div class="card">
                <div class="card-header">Add Discussion</div>

                <div class="card-body">
                    <form action="{{route('discussions.store')}}" method="POST">
                        @csrf

                        <div class="form-group">

                            <lable for="title"> Title </lable>

                            <input type="text" name="title" class="form-control" value="" >
                            
                        </div>
                        
                        <div class="form-group">

                            <label for="content"> Content </label>

                            <!-- <input id="content" type="hidden" name="content">
                            <trix-editor input="content"></trix-editor> -->

                            <textarea rows="5" cols="5" id="content" name="content" class="form-control"></textarea>

                        </div>

                        <div class="form-group">

                            <label for="channel"> Channel </label>

                            <select name="channel" id="channel" class="form-control">
                                @foreach($channels as $channel)
                                <option value="{{ $channel->id }}" class="form-control">{{ $channel->name }}</option>
                                @endforeach
                                
                            </select>
                            
                        </div>

                        <button class="btn btn-success btn-sm" type="submit"> Create  Discussion </button>
                    </form>
                    
                </div>

      </div>
@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>

@endsection

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">

@endsection