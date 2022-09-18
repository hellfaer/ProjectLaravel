@extends('layouts.main')
@section('content')
        <div class="container">
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="mt-3 mb-3">
                    <label for="Author" class="form-label">Author</label>
                    <input type="text" name="the_author" class="form-control" id="Author" placeholder="Author">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
@endsection
