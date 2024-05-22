@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header border-dark text-center"><h2>{{ __('menu.profile') }}</h2></div>

                <div class="card-body">
                    <!-- Profile photo -->
                    <profile-image-upload :user="{{ json_encode(Auth::user()) }}" :user-profile="{{ json_encode(Auth::user()->profile) }}" :lng-upload="{{ json_encode(__('menu.upload')) }}" :lng-no-img="{{ json_encode(__('menu.no_image_selected')) }}" :lng-select-img="{{ json_encode(__('menu.select_image')) }}" ></profile-image-upload>

                    <hr class="mt-5 mb-5" style="opacity: 1;">

                    <!-- Profile Name -->
                    <div class="text-center">
                        <h5><b>{{ __('menu.settings_name_title') }}</b></h5>
                        <p class="text-muted"><small>{{ __('menu.settings_name_des') }}</small></p>
                    </div>
                    <form method="POST" action="{{ route('settings.change_name') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end fw-bold">{{ __('menu.name') }} :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border-top-0 border-end-0 border-start-0 rounded-0 border-dark" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('menu.save') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <hr class="mt-5 mb-5" style="opacity: 1;">

                    <!-- Profile Description -->
                    <div class="text-center">
                        <h5><b>{{ __('menu.profile_des_title') }}</b></h5>
                        <p class="text-muted"><small>{{ __('menu.profile_des_des') }}</small></p>
                    </div>
                    <form method="POST" action="{{ route('profile.change_des') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end fw-bold">{{ __('menu.profile_des_title') }} :</label>

                            <div class="col-md-6">
                                <textarea id="des" name="des" class="form-control @error('des') is-invalid @enderror rounded-1 border-dark text-left" rows="8" cols="50">{{ Auth::user()->profile->user_des }}</textarea>

                                @error('des')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('menu.save') }}
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
