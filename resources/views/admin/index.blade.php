@extends('layouts.admin')



@section('content')


            <div class="card-header p-0 position-relative mt-4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 my-4">
                    <h3 class="text-white text-capitalize ps-3 ">Dashboard</h3>
                </div>
            </div>



            <div class="container-fluid py-4">
      <div class="row">
        {{-- Total Member --}}
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <h4 class="mb-0">{{ $totalMember }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-dark font-weight-bolder">Total Members</span></p>
            </div>
          </div>
        </div>



        {{-- Total Male Member --}}
       <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">male</i>
              </div>
              <div class="text-end pt-1">
                <h4 class="mb-0">{{ $totalMaleMember }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-info text font-weight-bolder">Total Male Members</span></p>
            </div>
          </div>

        </div>


        
        {{-- Total Female member --}}
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">female</i>
              </div>
              <div class="text-end pt-1">
                <h4 class="mb-0">{{ $totalFemaleMember }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger  font-weight-bolder">Total Female Members</span></p>
            </div>
          </div>
        </div>


        {{-- Total Trainers --}}
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <h4 class="mb-0">{{ $totalTrainer }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-dark font-weight-bolder">Total Trainers</span></p>
            </div>
          </div>
        </div>


        {{-- Total Exercise --}}
        <div class="col-xl-3 col-sm-6 mt-5">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">fitness_center</i>
              </div>
              <div class="text-end pt-1">
                <h4 class="mb-0">{{ $totalExerciseNumber }}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-dark font-weight-bolder">Total Exercises</span></p>
            </div>
          </div>
        </div>




      </div>
    </div>









    @endsection
