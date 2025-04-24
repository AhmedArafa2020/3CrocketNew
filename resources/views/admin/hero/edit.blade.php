@extends('admin.layouts.app')

@section('content')
    <br><br>
    <h1>Edit Hero Section</h1>

    <form action="{{ route('hero.update', $heroSection->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $heroSection->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $heroSection->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="button_text">Button Text</label>
            <input type="text" name="button_text" id="button_text" class="form-control" value="{{ old('button_text', $heroSection->button_text) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Hero Section</button>
    </form>
@endsection
