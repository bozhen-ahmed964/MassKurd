@extends('layouts.admin')

<style>
    .pagination {
        display: flex;
        justify-content: start;
        align-items: center;
        margin-top: 20px;
    }

    .page-number {
        font-size: 18px;
        font-weight: bold;
        margin-right: 10px;
    }

    .pagination-links {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .pagination-links li {
        margin: 0 5px;
    }

    .pagination-links li.disabled span,
    .pagination-links li.active span {
        background-color: #333;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .pagination-links li a {
        display: block;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: #eee;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .pagination-links li a:hover {
        background-color: #ddd;
    }
</style>



@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Members Table</h3>
                </div>
            </div>
            <div class="row my-2">
                <h3>Sort By : </h3>
                <div class="col-3">
                    <a href="{{ url('/memberTable/sort_By_Name') }}" class="btn btn-info btn-lg">Name</a>
                    <a href="{{ url('/memberTable/sort_By_Gender') }}" class="btn btn-info btn-lg mx-2">Gender</a>
                </div>
            </div>
            <div class="border rounded">
                <table class="table table-hover align-items-center">
                    <thead style="font-size:18px;background-color:#494949d5;color:white;">
                        <tr>
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
                                <td style="text-align:left">{{ $item->Full_Name }}</td>
                                <td>{{ $item->Age }}</td>
                                <td>{{ $item->Gender }}</td>
                                <td>{{ $item->Pay }}IQD</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <button
                                        class="{{ $item->created_at < $item->updated_at ? 'btn btn-success btn-sm' : 'btn btn-dark btn-sm' }}"
                                        {{ $item->created_at >= $item->updated_at ? 'disabled' : '' }}>
                                        {{ $item->created_at < $item->updated_at ? 'Active' : 'Deactive' }}
                                    </button>
                                </td>
                                <td>
                                    <a href="{{ url('memberTable/profile/' . $item->id) }}"
                                        class="btn btn-dark btn-lg">Info</a>
                                    <a href="{{ url('edit-member/' . $item->id) }}" class="btn btn-dark btn-lg">Edit</a>
                                    <a href="{{ url('delete-member/' . $item->id) }}"
                                        class="btn btn-primary btn-lg">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination  ">
                    <span class="page-number">Page {{ $memberTable->currentPage() }} of
                        {{ $memberTable->lastPage() }}</span>
                    <ul class="pagination-links">
                        @if ($memberTable->onFirstPage())
                            <li class="disabled"><span>&laquo;</span></li>
                        @else
                            <li><a href="{{ $memberTable->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                        @endif

                        @foreach ($memberTable->getUrlRange(1, $memberTable->lastPage()) as $page => $url)
                            @if ($page == $memberTable->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($memberTable->hasMorePages())
                            <li><a href="{{ $memberTable->nextPageUrl() }}" rel="next">&raquo;</a></li>
                        @else
                            <li class="disabled"><span>&raquo;</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
