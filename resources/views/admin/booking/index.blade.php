@extends('admin.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
@endpush

@section('content')
    <br><br>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Bookings</h1>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>WhatsApp Number</th>
                    <th>Grade</th>
                    <th>Booking Date</th>
                    <th>Booking Time</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @forelse($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $booking->whatsapp_number }}</td>
                        <td>{{ $booking->grade }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('F d, Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->booking_time)->format('h:i A') }}</td>
                        <td>{{ $booking->created_at->format('F d, Y h:i A') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No bookings yet.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $bookings->links() }} {{-- pagination links --}}
        </div>
    </div>
@endsection

@push('scripts_bottom')
    <script src="/assets/admin/vendor/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="/assets/default/js/admin/categories.min.js"></script>
@endpush
