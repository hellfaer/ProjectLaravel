@extends('layouts.main')
@section('content')
        <div class="container">
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mt-3 mb-3">
                    <label for="Author" class="form-label">Author</label>
                    <input type="text" name="the_author" class="form-control" id="Author" placeholder="Author" value="{{ $post->the_author }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
@endsection
