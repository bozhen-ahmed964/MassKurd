@extends('layouts.admin')



@section('content')

    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                <h3 class="text-white text-capitalize ps-3 ">Members Table</h3>
              </div>
            </div>
            <table class="table table-bordered shadow-dark align-items-center">
                <thead style="font-size:18px;background-color:#494949d5;color:white;">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Pay</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody style="font-weight: bold; font-size:20px; text-align:center; color:black;">
                    @foreach ($memberTable as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td style="text-align:left">{{ $item->Full_Name }}</td>
                            <td>{{ $item->Age }}</td>
                            <td>{{ $item->Gender }}</td>
                            <td>{{ $item->Pay }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td><button class="btn btn-success btn-sm">{{ $item->Statues }}Active</button></td>
                            <td>
                                <a href="{{ url('memberTable/profile/'.$item->id) }}" class="btn btn-dark btn-lg">Info</a>
                                <a href="{{ url('edit-member/'.$item->id) }}" class="btn btn-dark btn-lg">Edit</a>
                                <a href="{{ url('delete-member/'.$item->id) }}" class="btn btn-primary btn-lg">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
