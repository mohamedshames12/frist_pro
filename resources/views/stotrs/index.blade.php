@extends('layout')
@section('title' ,"store")

@section('container')
<div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">


    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                store
        </div>

        <div class="mt-8 ">
            @if (count($stotrs) > 0)
                
            @foreach ($stotrs as $stotr)
            <h4>{{$stotr["name"]}}</h1>
                @endforeach
                
                  @else  
                    <h2>no items yet</h1>
                @endif
        </div>

  
    </div>
</div>
@endsection 