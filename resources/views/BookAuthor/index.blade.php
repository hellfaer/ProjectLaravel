@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="row mt-3">
                @foreach($BookAuthors as $BookAuthor)
                    <div>{{ $BookAuthor->id }}.{{ $BookAuthor->the_author }}</div>
                @endforeach
            </div>
        </div>
@endsection
