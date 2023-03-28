@extends('layouts.admin')




@section('content')
    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                <h3 class="text-white text-capitalize ps-3 ">Setting</h3>
            </div>
        </div>
        <div class="card-body shadow-dark">
            <table class="table table-hover shadow-dark align-items-center">
                <tbody style="font-weight: bold; font-size:20px;color:black;">
                    <tr>
                        <td>Deleting All Members In Active Table</td>
                        <td><a href="{{ url('/settings/deleteActiveMember') }}" class="btn btn-primary">Delete All</a></td>
                    </tr>
                    <tr>
                        <td>Deleting All Members In History Table</td>
                        <td><a href="{{ url('/settings/deleteHistoryMember') }}" class="btn btn-primary">Delete All</a></td>
                    </tr>
                    <tr>
                        <td>Deleting All Exercises</td>
                        <td><a href="{{ url('/settings/deleteExercise') }}" class="btn btn-primary">Delete All</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
