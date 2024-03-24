@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header border-dark text-center"><h2>{{ __('menu.settings') }}</h2></div>

                <div class="card-body">
                    @if(Auth::user()->profile->profile_photo)
                        <div class="w-full" style="height: 400px; background: #ffffff url('uploads/{{Auth::user()->id }}/profile/{{Auth::user()->profile->profile_photo}}') no-repeat center;"></div>
                    @else
                        <div class="w-full bg-secondary" style="height: 400px;"></div>
                    @endif

                </div>

                <form action="{{ route('profile.photo_upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror border-top-0 border-end-0 border-start-0 rounded-0 border-dark">
                        </div>

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>

                    </div>
                </form>
                <div style="height: 30px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
