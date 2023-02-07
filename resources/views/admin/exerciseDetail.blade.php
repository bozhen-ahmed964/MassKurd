@extends('layouts.admin')



@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Exercise Detail</h3>
                </div>
            </div>
            {{--
            <img
                class="rounded img-fluid border-3 border-primary shadow d-block w-100 fit-cover"
                style="height: 360px;width: 360px;background: center / cover no-repeat;" /> --}}
            <section class="position-relative py-4 py-xl-5" style="height: 715px;">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center" style="height: 715px;">
                        <div class="col-md-6 col-lg-4 col-xl-4" style="width: 760px;height: 715px;">
                            <h1>{{ $exerciseData->Exercise_Name }}</h1>
                            <h4>{{ $exerciseData->Primary_Muscle }}</h4>
                            <p style="height: 620px;color:black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore
                                repellat doloribus ea eius porro beatae reprehenderit enim illo ratione deleniti quisquam
                                illum perspiciatis minus sit, repudiandae blanditiis amet a magnam temporibus sequi
                                exercitationem tempore unde. Soluta ex in dolorem modi voluptas corporis delectus beatae
                                iste voluptates. Voluptatum velit alias excepturi recusandae facilis ipsa vero aut. Amet
                                repellat nulla optio voluptates nostrum quas. Repellendus, maxime cumque? Ea recusandae
                                eligendi autem pariatur, hic, libero, ipsa consectetur ratione soluta error at. Voluptates,
                                veniam error nam adipisci rerum possimus labore expedita repellat unde veritatis id tempore
                                modi amet accusamus. Tenetur similique natus eveniet perspiciatis!<br /></p>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4" style="width: 380px;height: 715px;"><img
                                src="{{ asset('images/' . $exerciseData->image) }}" class="border rounded border-3 shadow"
                                style="width: 360px;height: 360px;background: center / cover no-repeat;" />
                            <div style="margin-top: 10px;">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection




