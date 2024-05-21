@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Notes</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary">Create Note</a>
    <form action="{{ route('notes.search') }}" method="GET" class="mt-3">
        <input type="text" name="query" class="form-control" placeholder="Search notes...">
    </form>
    <div class="mt-3">
        @foreach($notes as $note)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $note->title }}</h5>
                    <p class="card-text">{{ Str::limit($note->content, 100) }}</p>
                    <a href="{{ route('notes.show', $note) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
