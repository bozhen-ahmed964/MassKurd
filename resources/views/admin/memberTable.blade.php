@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Member Table</h3>
            <table class="table table-bordered table-striped" style="font-size:13px;color:black;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Weight</th>
                        <th>Height</th>
                        <th>Game Type</th>
                        <th>Pay</th>
                        <th>Status</th>
                        <th>Health Issue</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($memberTable as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Full_Name }}</td>
                            <td>{{ $item->Age }}</td>
                            <td>{{ $item->Gender }}</td>
                            <td>{{ $item->Phone_Number }}</td>
                            <td>{{ $item->Weight }}</td>
                            <td>{{ $item->Height }}</td>
                            <td>{{ $item->Game_Type }}</td>
                            <td>{{ $item->Pay }}</td>
                            <td>{{ $item->Statues }}</td>
                            <td>{{ $item->Health_Issue }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ url('edit-member/'.$item->id) }}" class="btn btn-dark">Edit</a>
                                <a href="{{ url('delete-member/'.$item->id) }}" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
