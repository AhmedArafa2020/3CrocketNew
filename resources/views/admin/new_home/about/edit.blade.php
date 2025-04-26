<!-- resources/views/admin/new_about/edit.blade.php -->

@extends('admin.layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Edit New About Section</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.new_about.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="sm_title">Small Title</label>
                    <input type="text" class="form-control" name="sm_title" id="sm_title" value="{{ old('sm_title', $newAboutSection->sm_title) }}">
                </div>

                <div class="form-group">
                    <label for="big_title">Main Title</label>
                    <input type="text" class="form-control" name="big_title" id="big_title" value="{{ old('big_title', $newAboutSection->big_title) }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $newAboutSection->description) }}</textarea>
                </div>



                <div class="form-group">
                    <label for="overview_number">Overview Number</label>
                    <input type="text" class="form-control" name="overview_number" id="overview_number" value="{{ old('overview_number', $newAboutSection->overview_number) }}">
                </div>

                <div class="form-group">
                    <label for="overview_text">Overview Text</label>
                    <input type="text" class="form-control" name="overview_text" id="overview_text" value="{{ old('overview_text', $newAboutSection->overview_text) }}">
                </div>

                <div class="form-group">
                    <label for="btn_text">Button Text</label>
                    <input type="text" class="form-control" name="btn_text" id="btn_text" value="{{ old('btn_text', $newAboutSection->btn_text) }}">
                </div>

                <div class="form-group">
                    <label for="btn_link">Button Link</label>
                    <input type="text" class="form-control" name="btn_link" id="btn_link" value="{{ old('btn_link', $newAboutSection->btn_link) }}">
                </div>

                <div class="form-group">
                    <label for="feature_cards">Feature Cards (JSON)</label>
                    <textarea class="form-control" name="feature_cards" id="feature_cards" rows="5">{{ old('feature_cards', json_encode($newAboutSection->feature_cards)) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
@endsection
