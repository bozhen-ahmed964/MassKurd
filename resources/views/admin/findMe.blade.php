@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container py-5">
                <div class="row mb-4 mb-lg-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <p class="fw-bold text-success mb-2">Our Team | Services</p>
                        <h3 class="fw-bold">We Can Do Best For You</h3>
                    </div>
                </div>
                <div class="row mb-4 mb-lg-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto"><img class="rounded border" /><img
                            class="rounded border" style="margin-left: 10px;" /></div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <div class="col mb-5"><img class="rounded img-fluid shadow" src="{{ asset('/images/extra/bozhen.jpg') }}" /></div>
                    <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                        <div>
                            <h5 class="fw-bold">Bozhen Ahmed </h5>
                            <p class="text-muted mb-4">Manager <br />Back-End Developer </p><button
                                class="btn btn-primary shadow" type="button">+964 000 000 0000</button>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <div class="col order-md-last mb-5"><img class="rounded img-fluid shadow" src="{{ asset('/images/extra/bozhen.jpg') }}" /></div>
                    <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                        <div>
                            <h5 class="fw-bold">Candy Jamal</h5>
                            <p class="text-muted mb-4">Front-End Developer<br />UI | UX</p><button
                                class="btn btn-primary shadow" type="button"><strong>+964 000 000 0000</strong></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
