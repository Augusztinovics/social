@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                <div class="card-header border-dark text-center"><h2>{{ __('menu.settings') }}</h2></div>

                <div class="card-body">

                    <div class="mt-3">
                        <div class="text-center">
                            <h5><b>{{ __('menu.settings_lg_title') }}</b></h5>
                            <p class="text-muted"><small>{{ __('menu.settings_lg_des') }}</small></p>
                        </div>
                        <form action="{{ route('settings.change_language') }}" method="POST" class="lg-select">
                            @csrf
                            <select name="language" id="language" onchange="this.form.submit()">
                                <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : ''}}>English</option>
                                <option value="hu" {{ app()->getLocale() === 'hu' ? 'selected' : ''}}>Magyar</option>
                                <option value="sr" {{ app()->getLocale() === 'sr' ? 'selected' : ''}}>Serbian</option>
                            </select>
                        </form>
                    </div>

                    <hr class="mt-5 mb-5" style="opacity: 1;">

                    <!-- Name -->
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

                    <!-- Email -->
                    <div class="text-center">
                        <h5><b>{{ __('menu.settings_email_title') }}</b></h5>
                        <p class="text-muted"><small>{{ __('menu.settings_email_des') }}</small></p>
                    </div>
                    <form method="POST" action="{{ route('settings.change_email') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end fw-bold">{{ __('menu.email_address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror border-top-0 border-end-0 border-start-0 rounded-0 border-dark" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email_confirm_password" class="col-md-3 col-form-label text-md-end fw-bold">{{ __('menu.your_password') }}</label>

                            <div class="col-md-6">
                                <input id="email_confirm_password" type="password" class="form-control @error('email_confirm_password') is-invalid @enderror border-top-0 border-end-0 border-start-0 rounded-0 border-dark" name="email_confirm_password" value="" required >

                                @error('email_confirm_password')
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

                    <!-- Password -->
                    <div class="text-center">
                        <h5><b>{{ __('menu.settings_pas_title') }}</b></h5>
                        <p class="text-muted"><small>{{ __('menu.settings_pas_des') }}</small></p>
                    </div>
                    <form method="POST" action="{{ route('settings.change_password') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="new_password" class="col-md-3 col-form-label text-md-end fw-bold">{{ __('menu.new_password') }}</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror border-top-0 border-end-0 border-start-0 rounded-0 border-dark" name="new_password" required>

                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-end fw-bold">{{ __('menu.confirm_password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control border-top-0 border-end-0 border-start-0 rounded-0 border-dark" name="new_password_confirmation" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password_confirm_password" class="col-md-3 col-form-label text-md-end fw-bold">{{ __('menu.your_password') }}</label>

                            <div class="col-md-6">
                                <input id="password_confirm_password" type="password" class="form-control @error('password_confirm_password') is-invalid @enderror border-top-0 border-end-0 border-start-0 rounded-0 border-dark" name="password_confirm_password" value="" required >

                                @error('password_confirm_password')
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
