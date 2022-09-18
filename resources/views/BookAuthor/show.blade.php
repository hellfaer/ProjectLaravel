@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mt-3">
                <div>{{ $post->id }}.{{ $post->the_author }}</div>
        </div>
        <div><a class="btn btn-primary mt-3" href="{{ route('post.edit', $post->id) }}">Edit</a></div>


        <div>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger mt-3">
            </form>
        </div>


        <div><a class="btn btn-primary mt-3" href="{{ route('post.index') }}">Back</a></div>

    </div>
@endsection
