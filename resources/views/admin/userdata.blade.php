@extends('admin.layout.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>FullName</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>SSN</th>
                <th>CPN</th>
                <th>EIN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userData as $user)
                <tr>
                    <td scope="row">{{ $user->full_name }}</td>
                    <td>{{ $user->birth }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->ssn }}</td>
                    <td>{{ $user->cpn }}</td>
                    <td>{{ $user->ein }}</td>
            @endforeach

        </tbody>
    </table>
@endsection
