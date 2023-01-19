@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Cal Calculator</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    {{-- calc input --}}
                    <div class="card-body">
                        <h3>Input Section</h3>
                        
                    </div>
                </div>
                <div class="col-6">
                    {{-- calc input --}}
                    <div class="card-body">
                        <h3>Output Section & Guide</h3>
                    </div>
                </div>
            </div>

        </div>
    @endsection
