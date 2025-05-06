@extends('admin.layouts.app')

@push('styles_top')
    <link href="/assets/default/vendors/sortable/jquery-ui.min.css"/>
@endpush


    @section('content')
        <br>  <br>  <br>
        <div class="container">
            <h1>Edit Slot</h1>

            <form action="{{ route('booking-slots.update', $bookingSlot->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Date:</label>
{{--                    <input type="date" name="date" class="form-control" required value="{{ $bookingSlot->date }}">--}}
                    <input type="date" name="date" class="form-control" required value="{{ \Carbon\Carbon::parse($bookingSlot->date)->format('Y-m-d') }}">

                </div>

                <div class="form-group">
                    <label>Time:</label>
{{--                    <input type="time" name="time" class="form-control" required value="{{ $bookingSlot->time }}">--}}
                    <input type="time" name="time" class="form-control" required value="{{ \Carbon\Carbon::parse($bookingSlot->time)->format('H:i') }}">

                </div>

                <button class="btn btn-success mt-3">Update Slot</button>
            </form>
        </div>
    @endsection


@push('scripts_bottom')
    <script src="/assets/default/vendors/sortable/jquery-ui.min.js"></script>

    <script src="/assets/default/js/admin/categories.min.js"></script>
@endpush
