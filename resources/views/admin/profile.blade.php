@extends('layouts.admin')



@section('content')
<style>
/* customize the color for odd rows */
    tr:nth-child(even) {
  background-color: #4949498b;
}
tr:nth-child(odd) {
  background-color: #cecece8a;
}
</style>
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h2>Member Profile</h2>
            </div>

            <div class="container-fluid px-2 px-md-4">
                <div class="page-header min-height-300 border-radius-xl mt-4"
                    style="background-image: url('https://images.unsplash.com/photo-1637666218229-1fe0a9419267?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');">
                    <span class="mask  bg-gradient-dark  opacity-6"></span>
                </div>


                {{-- information section --}}
                <div class="card card-body mx-3 mx-md-4 mt-n6">
                    <div class="row gx-4 mb-2">
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h4 class="mb-1">
                                    Gym Name
                                </h4>
                                <p class="mb-0 font-weight-normal text-lg">
                                    Owner Name
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            {{-- 1 --}}
                            <div class="col-4 col-xl-4">
                                <div class="card card-plain h-100">
                                    <div class="card-body p-3">
                                        <hr class="horizontal gray-light my-4">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Full Name:</strong> &nbsp; Bozhen Ahmed Hama Salih
                                            </li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Age:</strong> &nbsp; 22</li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Gender:</strong> &nbsp; Male</li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Phone Number:</strong> &nbsp; 0770 123 4567</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            {{-- 2 --}}
                            <div class="col-4 col-xl-3">
                                <div class="card card-plain h-100">
                                    <div class="card-body p-3">
                                        <hr class="horizontal gray-light my-4">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Weight:</strong> &nbsp; 88Kg</li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Height:</strong> &nbsp; 188Cm</li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Game Type:</strong> &nbsp; BodyBuilding</li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Health Issue:</strong> &nbsp; No Health Issue</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- 3 --}}
                            <div class="col-4 col-xl-3">
                                <div class="card card-plain h-100">
                                    <div class="card-body p-3">
                                        <hr class="horizontal gray-light my-4">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Pay:</strong> &nbsp; 30,000IQD</li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Status:</strong> &nbsp; <button
                                                    class="btn btn-success btn-sm">Active</button></li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">Start Date:</strong> &nbsp; 21/04/2023</li>
                                            <li class="list-group-item border-0 ps-0 pt-0 text-lg"><strong
                                                    class="text-dark">End Date:</strong> &nbsp; 21/04/2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- buttons --}}
                    <div class="row">
                    <div class="col-6">
                    <button class="btn btn-dark btn-lg">Get Training Course</button>
                    <button class="btn btn-dark btn-lg">Get Meal Course</button>
                    <button class="btn btn-dark btn-lg">Get Print</button>
                    </div>
                     </div>

                </div>





                {{-- table section --}}
                <div class="card card-body mx-3 mx-md-4 mt-6">

                    <div class="row">
                        <div class="row">


                            {{-- 1 --}}
                            <div class="col-4 col-xl-3">
                                <div class="card card-plain h-100">
                                    <div class="card-body p-3">
                                        <hr class="horizontal gray-light my-4">

                                        <h4>Training Course</h4>
                                        <table class="table table-bordered table-striped"
                                            style="font-size:13px;color:black;">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Exercise Name</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>


                            {{-- 2 --}}
                            <div class="col-4 col-xl-3 mx-10">
                                <div class="card card-plain h-100">
                                    <div class="card-body p-3">
                                        <hr class="horizontal gray-light my-4">
                                        <h4>Meal Course</h4>
                                        {{-- code here --}}


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        @endsection
