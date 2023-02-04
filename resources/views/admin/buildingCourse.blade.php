@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body shadow-dark">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Building Course</h3>
                </div>
            </div>
            {{-- sort section --}}

        </div>
    </div>

    {{-- traininns --}}
    <div class="card my-4">
        <div class="card-body shadow-dark">
            <form action="{{ url('insertExercise') }}" method="post">
                @csrf
                <label class="form-label" style="color:rgb(0, 0, 0);"> Exercise Name :&nbsp;
                    <input class="form-control form-control-lg shadow-dark form-outline" type="text"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Exercise_Name" required="">
                </label>
                <label class="form-label" style="color:rgb(0, 0, 0);"> Primary Muscle :&nbsp;
                    <Select
                        class="form-control form-control-lg shadow-dark form-outline"style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="Primary_Muscle" required="">
                        <option value="chest">Chest</option>
                        <option value="trapezius">trapezius</option>
                        <option value="shoulder">Shoulder</option>
                        <option value="back / wing">Back / Wing</option>
                        <option value="erector spinae">Erector Spinae</option>
                        <option value="biceps">Biceps</option>
                        <option value="triceps">Triceps</option>
                        <option value="forearm">Forearm</option>
                        <option value="abs / core">Abs / Core</option>
                        <option value="leg">Leg</option>
                        <option value="caif">Caif</option>
                        <option value="hips">Hips</option>
                        <option value="cardio">Cardio</option>
                        <option value="full body">Full Body</option>

                    </Select>
                </label>
                <label class="form-label" style="color:rgb(0, 0, 0);"> image :&nbsp;
                    <input class="form-control form-control-lg shadow-dark form-outline" type="file"
                        style="width: 310px;border-radius: 10px;border:2px solid rgb(0, 0, 0);color:rgb(0, 0, 0);font-size:22px"
                        name="image" required="">
                </label>
                <button class="btn btn-success btn-lg" type="submit"
                    style="margin-left: 15px;margin-top:15px;border-radius: 20px;">Add New Exercise
                </button>
            </form>
            <div class="row gy-4 row-cols-2 row-cols-md-4">
                {{-- Chest --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $chestCount[0]->chestCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">Chest</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- trapezius --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $trapeziusCount[0]->trapeziusCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">trapezius</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- shoulder --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $shoulderCount[0]->shoulderCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">shoulder</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- back / wing --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $backCount[0]->backCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">back / wing</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- erector spinae --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $erectorCount[0]->erectorCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">Erector Spinae</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- biceps --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $bicepCount[0]->bicepCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">biceps</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- triceps --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $tricepCount[0]->tricepCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">triceps</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- forearm --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $forearmCount[0]->forearmCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">forearm</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- abs --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $absCount[0]->absCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">abs</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- leg --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $legCount[0]->legCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">leg</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- caif --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $caifCount[0]->caifCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">caif</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- hips --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $hipsCount[0]->hipsCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">hips</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- cardio --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $cardioCount[0]->cardioCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">cardio</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
                {{-- full body --}}
                <div class="col" style="width: 175px;">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center py-3"
                        style="width: 160px;height: 145.391px;">
                        <div class="px-3">
                            <h2 class="fw-bold mb-0">{{ $fullbodyCount[0]->fullbodyCount }}</h2>
                            <p class="mb-0" style="font-weight: bold;">full body</p>
                        </div>
                        <input type="radio" style="font-size: 20px;width: 20px;height: 20px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    @foreach ($courses as $exercises)
                        <div class="col">
                            <div><img src="{{ asset('images/' . $exercises->image) }}"
                                    class="rounded img-fluid border-3 border-primary shadow d-block w-100 fit-cover"
                                    style="height: 360px;width: 360px;background: center / cover no-repeat;" />
                                <div class="py-4">
                                    <h4>{{ $exercises->Exercise_Name }}</h4>
                                    <p>{{ $exercises->Primary_Muscle }}</p>
                                    <button class="btn btn-success btn-lg border rounded shadow"
                                        type="button">Edit</button>
                                    <button class="btn btn-primary btn-lg border rounded shadow" type="button"
                                        style="margin-left: 10px;">Show More</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
