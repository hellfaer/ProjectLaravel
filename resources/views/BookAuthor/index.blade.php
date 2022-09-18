@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="row mt-3">
                <div class="mt-3 mb-3">
                    <a class="btn btn-primary" href="{{ route('post.create') }}">Create</a>
                </div>

                @foreach($BookAuthors as $BookAuthor)
                    <div><a href="{{route('post.show', $BookAuthor->id)}}">{{ $BookAuthor->id }}.{{ $BookAuthor->the_author }}</a></div>
                @endforeach
            </div>
        </div>
@endsection
