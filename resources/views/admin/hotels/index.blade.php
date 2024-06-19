<!-- admin.hotels.index.blade.php -->
@extends('admin.layouts.app')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Manage Hotels</h4>
            <a href="{{ route('admin.hotels.create') }}" class="btn btn-primary mb-3">Create New Hotel</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>city</th>
                            <th>district</th>
                            <th>ward</th>
                            <th>detail Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hotels as $hotel)
                            <tr>
                                <td>{{ $hotel->idHotel }}</td>
                                <td>{{ $hotel->name }}</td>
                                <!-- <td>{{ $hotel->address->city }}, {{ $hotel->address->district }}, {{ $hotel->address->ward }}, {{ $hotel->address->detailAddress }}</td> -->
                                <td>{{ $hotel->address->city }}</td>
                                <td>{{ $hotel->address->district }}</td>
                                <td>{{ $hotel->address->ward }}</td>
                                <td>{{ $hotel->address->detailAddress }}</td>
                                <td class="table-actions">
                                    <a href="{{ route('admin.hotels.edit', $hotel->idHotel) }}" class="btn btn-sm">Edit</a>
                                    <form action="{{ route('admin.hotels.destroy', $hotel->idHotel) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
