@extends('admin.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
@endpush

@section('content')
<br>  <br>  <br>
        <div class="container">
            <h1>Booking Slots</h1>
            <a href="{{ route('booking-slots.create') }}" class="btn btn-primary">Add New Slot</a>

            @if(session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif

            <table class="table mt-3">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Booked</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slots as $slot)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($slot->date)->format('d M, Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($slot->time)->format('h:i A') }}</td>
                        <td>{{ $slot->is_booked ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('booking-slots.edit', $slot->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('booking-slots.destroy', $slot->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $slots->links() }}
        </div>

@endsection

@push('scripts_bottom')
    <script src="/assets/admin/vendor/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="/assets/default/js/admin/categories.min.js"></script>
@endpush
