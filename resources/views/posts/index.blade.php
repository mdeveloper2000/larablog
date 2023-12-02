@extends('layouts.base')

@section('content')
    @include('partials._buttons')
    <x-flash-message />
    @include('partials._hero')
    <x-search />
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <x-hcard :post="$post" />
            @endforeach
        </div>
    </div>    
    <div class="container w-25 mt-5">
        @if(auth()->id() === 1)
            <div class="row text-center mt-5">
                <hr class="mt-5" />
                <a type="button" class="btn btn-success mt-5 mb-5" href="/posts/create">
                    <i class="bi bi-file-post-fill"></i> Create a post
                </a>
            </div>
        @endif
    </div>
@endsection