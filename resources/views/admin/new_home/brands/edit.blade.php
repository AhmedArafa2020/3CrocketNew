<!-- resources/views/admin/new_about/edit.blade.php -->

@extends('admin.layouts.app')

@section('content')


    <div class="card">
        <div class="card-header">
            <h4>Edit New Brands Section</h4>
        </div>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.new_brands.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Small Title -->
                <div class="form-group">
                    <label>Small Title</label>
                    <input type="text" name="sm_title" class="form-control"
                           value="{{ old('sm_title', $section->sm_title ?? '') }}">
                </div>

                <!-- Big Title -->
                <div class="form-group">
                    <label>Big Title</label>
                    <input type="text" name="big_title" class="form-control" value="{{ old('big_title', $section->big_title ?? '') }}">
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control">{{ old('description', $section->description ?? '') }}</textarea>
                </div>

                <!-- Logos Upload -->
                <div class="form-group">
                    <label>Logos (You can upload multiple)</label>
                    <label>Logos (JSON Array of Paths)</label>
                    <textarea name="logos" class="form-control" rows="5">{{ old('logos', json_encode($section->logos)) }}</textarea>
                    <small class="text-muted">Example: ["images/logo1.png", "images/logo2.png"]</small>

                </div>

                <!-- Show Existing Logos -->
                <div class="mb-3">
                    <label>Current Logos:</label>
                    <div class="d-flex flex-wrap gap-2">
                        @if(!empty($section->logos))
                            @foreach($section->logos as $logo)
                                <img src="{{ asset('storage/' . $logo) }}" alt="logo" width="80">
                            @endforeach
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Section</button>
            </form>


        </div>
    </div>
@endsection
