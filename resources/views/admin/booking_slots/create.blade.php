@extends('admin.layouts.app')

@push('styles_top')
    <link href="/assets/default/vendors/sortable/jquery-ui.min.css"/>
@endpush


@section('content')
    <br><br><br>
    <div class="container">
        <h1>Add New Slot</h1>

        <form action="{{ route('booking-slots.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Date:</label>
                <input type="date" name="date" class="form-control" required
                       min="{{ now()->toDateString() }}"
                       value="{{ old('date') }}">
                @error('date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Time:</label>
                <input type="time" name="time" class="form-control" required
                       value="{{ old('time') }}">
                @error('time')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-success mt-3">Save Slot</button>
        </form>
    </div>
@endsection


@push('scripts_bottom')
    <script src="/assets/default/vendors/sortable/jquery-ui.min.js"></script>

    <script src="/assets/default/js/admin/categories.min.js"></script>
@endpush
