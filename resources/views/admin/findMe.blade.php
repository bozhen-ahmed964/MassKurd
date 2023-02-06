@extends('layouts.admin')



@section('content')
{{-- our team --}}
    <div class="container py-5">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Our Team</p>
                <h2 class="fw-bold">Contact Us Any Time</h2>
                <p class="text-muted">No matter the project, our team can handle it. </p>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 mx-auto" style="max-width: 700px;">
            <div class="col mb-4" style="width: 370px;">
                <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150"
                        src="team/avatar4.jpg" />
                    <h5 class="fw-bold mb-0">Bozhen Ahmed</h5>
                    <p class="text-muted mb-2">Manager<br />Back-End Developer</p>
                </div>
            </div>
            <div class="col mb-4" style="text-align: left;width: 300px;">
                <div class="text-center"><img class="rounded mb-3 fit-cover" width="150" height="150"
                        src="team/avatar6.jpg" />
                    <h5 class="fw-bold mb-0"><strong>Candy Jamal</strong></h5>
                    <p class="text-muted mb-2">UI | Ux <br />Front-End Developer</p>
                </div>
            </div>
        </div>
    </div>

{{-- packages --}}
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="fw-bold">Heading</h2>
                <p class="text-muted">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc.
                    Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-flex align-items-md-center align-items-xl-center">
            <div class="col offset-xl-2 mb-4">
                <div class="card  shadow-dark">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-0">Basic Bundle</h3>
                                <p>Suscipit</p>
                                <h4 class="display-4 fw-bold">$25</h4>
                            </div>
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Lectus ut nibh quam, felis porttitor.</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Ante nec venenatis etiam lacinia.</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Porta suscipit netus ad ac.</span></li>
                            </ul>
                        </div><button class="btn btn-primary d-block w-100" type="button">Button</button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card text-white bg-primary">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fw-bold text-white mb-0">Pro Bundle</h3>
                                <p>Suscipit + donec</p>
                                <h4 class="display-4 fw-bold text-white">$38</h4>
                            </div>
                            <div><span class="badge rounded-pill bg-primary text-uppercase bg-semi-white">Best Value</span>
                            </div>
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Lectus ut nibh quam, felis porttitor.</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Ante nec venenatis etiam lacinia.</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Porta suscipit netus ad ac.</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Morbi praesent aptent integer at.</span></li>
                                <li class="d-flex mb-2"><span
                                        class="bs-icon-xs bs-icon-rounded bs-icon-semi-white bs-icon bs-icon-xs me-2"><svg
                                            class="bi bi-check-lg text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z">
                                            </path>
                                        </svg></span><span>Nisl potenti ut auctor lobortis.</span></li>
                            </ul>
                        </div><button class="btn btn-light d-block w-100 bg-semi-white" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
