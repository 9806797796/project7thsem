@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blood Banks</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bloodBanks as $bloodbank)
            <tr>
                <td>{{ $bloodbank->name }}</td>
                <td>{{ $bloodbank->address }}</td>
                <td>{{ $bloodbank->phone }}</td>

                <td>
                    <a href="{{ route('bloodbank.edit', $bloodbank->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('bloodbank.destroy', $bloodbank->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('bloodbank.create') }}" class="btn btn-success">Add Blood Bank</a>
</div>
@endsection