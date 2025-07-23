@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.profile', $post->user) }}">{{ $post->user->name }}</a>
                </div>
                <div class="card-body">
                    <p>{{ $post->content }}</p>
                </div>
                <div class="card-footer text-muted">
                    {{ $post->created_at->diffForHumans() }}
                    @if ($post->user_id === auth()->id())
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    @endif
                </div>
            </div>

            <hr>

            <h4>Comments</h4>

            @foreach ($post->comments as $comment)
                <div class="card mt-3">
                    <div class="card-body">
                        <p>{{ $comment->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        <a href="{{ route('users.profile', $comment->user) }}">{{ $comment->user->name }}</a>
                        {{ $comment->created_at->diffForHumans() }}
                    </div>
                </div>
            @endforeach

            <hr>

            <div class="card">
                <div class="card-header">Add Comment</div>
                <div class="card-body">
                    <form action="{{ route('comments.store', $post) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="3" required></textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Post Comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
