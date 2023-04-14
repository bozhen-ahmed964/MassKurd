@extends('layouts.admin')



@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Exercise') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('updateExercise', $exerciseData->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="Exercise_Name" class="col-md-4 col-form-label text-md-right">{{ __('Exercise Name') }}</label>

                            <div class="col-md-6">
                                <input id="Exercise_Name" type="text" class="form-control @error('Exercise_Name') is-invalid @enderror" name="Exercise_Name" value="{{ old('Exercise_Name', $exerciseData->Exercise_Name) }}" required autocomplete="Exercise_Name" autofocus>

                                @error('Exercise_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Primary_Muscle" class="col-md-4 col-form-label text-md-right">{{ __('Primary Muscle') }}</label>

                            <div class="col-md-6">
                                <input id="Primary_Muscle" type="text" class="form-control @error('Primary_Muscle') is-invalid @enderror" name="Primary_Muscle" value="{{ old('Primary_Muscle', $exerciseData->Primary_Muscle) }}" required autocomplete="Primary_Muscle">

                                @error('Primary_Muscle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" accept="image/*">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Exercise') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
