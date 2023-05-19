@extends('layouts.admin')




@section('content')

        <div class="card-header p-0 position-relative mt-2 mx-3 z-index-2 ">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                <h3 class="text-white text-capitalize ps-3 ">Setting</h3>
            </div>
        </div>

            <table class="table table-hover align-items-center mt-5 ">
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

@endsection
